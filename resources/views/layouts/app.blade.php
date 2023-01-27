<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('partials._head')
  </head>
  <body>
    {{-- navbar --}}
    @include('partials._navbar')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @yield('content')
    {{-- script --}}
    @include('partials._script')
  </body>
</html>
