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
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 footer_menu_2_6">
                <div class="d-flex justify-content-end">
                    lang
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
<script src="{{ asset('/js/front/faq.js') }}"></script>

</body>
</html>
