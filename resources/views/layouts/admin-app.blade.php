<!DOCTYPE html>
<!--
Template Name: Enigma - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="dark">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Enigma admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Enigma Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>{{ $title }} - Admin</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{asset('dist/css/app.css')}}" />
        <!-- END: CSS Assets-->
        @livewireStyles
    </head>
    <!-- END: Head -->
    <body class="py-5 md:py-0">

        <!-- BEGIN: Top Bar -->
        @include('components.navbar')
        <!-- END: Top Bar -->
        <div class="flex overflow-hidden">
            <!-- BEGIN: Side Menu -->
            @include('components.slidebar')
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
           {{$slot}}
            <!-- END: Content -->
        </div>


        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="{{asset('dist/js/app.js')}}"></script>
        <!-- END: JS Assets-->
        @livewireScripts
        @stack('scripts')
    </body>
</html>
