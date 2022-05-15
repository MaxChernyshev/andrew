<footer class="fixed-bottom" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="footer_logo">
                    <a href="{{ asset('/') }}"><img id="logotipe" src="{{ asset('img/logo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="footer_sm_tw" >
                    <img src="{{ asset('img/twitter.svg') }}" alt="">
                </div>
                <div class="footer_sm_in">
                    <img src="{{ asset('img/youtube.svg') }}" alt="">
                </div>
                <div class="footer_sm_yu">
                    <img src="{{ asset('img/linkedin.svg') }}" alt="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-light bg-light">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#">Navbar</a>
                    </nav>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#">Navbar</a>
                    </nav>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#">Navbar</a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row pt-2 pb-2">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 footer_menu_1_6">
                <ul class="nav">
                    <li class="nav-item footer_menu_item">
                        <a class="nav-link footer_menu_link" href="#">Accebility</a>
                    </li>
                    <li class="nav-item footer_menu_item">
                        <a class="nav-link footer_menu_link" href="#">Privacy policy</a>
                    </li>
                    <li class="nav-item footer_menu_item">
                        <a class="nav-link footer_menu_link" href="#">Our policies</a>
                    </li>
                    <li class="nav-item footer_menu_item">
                        <a class="nav-link footer_menu_link" href="#">Our policies</a>
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

<script src="{{ asset('/js/front/app.js') }}"></script>
<script src="{{ asset('public/js/front/js') }}"></script>

</body>
</html>
