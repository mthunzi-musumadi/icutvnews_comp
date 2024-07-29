<!DOCTYPE html>
<html lang="en">
<head>
   @include('home.homecss')
</head>
<body>

    <div id="wrapper">
        <header class="tech-header header">
         @include('home.header')
         </header><!-- end market-header -->

        <header class="section first-section">
         @include('home.first_section')

        </header>

        <section class="section">
         @include('home.recent_news')
        </section>

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