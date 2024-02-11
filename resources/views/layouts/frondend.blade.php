
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Template album</title>
    
    @include('includes.publics.style')
    @yield('custom-style')
  </head>
  <body>
   
    @include('includes.publics.script')

    
    @include('includes.publics.header')

    @yield('content')
    
    @include('includes.publics.footer')


    </body>
</html>
