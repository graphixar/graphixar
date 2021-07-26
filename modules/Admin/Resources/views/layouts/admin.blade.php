<!DOCTYPE html>
<html class="loading" lang="fa" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="Graphixar">
    <title>{{ config('app.name') }} | @yield('title', $page_title ?? '')</title>
    <link rel="shortcut icon" type="image/x-icon" href="media/logo/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    {{-- Begin Styles --}}
    @foreach(config('layout.resources.css') as $style)
        <link href="{{ asset($style) }}" rel="stylesheet" type="text/css"/>
    @endforeach

    @yield('styles')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

<!-- BEGIN: Header-->
@include('admin::partials.base.header')
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
@include('admin::partials.base.sidebar')
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
@include('admin::partials.base.content')
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
@include('admin::partials.base.footer')
<!-- END: Footer-->


@foreach(config('layout.resources.js') as $script)
    <script src="{{ asset($script) }}" type="text/javascript"></script>
@endforeach

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
@yield('scripts')
</body>
<!-- END: Body-->

</html>
