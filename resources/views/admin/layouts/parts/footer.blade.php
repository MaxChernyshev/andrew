<footer class="main-footer fixed-bottom mt-0 pt-0 mb-0 pb-0">
    <small><strong>Copyright © {{ now()->year }} <a href="https://maksimchernyshev.com" target="_blank">Max Chernyshev</a>.</strong> All rights reserved.</small>
</footer>
<script src="{{ asset('js/admin/js/adminlte.js') }}"></script>
@if(in_array(Route::current()->getName(),['admin.subjects.create', 'admin.subjects.edit', 'admin.questions.create', 'admin.questions.edit']))
    <script>
        $('#content_en').summernote({
            tabsize: 2,
            height: 200
        });

        $('#content_fr').summernote({
            tabsize: 2,
            height: 200
        });

        $('#answer_en').summernote({
            tabsize: 2,
            height: 200
        });

        $('#answer_fr').summernote({
            tabsize: 2,
            height: 200
        });
    </script>
@endif

@livewireScripts
</body>
</html>
