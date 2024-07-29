<!DOCTYPE html>
<html>
    <head>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



   @include('superadmin.css')
   <style type="text/css">

    .title_deg
    {
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        padding: 30px;
        color: white;
    }
    .table_deg
    {
        border: 1px solid white;
        width: 85%;
        text-align: center;
        margin-left: 85px;
    }
    .th_deg
    {
        background-color: skyblue;
        color: black;
        border-spacing: 0 15px;
    }
    .img_deg
    {
        width: 250px;
        padding: 20px;
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

      <div class="page-content">

        @if(session()->has('message'))

        <div class="alert alert-danger">

            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

            {{session()->get('message')}}

        </div>
            
        @endif

        <h1 class="title_deg">All Posts</h1>

        <table class="table_deg">

            <tr class="th_deg">
                <th>Post Title</th>
                
                <th>Description</th>

                <th>Category</th>

                <th>Posted By</th>

                <th>Post Status</th>

                <th>User Type</th>

                <th>Post Image</th>

                <th>Delete</th>

                <th>Edit</th>

            </tr>

@foreach($post as $post)

            <tr>
                <td>{{$post->title}}</td>

                <td>{{$post->description}}</td>

                <td>{{$post->category}}</td>

                <td>{{$post->name}}</td>

                <td>{{$post->post_status}}</td>

                <td>{{$post->usertype}}</td>

                <td>

                    <img class="img_deg" src="postimage/{{$post->image}}">

                </td>

                <td>
                    <a href="{{url('delete_post', $post->id)}}" class="btn btn-danger" onclick="confirmation(event)">Delete</a>
                </td>

                <td>

                    <a href="{{url('edit_page', $post->id)}}" class="btn btn-success">Edit</a>

                </td>

            </tr>

@endforeach

        </table>

      </div>

    </div>
    <!-- JavaScript files-->
    @include('superadmin.footer')

    <script>

        function confirmation(ev) {
  
          ev.preventDefault();
  
          var urlToRedirect = ev.currentTarget.getAttribute('href');  
  
          console.log(urlToRedirect); 
  
          swal({
  
              title: "Are You Sure You Want To Delete This Post",
  
              text: "You Will NOT Be Able To Revert This!",
  
              icon: "warning",
  
              buttons: true,
  
              dangerMode: true,
  
          })
  
          .then((willCancel) => {
  
              if (willCancel) {
  
  
  
  
  
                   
  
                  window.location.href = urlToRedirect;
  
                 
  
              }  
  
  
  
  
  
          });
  
  
  
          
  
      }
  
    </script>


</html>