<!DOCTYPE html>
<html lang="en">
<head>

    <base href="/public">


   @include('home.homecss')
</head>

<hr class="invis">

<body>

    <div id="wrapper">
        <header class="tech-header header">
         @include('home.header')
         </header><!-- end market-header -->

         <div style="margin: auto" class="blog-meta big-meta col-md-8">
         <div style="text-align: center;" class="col-md-12">
            <div><img style="padding: 20px; height:400px; width:550px; margin:auto;" src="/postimage/{{$post->image}}"></div>
                <h4>{{$post->title}}</h4>
                <p>{{$post->description}}</p>
                <small class="firstsmall"><a class="bg-orange">{{$post->category}}</a></small>
                <small><a href="tech-single.html" title="">{{$post->updated_at}}</a></small>
                <small><a href="tech-author.html" title="">{{$post->name}}</a></small>
         </div>
        </div>
    </div>

    <hr class="invis">


        <footer class="footer">
         @include('home.footer')
        </footer><!-- end footer -->

        <div class="dmtop">Scroll to Top</div>
        
    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>