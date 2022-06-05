@include('admin.layouts.parts.header')
@include('admin.layouts.parts.sidebar')
@include('admin.layouts.parts.messages')

<div class="content-wrapper">
@yield('content')
</div>
@include('admin.layouts.parts.footer')
