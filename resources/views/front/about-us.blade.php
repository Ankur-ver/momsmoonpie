@extends('layouts.front')
@section('style')
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <h2 class="comn-title-text mb-5 mt-3 text-center">About <span>Us</span></h2>
            <div class="row">
                {!! $page->content !!}
            </div>
        </div>
    </section>
    <!-- content -->
@endsection
