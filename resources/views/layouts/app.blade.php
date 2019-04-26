<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <!-- Styles -->
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>


@include('layouts.nav_bar')
@yield('content')
<script src="{{URL::to('bootstrap/js/jquery.js')}}"></script>
<script src="{{URL::to('bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>
