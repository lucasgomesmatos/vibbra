<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!--favico-->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo-lite.svg') }}">

  <!--Fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@500;600;700&display=swap" rel="stylesheet">


  <!--CSS de cada página-->
  @hasSection('my-css')
  @yield('my-css')
  @endif

  <title>Vibra - {{ $title }}</title>
</head>
<body>
  @yield('content')


  @hasSection('my-js')
  @yield('my-js')
  @endif
</body>
</html>
