<!DOCTYPE html>
<html>
    <head>
   @include('superadmin.css')
   <style type="text/css">

    .post_title
    {
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        padding: 30px;
        color: white;
    }
    .div_center
    {
        text-align: center;
        padding: 30px;
    }
    label
    {
        display: inline-block;
        width: 300px;
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

        @if(@session()->has('message'))

        <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

            {{session()->get('message')}}

        </div>

        @endif
            
        <h1 class="post_title">Add Post</h1>

        <div>

            <form action="{{url('add_post')}}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="div_center">

                    <label>Post Title<label>
                    
                    <input type="text" name="title">

                </div>

                <div class="div_center">

                    <label>Post Description<label>
                    
                    <textarea name="description"></textarea>

                <div>

                    <label>Category<label>
                        
                    <input type="text" name="category">

                </div>
                <div class="div_center"> 

                    <label>Add Image<label>
                    
                    <input type="file" name="image">

                </div>

                <div class="div_center">
                    
                    <input type="submit" value="Post" class="btn btn-primary">

                </div>

            </form>

        </div>

      </div>
    </div>
    <!-- JavaScript files-->
    @include('superadmin.footer')
</html>