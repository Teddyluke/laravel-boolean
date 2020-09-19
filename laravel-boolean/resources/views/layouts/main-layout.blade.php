<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Molisana</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>


  <body>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
  </body>
</html>
