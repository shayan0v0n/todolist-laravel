<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $pageTitle }}</title>
  @vite('resources/css/app.css')
</head>
<body>
    <header>
        @include('includes.header')
    </header>
  <main>
    @yield('content')
  </main>
</body>
</html>