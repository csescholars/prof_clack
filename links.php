<!DOCTYPE html>
<?php

  if (isset($_POST['add']) && isset($_POST['reference'])) {

//    require_once('db_access/add_publication.php');
  }

  if (isset($_POST['delete']) && isset($_POST['reference'])) {

//    require_once('db_access/rm_publication.php');
  }

//  require_once('db_access/get_publication.php');

?>
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
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#myModal" role="button" class="btn" data-toggle="modal">Add Link</a>
         
        <!-- Modal -->
        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Add Link</h3>
          </div>
          <div class="modal-body">
            <form class="research_form" method="post">
              <table>
                <tr>
                  <td>Org name:</td>
                  <td><input type="text" name="org"></td>
                </tr>
                <tr>
                  <td>Org web page:</td>
                  <td><input type="text" name="link"></td>
                </tr>
                <tr>
                  <td>Org image:</td>
                  <td><input type="file" name="img"></td>
                </tr>
              </table>
            </form>
          </div>
          <div class="modal-footer">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
          <button class="btn btn-primary research_submit">Submit</button> 
          </div>
        </div>

<?php

    //result is the result of research returned from require_once("get_research.php")
    $row[0]['org'] = 'American Association for Aerosol Research';
    $row[0]['link'] = 'http://www.google.com';
    $row[0]['img'] = 'images/officers/Solomon.jpg';

    $row[1]['org'] = 'Institute for Liquid Atomization and Spray Systems';
    $row[1]['link'] = 'http://www.google.com';
    $row[1]['img'] = 'images/officers/Clack.jpg';

    echo " 
        <div class='large_lines'>
    ";
    
    //  while ($row = $result->fetch_row()) {
    foreach ($row as $item) {

      echo "<div class='icon_holder'>
              <a class='edit_research'><span class='floating_icon_first edit_icon'></span></a> 
              <a class='delete_research'><span class='floating_icon_second delete_icon'></span></a>
                <table><tr>
                  <td>
                    <a href='".$item['link']."'>          
                    <div class='link_frame'>
                      <img class='link_img' src='".$item['img']."'/>
                    </div>
                    </a>
                  </td>
                  <td class='link_text'>";
      echo $item['org'];
      echo "
                  </td>
                </tr></table>
              </div>
            <hr />";
    }
    echo "
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
      function post_to_url(path, params) {
          method = "post"; // Set method to post by default if not specified.

          // The rest of this code assumes you are not using a library.
          // It can be made less wordy if you use one.
          var form = document.createElement("form");
          form.setAttribute("method", method);
          form.setAttribute("action", path);

          for(var key in params) {
              if(params.hasOwnProperty(key)) {
                  var hiddenField = document.createElement("input");
                  hiddenField.setAttribute("type", "hidden");
                  hiddenField.setAttribute("name", key);
                  hiddenField.setAttribute("value", params[key]);

                  form.appendChild(hiddenField);
               }
          }
          document.body.appendChild(form);
          form.submit();
      }

      $(function(){
          //set selected
          $(".links").addClass("selected");
          $(".research_submit").click(function() {
            $(".research_form").submit();
          });

          $(".delete_research").click(function() {

            var title = $(this).next('.header_title').html().trim();
            post_to_url(window.location.href, {'delete':'true', 'title':title});
          });                      
      });
    </script>
  </body>
</html>
