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
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#myModal" role="button" class="btn" data-toggle="modal">Add Article</a>
         
        <!-- Modal -->
        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Add Article</h3>
          </div>
          <div class="modal-body">
            <form class="research_form" method="post" action="php/add_research.php">
              Title: &nbsp;&nbsp;&nbsp;<input class="input-taller" type="text" name="title"><br />
              <br />
              <textarea class="ckeditor" type="text" name="paragraph" cols="80" rows="15"></textarea>
            </form>
          </div>
          <div class="modal-footer">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
          <button class="btn btn-primary research_submit">Submit</button> 
          </div>
        </div>

<?php
    $row['title'] = 'example title';
    $row['content'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et blandit tortor. Aliquam rutrum nisl pulvinar orci mattis, ac sodales lorem consectetur. Nulla facilisi. Aliquam vitae sapien nisi. Phasellus volutpat lectus vitae ornare scelerisque. Mauris eu quam ante. Donec vel tellus mi. Ut mattis tempus luctus. Nunc in nisl vitae turpis consectetur ornare eu nec sapien. Pellentesque ac odio leo. Etiam eleifend adipiscing ultrices. Sed facilisis imperdiet libero, a viverra lectus bibendum auctor. Curabitur sit amet nisl vitae nisi malesuada porttitor vitae vel nibh. ';

  //for
    echo " 
        <div class='article' table-id='1'> 
          <h1 class='header_title'> 
    ";
    echo $row['title'];
    echo "
          </h1>
          <div class='header_diag'>
          </div>
          <p>
    ";
    echo $row['content'];
    echo "
          </p>
        </div>
    ";

?>
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
