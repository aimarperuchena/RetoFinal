<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gasto-Society</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/dashboard/">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ secure_asset('assets/css/style.css') }}">
    <link href="{{secure_asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{secure_asset('assets/css/blog-post.css')}}" rel="stylesheet">
    <link rel="icon" type="img/png" href="{{secure_asset('assets\img\logo_alpha.png')}}">
</head>
<body id="page-top">
  @include('layouts.header')
  @yield('content')
  <script src="{{ secure_asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{ secure_asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ secure_asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
