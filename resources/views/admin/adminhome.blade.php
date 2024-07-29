<!DOCTYPE html>
<html>
    <head>
   @include('admin.css')
    </head>
  <body>
    @include('admin.header')
  </body>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      @include('admin.body')
    </div>
    <!-- JavaScript files-->
    @include('admin.footer')
</html>