<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    
    @yield('style')

    <title>{{ $title }}</title>
  </head>
  <body>
    @if (isset($session['status']))
    @if ($session['status'] == 'online')
    @if ($session['admin'] == 1)
      @include('Filler.navbarAuthAdmin')
    @else
      @include('Filler.navbarAuth')
    @endif
    @else
      @include('Filler.navbar')
    @endif
    @else
      @include('Filler.navbar')
    @endif
    
  
    @yield('hero')

    @yield('content')
  
    @include('Filler.footer')
  </body>
  @yield('script')
</html>