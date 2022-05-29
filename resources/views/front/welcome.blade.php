@extends('front.layouts.layout')

@section('content')
    <div class="container-fluid mt-5 mb-5">
        <div class="row d-flex align-items-center">
            <div class="col-8 mx-auto">
                <div class="jumbotron mt-5 mb-5">
                    <h1 class="display-4">{{ __('front.hello') }}</h1>
                    <p class="lead pt-5 pb-5">{{ __('front.home_page') }} LifeWorks.</p>
                    <hr class="my-4">

                    <a href="{{ route('faq') }}">{{ __('front.go_to_questions') }}</a>
                    <hr class="my-4">
                    <a href="https://lifeworks.com" target="_blank">{{ __('front.visit_our_website') }} lifeworks.com</a>


                </div>
            </div>
        </div>
    </div>

@endsection
