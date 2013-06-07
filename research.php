<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Research</title>
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
<?php
  include('includes/nav.php');
?>

      <div>
        <!-- Button to trigger modal -->
        <a href="#myModal" role="button" class="btn" data-toggle="modal">Add Article</a>
         
        <!-- Modal -->
        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Add Article</h3>
          </div>
          <div class="modal-body">
            <form class="research_form" method="post">
              Title: &nbsp;&nbsp;&nbsp;<input class="input-taller" type="text" name="title"><br />
              Image: <input type="file" class="input-taller" type="text" name="image"><br />
              <br />
              <textarea class="ckeditor" type="text" name="paragraph" cols="80" rows="15"></textarea>
            </form>
          </div>
          <div class="modal-footer">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
          <button class="btn btn-primary research_submit">Submit</button> 
          </div>
        </div>
        <div class="article" table-id="1">
          <h1 class="header_title">
            title
          </h1>
          <div class="header_diag">
          </div>
          <p>
            content
          </p>
        </div>
        <p class='info'>
          The GVSU Pre-Dental club aims to help students in their pursuit of becoming a dentist with bi-weekly meetings geared toward improving the likelihood of acceptance into dental school. Along with meetings, the Pre-Dental club executive board plans outside events to enlighten pre-dental students’ with regards to all aspects of dentistry. (Our yearly trip to the University of Michigan’s Dental School in the spring is one such event.) Another highlight of being a member of the Pre-Dental club is the opportunity to meet and establish relationships with admission representatives from dental schools located in the state of Michigan and beyond.
        </p>
        <img class='about_img' src="images/uofm_visit.jpg" />
      </div>


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
    <script src="ckeditor/ckeditor.js"></script>
    <script>
      $(function(){
          //set selected
          $(".research").addClass("selected");
          $(".research_submit").click(function() {
            $(".research_form").submit();
          });                      
      })
    </script>
  </body>
</html>
