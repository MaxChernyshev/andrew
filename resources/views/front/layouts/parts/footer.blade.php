<footer class="bottom" id="footer">
    {{--<footer class="fixed-bottom" id="footer">--}}
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="footer_logo">
                    <a href="{{ asset('/') }}"><img id="logotype" src="{{ asset('img/logo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 footer_sm d-flex justify-content-end">
                <a href="https://twitter.com/LifeWorks" target="_blank">
                    <img class="tw p-2 m-2" src="{{ asset('img/twitter.svg') }}" alt="LifeWorks twitter">
                </a>
                <a href="https://www.youtube.com/c/LifeWorksInc" target="_blank">
                    <img class="tw p-2 m-2" src="{{ asset('img/youtube.svg') }}" alt="LifeWorks youtube">
                </a>
                <a href="https://ca.linkedin.com/company/lifeworks" target="_blank">
                    <img class="tw p-2 m-2" src="{{ asset('img/linkedin.svg') }}" alt="LifeWorks linkedin">
                </a>
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-light">
                    <form class="form-inline footer_form" method="GET" action="{{ route('search') }}" enctype="multipart/form-data">
                        <input type="text" name="search" class="form-control" id="search" placeholder="Search">
                        <button class="btn my-2 my-sm-0" type="submit">{{ __('front.search') }}</button>
                    </form>
                </nav>
            </div>
        </div>

        <div class="row pt-2 pb-2">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 footer_menu_1_6">
                <ul class="footer_doc">
                    <li class="nav-item footer_menu_item">
                        <a class="nav-link footer_menu_link" href="#">{{ __('front.accessibility') }}</a>
                    </li>
                    <li class="nav-item footer_menu_item">
                        <a class="nav-link footer_menu_link" href="#">{{ __('front.privacy_policy') }}</a>
                    </li>
                    <li class="nav-item footer_menu_item">
                        <a class="nav-link footer_menu_link" href="#">{{ __('front.our_policies') }}</a>
                    </li>
                    <li class="nav-item footer_menu_item">
                        <a class="nav-link footer_menu_link" href="#">{{ __('front.terms_of_use') }}</a>
                    </li>
                </ul>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 footer_menu_2_6">
                <div class="d-flex justify-content-end">
                    <div class="col-2">
                        <div class="dropdown show footer_lang">
                            <a class="text-uppercase d-flex justify-content-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ localization()->getCurrentLocale() }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                @foreach(localization()->getSupportedLocales() as $key => $locale)
                                    <li>
                                        <a hreflang="{{ $key }}"
                                           href="{{ localization()->getLocalizedURL($key) }}"
                                           class="p-2 link text-uppercase {{ localization()->getCurrentLocale() == $key ? 'is-active' : '' }}"
                                        >{{ $key }}
                                        </a>
                                    </li>
                                    @if(!$loop->last)
                                        <div class="dropdown-divider"></div>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <p class="footer_year">© 1996-{{ now()->year }} LifeWorks Inc.</p>
            </div>
        </div>
    </div>
</footer>


<script src="{{ asset('/js/front/faq.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

<script src="{{ asset('/js/front/app.js') }}"></script>
<script src="{{ asset('public/js/front/js') }}"></script>


</body>
</html>
