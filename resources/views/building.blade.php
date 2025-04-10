<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>@yield('title', 'ueesfix')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ asset('storage/images/logo-uees.ico') }}" type="image/x-icon">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" type="text/css" href="/css/estail.css"> 
</head>
<body>
  <script type="text/javascript" src="/js/barra.js"></script>
  <div class="container">
    @yield('content')
  </div>
  @include('tool.modal-logout')

</body>
</html>