@php
    $paidOrderAmount = App\Models\Order::where('payment_status', 'Paid')->sum('total_amount');
@endphp
<header id="page-topbar">
    <div class="navbar-header">
        <div class="container-fluid">
            <div class="float-end">

                <div class="dropdown d-inline-block d-lg-none ms-2">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                        aria-labelledby="page-header-search-dropdown">

                        <form class="p-3">
                            <div class="m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i
                                                class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="dropdown d-none d-sm-inline-block">
                    <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        {{-- <img class="" src="{{ URL::asset('build/images/flags/us.jpg') }}" alt="Header Language" height="16"> --}}
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{ URL::asset('build/images/flags/spain.jpg') }}" alt="user-image" class="me-1" height="12">
                            <span class="align-middle">Spanish</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{ URL::asset('build/images/flags/germany.jpg') }}" alt="user-image" class="me-1" height="12">
                            <span class="align-middle">German</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{ URL::asset('build/images/flags/italy.jpg') }}" alt="user-image" class="me-1" height="12">
                            <span class="align-middle">Italian</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{ URL::asset('build/images/flags/russia.jpg') }}" alt="user-image" class="me-1" height="12">
                            <span class="align-middle">Russian</span>
                        </a>
                    </div>
                </div>

                <div class="dropdown d-none d-lg-inline-block ms-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                        <i class="mdi mdi-fullscreen"></i>
                    </button>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect"
                        id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="badge rounded-pill bg-danger ">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                        aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0"> Notifications </h6>
                                </div>
                                <div class="col-auto">
                                    <a href="#!" class="small"> View All</a>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 230px;">
                            <a href="" class="text-reset notification-item">
                                <div class="d-flex align-items-start">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-primary rounded-circle font-size-16">
                                            <i class="bx bx-cart"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mt-0 mb-1">Your order is placed</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">If several languages coalesce the grammar</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="" class="text-reset notification-item">
                                <div class="d-flex align-items-start">
                                    <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" class="me-3 rounded-circle avatar-xs"
                                        alt="user-pic">
                                    <div class="flex-1">
                                        <h6 class="mt-0 mb-1">James Lemire</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">It will seem like simplified English.</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="" class="text-reset notification-item">
                                <div class="d-flex align-items-start">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-success rounded-circle font-size-16">
                                            <i class="bx bx-badge-check"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mt-0 mb-1">Your item is shipped</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">If several languages coalesce the grammar</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="text-reset notification-item">
                                <div class="d-flex align-items-start">
                                    <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" class="me-3 rounded-circle avatar-xs"
                                        alt="user-pic">
                                    <div class="flex-1">
                                        <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="p-2 border-top d-grid">
                            <a class="btn btn-sm btn-link font-size-14 " href="javascript:void(0)">
                                <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                            </a>
                        </div>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="{{ url('images/user-profile') }}/{{ auth()->user()->profile_image }}"
                            alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ms-1">{{ auth()->user()->name }}</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="{{ route('admin.profile.index') }}"><i
                                class="bx bx-user font-size-16 align-middle me-1"></i>
                            Profile</a>
                        <a class="dropdown-item" href="{{ route('admin.settings.index') }}"><i
                                class="bx bx-wrench font-size-16 align-middle me-1"></i> Settings</a>
                        <a class="dropdown-item d-block" href="#"><span
                                class="badge bg-success float-end">{{ $paidOrderAmount }}</span><i
                                class="bx bx-wallet font-size-16 align-middle me-1"></i> Wallet</a>
                        {{-- <a class="dropdown-item" href="#"><i
                                class="bx bx-lock-open font-size-16 align-middle me-1"></i>
                            Lock screen</a> --}}
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect"
                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                        aria-controls="offcanvasExample">
                        <i class="mdi mdi-settings-outline"></i>
                    </button>
                </div>

            </div>
            <div>
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="{{ url('admin/dashboard') }}" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ URL::asset('images/logo.png') }}" alt="" _height="20" style="
                            width: 109px;
                            height: 70px;
                        ">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ URL::asset('images/logo.png') }}" alt="" _height="17" style="
                            width: 109px;
                            height: 70px;
                        ">
                        </span>
                    </a>

                    <a href="{{ url('admin/dashboard') }}" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ URL::asset('images/logo.png') }}" alt="" _height="20" style="
                            width: 109px;
                            height: 70px;
                        ">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ URL::asset('images/logo.png') }}" alt="" _height="19" style="
                            width: 109px;
                            height: 70px;
                        ">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect"
                    id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <!-- App Search-->
                <!-- <form class="app-search d-none d-lg-inline-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="mdi mdi-magnify"></span>
                    </div>
                </form> -->

                <!-- <div class="dropdown dropdown-mega d-none d-lg-inline-block ms-2">
                    <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                        aria-haspopup="false" aria-expanded="false">
                        Mega Menu
                        <i class="mdi mdi-chevron-down"></i>
                    </button> -->
                    <!-- <div class="dropdown-menu dropdown-megamenu">
                        <div class="row">
                            <div class="col-sm-6">

                                <div class="row">
                                    <div class="col-md-4">
                                        <h5 class="font-size-14 mt-0">UI Components</h5>
                                        <ul class="list-unstyled megamenu-list text-muted">
                                            <li>
                                                <a href="javascript:void(0);">Lightbox</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Range Slider</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Sweet Alert</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Rating</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Forms</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Tables</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Charts</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4">
                                        <h5 class="font-size-14 mt-0">Applications</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a href="javascript:void(0);">Ecommerce</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Calendar</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Email</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Projects</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Tasks</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Contacts</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4">
                                        <h5 class="font-size-14 mt-0">Extra Pages</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a href="javascript:void(0);">Light Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Compact Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Horizontal layout</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Maintenance</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Coming Soon</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Timeline</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">FAQs</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5 class="font-size-14 mt-0">Components</h5>
                                        <div class="px-lg-2">
                                            <div class="row g-0">
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="{{ URL::asset('build/images/brands/github.png') }}" alt="Github">
                                                        <span>GitHub</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="{{ URL::asset('build/images/brands/bitbucket.png') }}" alt="bitbucket">
                                                        <span>Bitbucket</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="{{ URL::asset('build/images/brands/dribbble.png') }}" alt="dribbble">
                                                        <span>Dribbble</span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row g-0">
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="{{ URL::asset('build/images/brands/dropbox.png') }}" alt="dropbox">
                                                        <span>Dropbox</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="{{ URL::asset('build/images/brands/mail_chimp.png') }}"
                                                            alt="mail_chimp">
                                                        <span>Mail Chimp</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="{{ URL::asset('build/images/brands/slack.png') }}" alt="slack">
                                                        <span>Slack</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div>
                                            <div class="card text-white mb-0 overflow-hidden text-white-50"
                                                style="background-image: url('assets/images/megamenu-img.png');background-size: cover;">
                                                <div class="card-img-overlay"></div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <h4 class="text-white mb-3">Sale</h4>

                                                            <h5 class="text-white-50">Up to <span
                                                                    class="font-size-24 text-white">50 %</span> Off
                                                            </h5>
                                                            <p>At vero eos accusamus et iusto odio.</p>
                                                            <div class="mb-4">
                                                                <a href="#" class="btn btn-success btn-sm">View
                                                                    more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                <!-- </div> -->
            </div>

        </div>
    </div>
</header>
