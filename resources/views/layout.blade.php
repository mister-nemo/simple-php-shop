<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('app.name') }}</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
  </head>
  <body class="text-center">

    <div id="app"></div>

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        @include('header')
        <div class="container">
            @yield('content')
        </div>
        @include('footer')
    </div>

    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>