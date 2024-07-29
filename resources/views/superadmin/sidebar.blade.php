<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="admincss/img/avatar-5.png" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">Super Admin</h1>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
            <li class="active"><a href="{{url('/')}}"> <i class="icon-home"></i>Home </a></li>

            <li><a href="{{url('post_page')}}"> <i class="icon-grid"></i>Add Post </a></li>

            <li><a href="{{url('/show_post')}}"> <i class="fa fa-bar-chart"></i>Show Posts </a></li>

            <li><a href="{{url('/users_index')}}"> <i class="icon-padnote"></i>User Management </a></li>
    </ul>
  </nav>