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
                    <a href="{{ asset('/') }}"><img id="logotipe" src="{{ asset('img/logo.png') }}" alt=""></a>
                </div>

            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <ul class="nav justify-content-end">
                    <li class="nav-item header_menu_item">
                        <a class="nav-link header_menu_link" href="{{ route('faq') }}">FAQ</a>
                    </li>
                    <li class="nav-item header_menu_item">
                        <a class="nav-link header_menu_link" href="https://lifeworks.com/en">{{ ('front.our_website') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
