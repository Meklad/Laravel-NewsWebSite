<!DOCTYPE html>
<html dir="rtl">
  <head>
    <!-- Head Section -->
    @include('includes.head')

  </head>
  <body>
    
    <!-- First Navegation Bar -->
    @include('includes.nav')

    <!-- Header Section -->
    @include('includes.header')

    <!-- Second Navegation Bar -->
    @include('includes.nav2')

    <!-- Success Message [Success Deployment Post] -->
    @include('includes.messages')

    <!-- Content Section -->
    @yield('content')

    <!-- Footer Footer Section -->
    @include('includes.footer')

    <!-- JS Files And Secripts Section -->
    @include('includes.js')

    <!-- Scripts Will Loaded In spcfic Pages -->
    @yield('scripts')

  </body>
</html>