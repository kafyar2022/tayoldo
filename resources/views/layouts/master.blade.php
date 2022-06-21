<!DOCTYPE html>
<html lang="ru">

<head class="page">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">

  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <link rel="icon" href="{{ asset('favicon.ico') }}">
  <link rel="icon" href="{{ asset('favicons/icon.svg') }}" type="image/svg+xml">
  <link rel="apple-touch-icon" href="{{ asset('favicons/160x180.png') }}">
  <link rel="manifest" href="{{ asset('manifest.webmanifest') }}">
</head>

<body class="page-body {{ str_replace('.', '', $route) }}">
  <svg width="1725" height="1937" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="m941.44 21.83 350.85 203.74 356.69 203.74C1695.76 452.6 1725 505 1725 563.2v814.97c0 52.39-29.24 104.78-76.02 133.88l-356.69 203.74-350.85 197.93-5.85 5.82h-5.84v5.82h-11.7l-5.85 5.82h-17.54v5.82h-64.32l-5.85-5.82h-17.54v-5.82h-11.7v-5.82h-11.69v-5.82l-356.7-197.93-350.84-203.74C23.39 1482.95 0 1430.56 0 1378.17V563.2c0-58.21 23.39-110.6 76.02-133.89l350.84-203.74 356.7-203.74c46.78-29.1 105.25-29.1 157.88 0ZM684.15 1552.8l122.8 69.86h5.85l5.84 5.82h11.7v5.82h64.32v-5.82h11.7v-5.82h5.84l122.8-69.86 122.8-69.85 245.59-139.71c35.08-23.29 52.63-52.39 52.63-93.14V685.45c0-34.93-17.55-69.86-52.63-93.14L1157.8 452.6 912.2 312.89h-5.84v-5.82h-11.7l-5.85-5.82H830.34v5.82h-11.7v5.82h-11.69l-245.6 139.7-239.74 139.72c-35.09 23.28-58.47 58.2-58.47 93.14V1250.1c0 40.75 23.38 69.85 58.47 93.14l239.75 139.71 122.8 69.85Z" fill="#EB2629" />
  </svg>
  @include('layouts.header')

  @yield('content')

  @include('layouts.footer')

  <script src="{{ asset('js/main.js') }}"></script>
  @yield('script')
</body>

</html>
