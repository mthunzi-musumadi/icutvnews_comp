<!DOCTYPE html>
<html>
    <head>

        <base href="/public">

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

        @if(session()->has('message'))

        <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

            {{session()->get('message')}}

        </div>
            
        @endif


        <h1 class="post_title">Update Post</h1>

        <div>

            <form action="{{url('update_post',$post->id)}}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="div_center">

                    <label>Post Title<label>
                    
                    <input type="text" name="title" value="{{$post->title}}">

                </div>

                <div class="div_center">

                    <label>Post Description<label>
                    
                    <textarea name="description">{{$post->description}}</textarea>

                </div>

                <div class="div_center">

                    <label>Category<label>
                    
                    <input type="text" name="category" value="{{$post->category}}">

                </div>

                <div class="div_center">

                    <label>Old Image<label>
                    <img style="margin:auto" height="350px" width="250px" src="/postimage/{{$post->image}}">

                </div>


                <div class="div_center"> 

                    <label>Update Old Image<label>
                    
                    <input type="file" name="image">

                </div>

                <div class="div_center">
                    
                    <input type="submit" class="btn btn-primary" value="Update">

                </div>

            </form>

        </div>

    </div>
    <!-- JavaScript files-->

    @include('superadmin.footer')

</html>