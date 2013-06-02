<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>GVSU Pre-Dental Club</title>
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
    .info {

      padding: 30px;
      font-size: 18px;
      line-height: 35px;
    }

    .about_img {

      width: 1000px;

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
      <div class='navbar'>
        <div class='header'>
          <div class='image'>
            <img src="images/gvsu_predental_logo_trans.png">
          </div>
          <div class='title'>
            <h1>
              GVSU Predental Club
            </h1>
          </div>
          <br />
          <div class='title_description'>
            Association for Grand Valley State University students interested in pursuing a career in dentistry.
          </div> 
        </div>
        <div class='tabs'>
          <a href='index.html'><span class="tab_item home">Home</span></a>
          <a href='about.html'><span class="tab_item about">About</span></a>
          <a href='join.html'><span class="tab_item join">Join</span></a>
          <a href='calendar.html'><span class="tab_item calendar">Calendar</span></a>
          <a href='members.html'><span class="tab_item members">Members</span></a>
          <a href='connect.html'><span class="tab_item connect">Connect</span></a>
        </div>
      </div>

      <div>
        <p class='info'>
          The GVSU Pre-Dental club aims to help students in their pursuit of becoming a dentist with bi-weekly meetings geared toward improving the likelihood of acceptance into dental school. Along with meetings, the Pre-Dental club executive board plans outside events to enlighten pre-dental students’ with regards to all aspects of dentistry. (Our yearly trip to the University of Michigan’s Dental School in the spring is one such event.) Another highlight of being a member of the Pre-Dental club is the opportunity to meet and establish relationships with admission representatives from dental schools located in the state of Michigan and beyond.
        </p>
        <img class='about_img' src="images/uofm_visit.jpg" />
      </div>


      <!-- FOOTER -->
      <footer>
      </footer>

    </div><!-- /.container -->

    <!-- JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script>
      $(function(){
          //load navbar
          $(".navbar").load("includes/nav.html", function() {

            //set selected
            $(".about").addClass("selected");            
          }); 

          //load footer
          $("footer").load("includes/footer.html"); 
          
      })
    </script>
  </body>
</html>
