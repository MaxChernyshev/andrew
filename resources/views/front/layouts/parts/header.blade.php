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
{{--    <div class="container-fluid ">--}}
{{--        <div class="row">--}}
{{--            <div class="col-2">--}}
{{--                <div class="dropdown show">--}}
{{--                    <a class="btn btn-secondary text-uppercase" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        {{ localization()->getCurrentLocale() }}--}}
{{--                    </a>--}}

{{--                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">--}}
{{--                        @foreach(localization()->getSupportedLocales() as $key => $locale)--}}
{{--                            <li>--}}
{{--                                <a hreflang="{{ $key }}"--}}
{{--                                   href="{{ localization()->getLocalizedURL($key) }}"--}}
{{--                                   class="p-2 link text-uppercase {{ localization()->getCurrentLocale() == $key ? 'is-active' : '' }}"--}}
{{--                                >{{ $key }}--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            @if(!$loop->last)--}}
{{--                                <div class="dropdown-divider"></div>--}}
{{--                            @endif--}}
{{--                                                    @if(localization()->getSupportedLocales()->count())--}}

{{--                                                        @endif--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <div class="container-fluid ">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="logo_block">
                    <img id="logotipe" src="{{ asset('img/logo.png') }}" alt="">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <ul class="nav justify-content-end">
                    <li class="nav-item header_menu_item">
                        <a class="nav-link header_menu_link" href="#">FAQ</a>
                    </li>
                    <li class="nav-item header_menu_item">
                        <a class="nav-link header_menu_link" href="#">Our website</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
