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
        <div class="container">
            <h1>Edit User</h1>
            <form action="{{ route('superadmin.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <small class="form-text text-muted">Leave blank to keep the current password.</small>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>'
    <!-- JavaScript files-->
    @include('superadmin.footer')
</html>