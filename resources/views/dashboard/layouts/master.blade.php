<!DOCTYPE html>
<html lang="ru">

<head class="page">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">

  <title>@lang('Kreston AC')</title>
  <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/dash.css') }}">
</head>

<body class="page-body">
  @include('layouts.dashboard')
  
  @yield('content')

  <script src="{{ asset('js/dashboard.js') }}"></script>
  @yield('script')
</body>

</html>
