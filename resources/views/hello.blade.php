<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Main</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/jqtransform.css">
        <script src="js/jquery-1.7.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/cufon-yui.js"></script>
        <script src="js/vegur_400.font.js"></script>
        <script src="js/Vegur_bold_700.font.js"></script>
        <script src="js/cufon-replace.js"></script>
        <script src="js/tms-0.4.x.js"></script>
        <script src="js/jquery.jqtransform.js"></script>
        <script src="js/FF-cash.js"></script>
        <script>
          $(document).ready(function () {
            $('.form-1').jqTransform();
            $('.slider')._TMS({
              show: 0,
              pauseOnHover: true,
              prevBu: '.prev',
              nextBu: '.next',
              playBu: false,
              duration: 1000,
              preset: 'fade',
              pagination: true,
              pagNums: false,
              slideshow: 7000,
              numStatus: false,
              banners: false,
              waitBannerAnimation: false,
              progressBar: false
            })
          });
        </script>
    <body>
        <div class="main">
            @include('header')

            @yield('content')
        </div>

        @include('footer')
        <script>
          Cufon.now();
        </script>
    </body>
</html>
