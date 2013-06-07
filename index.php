<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Clack Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    #data {
      display: none;
    }

    .extra_title {

      background-color: #00A8D9;
      color: white;
      padding: 15px;
      margin-bottom: 0px;
      width: 700px;
    }

    .header_banner {
        width: 150px; 
        height: 40px;
        margin-left: 25px;
        margin-bottom: -40px; 

        position: relative;
        -webkit-transform: skew(50deg); 
        -moz-transform: skew(50deg); 
        -o-transform: skew(50deg); 
        background: #0076D9;
    }

    .extra_content {

      font-size: 18px;

      position: relative;
      background-color: #222222;
      color: white;

      padding: 15px;
      width: 600px;

      margin-left: 50px;
    }

    .real_body {
      width: 960px;
    }

    .main_content {
      display: table;
      margin: 0 auto;
    }

    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
      width: 1000px;
      margin: 0 auto;
    }

    .carousel .container {
      position: relative;
      padding: 0px;
      z-index: 9;
    }

    .carousel-control {

      top: 80%;
      height: 80px;
      margin-top: 0;
      font-size: 150px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      right: 0;
      width: 62%;
      height: 500px;
    }

    .carousel-caption {
      background-color: rgba(0, 0, 0);
      background-clip: padding-box;
      position: static;
      width: 30%;
      height: 500px;
      /*padding: 0 20 20px;*/
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }

    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="bootstrap/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/gvsu_predental_logo_trans.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/gvsu_predental_logo_trans.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/gvsu_predental_logo_trans.png">
    <link rel="apple-touch-icon-precomposed" href="images/gvsu_predental_logo_trans.png">
    <link rel="shortcut icon" href="images/gvsu_predental_logo_trans.png">
  </head>

  <body>

    <!-- ALL
    ===================================================== -->
    <div class='all'>

      <!-- NAVBAR
      ================================================== -->
<?php
  include('includes/nav.php');
?>

      <!-- Carousel
      ================================================== -->
      <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
          <div class="item active">
            <img src="images/bridge.jpg" alt="">
            <div class="container">
              <div class="carousel-caption">
                <h1>Example headline.</h1>
                <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <a class="btn btn-large btn-primary" href="#">Sign up today</a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="images/tower.jpg" alt="">
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <a class="btn btn-large btn-primary" href="#">Learn more</a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="images/snow_bridge.jpg" alt="">
            <div class="container">
              <div class="carousel-caption">
                <h1>One more for good measure.</h1>
                <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
              </div>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
      </div><!-- /.carousel -->

      <!-- FOOTER -->
<?php
  include('includes/footer.php');
?>

    </div><!-- /.container -->

    <!-- JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/getDataAndParse.js"></script>
    <script src="js/fill_headers.js"></script>
    <script>
      $(function(){
        // carousel demo
        $('#myCarousel').carousel({
            interval: 4000
        });
      })
    </script>
  </body>
</html>
