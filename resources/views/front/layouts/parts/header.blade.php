<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/front/css/app.css') }}">
</head>
<html>
<body>
<header id="header" class="header">
    <div class="container-fluid ">
        <div class="row">

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="logo_block">
                    <a href="{{ asset('/') }}"><img id="logotype" src="{{ asset('img/logo.png') }}" alt=""></a>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <nav class="navbar navbar-light">
                    <form class="form-inline footer_form" method="GET" action="{{ route('search') }}" enctype="multipart/form-data">
                        <input type="text" name="search" class="form-control" id="search" placeholder="{{ __('front.search') }}">
                        <button class="btn my-2 my-sm-0" type="submit">{{ __('front.search') }}</button>
                    </form>
                </nav>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <ul class="nav justify-content-end">
                    <li class="nav-item header_menu_item">
                        <a class="nav-link header_menu_link" href="{{ route('faq') }}">FAQ</a>
                    </li>
                    <li class="nav-item header_menu_item">
                        <a class="nav-link header_menu_link" href="{{ route('contact.form') }}">{{ __('front.contact_us') }}</a>
                    </li>
                    <li class="nav-item header_menu_item">
                        <a class="nav-link header_menu_link" href="https://lifeworks.com/en">{{ __('front.our_website') }}</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</header>
