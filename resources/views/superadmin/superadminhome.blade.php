<!DOCTYPE html>
<html>
    <head>
   @include('superadmin.css')
    </head>
  <body>
    @include('superadmin.header')
  </body>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('superadmin.sidebar')
      <!-- Sidebar Navigation end-->
      @include('superadmin.body')
    </div>
    <!-- JavaScript files-->
    @include('superadmin.footer')
</html>