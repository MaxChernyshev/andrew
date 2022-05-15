<footer class="fixed-bottom" id="footer">
    <div class="container">
        <div class="row pt-2 pb-2">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 footer_menu_1_6">
                <ul class="nav">
                    <li class="nav-item footer_menu_item">
                        <a class="nav-link footer_menu_link" href="#">Terms of use</a>
                    </li>
                    <li class="nav-item footer_menu_item">
                        <a class="nav-link footer_menu_link" href="#">Our policies</a>
                    </li>
                </ul>
            </div>
{{--            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 footer_menu_2_6">--}}
{{--                <div class="d-flex justify-content-end">--}}
{{--                    lang--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="col-2">
                <div class="dropdown show">
                    <a class="btn btn-secondary text-uppercase" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            {{--                        @if(localization()->getSupportedLocales()->count())--}}

                            {{--                            @endif--}}
                        @endforeach
                    </ul>
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

{{--<script src="{{ asset('/js/front/app.js') }}"></script>--}}
<script src="{{ asset('/js/front/faq.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</body>
</html>
