<!DOCTYPE html>
<html>
    <head>
   @include('superadmin.css')

      <style>
        .container
        {
          background-color: #22252A;
        }


      </style>

    </head>
  <body>
    @include('superadmin.header')
  </body>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('superadmin.sidebar')
      <!-- Sidebar Navigation end-->

        <div class="page-content"></div>

          @if(@session()->has('message'))

          <div class="alert alert-success">

              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

              {{session()->get('message')}}

          </div>

          @endif
        <!-- resources/views/superadmin/users/create.blade.php -->
          <div class="container">
              <h1>Create User</h1>
              <form action="{{ route('superadmin.users.store') }}" method="POST">
                  @csrf
                  <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" id="name" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" id="email" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" id="password" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label for="password_confirmation">Confirm Password</label>
                      <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                  </div>
                  <button type="submit" class="btn btn-primary">Create</button>
              </form>
          </div>

      </div>
    <!-- JavaScript files-->
    @include('superadmin.footer')
</html>