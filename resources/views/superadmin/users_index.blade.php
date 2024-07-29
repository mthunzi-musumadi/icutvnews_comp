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
        <div class="container">
            <h1>User Management</h1>
            <a href="{{ url('/create') }}" class="btn btn-primary">Create User</a>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ route('superadmin.users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('superadmin.users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
    <!-- JavaScript files-->
    @include('superadmin.footer')
</html>