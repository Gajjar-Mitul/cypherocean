<!DOCTYPE html>
<html lang="en">

<head>
  @include('layout.meta')

  <title>CypherOcean - @yield('title')</title>
  
  @include('layout.styles')
</head>

<body>

  @include('layout.header')
  @yield('hero')
  <main id="main">

    @yield('content')

  </main><!-- End #main -->

  @include('layout.footer')
 
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
 @include('layout.scripts')

</body>

</html>