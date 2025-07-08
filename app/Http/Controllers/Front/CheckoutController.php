<?php

namespace App\Http\Controllers\Front;

use App\Models\City;
use App\Models\Order;
use App\Models\State;
use App\Models\Country;
use App\Models\OrderItem;
use App\Models\PromoCode;
use App\Models\ProductSize;
use App\Models\CustomerCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
  public function index(Request $request) {
    $customer = auth()->guard('customer')->user();

    if (!$customer) {
        return redirect()->route('front.customer-login')->with('error', 'Please login to proceed to checkout.');
    }

    $settings = DB::table('settings')->first();
    $cart = CustomerCart::where('customer_id', $customer->id)->get();

    $states = State::where('country_id', Country::COUNTRYID_INDIA)->orderBy('name')->get();
    $shippingCities = City::where('state_id', $customer->shipping_state_id)->orderBy('name')->get();
    $billingCities = City::where('state_id', $customer->billing_state_id)->orderBy('name')->get();

    if ($customer->last_visited_page != 'Payment') {
        $customer->last_visited_page = 'Checkout';
        $customer->save();
    }

    return view('front.checkout', compact('customer', 'cart', 'settings', 'states', 'shippingCities', 'billingCities'));
}

    public function getCities($state_id){
        $cities = City::where('state_id', $state_id)->orderBy('name')->get();
        
        return response()->json(['cities' => $cities]);
    }

    public function applyPromocode(Request $request){
        $totalAmount = $request->subTotal;
        $promocode = $request->promocode;

        $promocode = PromoCode::where('code', $request->promocode)->first();
        if (!$promocode) {
            return response()->json(['status' => 'error', 'message' => 'This promocode is either invalid or Wrong.']);
        }

        if (!$promocode->isActive()) {
            return response()->json(['status' => 'error', 'message' => 'This promocode is either expired or inactive.']);
        }

        if ($promocode->type == 'percentage') {
            $discount = ($totalAmount * $promocode->discount) / 100;
        } else {
            $discount = $promocode->discount;
        }
        $finalAmount = max(0, $totalAmount - $discount);

        return response()->json([
            'status' => 'success',
            'message' => 'Promocode applied successfully!',
            'discount' => $discount,
            'final_amount' => $finalAmount,
            'promocode_id' => $promocode->id,
        ]);
    }

public function checkout(Request $request)
{
    
    try {
        $customer = auth()->guard('customer')->user();

        if (!$customer) {
            return redirect()->route('front.customer-login')->with('error', 'Please log in to continue.');
        }
        // Prepare order data
        $orderData = [
            'customer_id' => $customer->id,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'contact_number' => $request->contact_number,
            'email' => $request->email,
            'billing_street_address' => $request->shipping_street_address,
            'billing_country' => 'India',
            'billing_state' => $request->shipping_state,
            'billing_city' => $request->shipping_city,
            'billing_postal_code' => $request->shipping_postal_code,
            'shipping_street_address' => $request->shipping_street_address,
            'shipping_country' => 'India',
            'shipping_state' => $request->shipping_state,
            'shipping_city' => $request->shipping_city,
            'shipping_postal_code' => $request->shipping_postal_code,
            'payment_method' => 'COD',
            'subtotal' => $request->subtotal,
            'shipping_charge' => $request->shipping_charge ?? 0,
            'discount_amount' => $request->discount_amount ?? 0,
            'total_amount' => $request->total_amount,
        ];

        $order = Order::create($orderData);

        // Get cart items
        $cart = CustomerCart::where('customer_id', $customer->id)->get();

        if ($cart->count() > 0) {
            foreach ($cart as $item) {
                $productSize = ProductSize::find($item->product_size_id);

                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item->product_id,
                    'size_id' => $productSize?->size_id ?? null,
                    'price' => $item->price,
                    'quantity' => $item->quantity,
                    'total_amount' => $item->price * $item->quantity,
                ]);
            }
        } else {
            return redirect()->route('front.cart')->with('error', 'Your cart is empty.');
        }

        return redirect()->route('front.index')->with('success', 'Order placed successfully!');
    } catch (\Throwable $e) {
        \Log::error('Checkout Error: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Something went wrong. Please try again.');
    }
}

public function phonePe2(Request $request)
{
    $customer = auth()->guard('customer')->user();
    \Log::info('✅ payment_init() called with data:', $request->all());
    // Get cart total amount
    $cartItems = CustomerCart::where('customer_id', $customer->id)->get();

    if ($cartItems->isEmpty()) {
        return redirect()->back()->with('error', 'Your cart is empty.');
    }

    $totalAmount = 0;
    foreach ($cartItems as $item) {
        $totalAmount += $item->price * $item->quantity;
    }

    // Convert to paisa (PhonePe expects amount in paisa)
    $amountInPaisa = $totalAmount * 100;

    $data = [
        'merchantId' => 'PGTESTPAYUAT',
        'merchantTransactionId' => uniqid(),
        'merchantUserId' => 'MUID' . $customer->id,
        'amount' => $amountInPaisa,
        'redirectUrl' => route('front.phonepay.pay-return-url'),
        'redirectMode' => 'POST',
        'callbackUrl' => route('front.phonepay.pay-callback'),

        'paymentInstrument' => [
            'type' => 'PAY_PAGE',
        ],
    ];

    $encode = base64_encode(json_encode($data));

    $saltKey = '099eb0cd-02cf-4e2a-8aca-3e6c6aff0399';
    $saltIndex = 1;

    $string = $encode . '/pg/v1/pay' . $saltKey;
    $sha256 = hash('sha256', $string);
    $finalXHeader = $sha256 . '###' . $saltIndex;

    $url = 'https://api.phonepe.com/apis/hermes/pg/v1/pay';
    
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode(['request' => $encode]),
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'X-VERIFY: ' . $finalXHeader,
        ],
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
    ]);

    $response = curl_exec($curl);

    if (curl_errno($curl)) {
        return response()->json(['error' => curl_error($curl)], 500);
    }

    curl_close($curl);

    $responseData = json_decode($response, true);
    Log::info('🌐 Final Guzzle URL:', [$url]);
    if (isset($responseData['success']) && $responseData['success'] === true) {
        $redirectUrl = $responseData['data']['instrumentResponse']['redirectInfo']['url'];
        return redirect()->away($redirectUrl);
    } else {
        return redirect()->back()->with('error', 'Something went wrong with the payment initialization.');
    }
}
}