<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>People</title>
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
      padding-left: 90px;
      font-size: 18px;
      line-height: 35px;
    }

    #data {
      display: none;
    }

    th {
      cursor: pointer;
    }
    th:hover {
      text-decoration: underline;
    }

    .officer {

      float: left;
      overflow: hidden;
      margin-left: -50px;
      margin-right: -50px;
      margin-bottom: 50px;
    }

    .officer .profile {
      overflow: hidden;
      width: 100px;
      height: 100px;

      transform: translate(-50px, 0px);
      -ms-transform: translate(-50px, 0px); /* IE 9 */
      -webkit-transform: translate(-50px, 0px); /* Safari and Chrome */
      -moz-transform: translate(-50px, 0px); /* Firefox */
      -o-transform: translate(-50px, 0px); /* Opera */
    }

    .officer .description {

      line-height: 25px;
      transform: translate(-50px, 0px);
      -ms-transform: translate(-50px, 0px); /* IE 9 */
      -webkit-transform: translate(-50px, 0px); /* Safari and Chrome */
      -moz-transform: translate(-50px, 0px); /* Firefox */
      -o-transform: translate(-50px, 0px); /* Opera */
    }

    .officer .title {

      font-size: 25px;
      /* Safari */
      -webkit-transform: rotate(-90deg);
      /* Firefox */
      -moz-transform: rotate(-90deg);
      /* IE */
      -ms-transform: rotate(-90deg);
      /* Opera */
      -o-transform: rotate(-90deg);
      /* Internet Explorer */
      filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);

    }

    .table {

      width: 960px;
      margin: 20px;
    }

    #member_table {
      clear: left;
    }

    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="bootstrap/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/gvsu_pre-dental_logo_trans.png">
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
        <div class='info'>
          <table class='officer'>
            <tr>
              <td class='title' rowspan='2'>
                <b style="visibility:hidden">asdf</b> Faculty
              </td>
              <td>
                <img class='profile cushycms' src="images/officers/clack.jpg">
              </td>
            </tr>
            <tr>
              <td class='description cushycms'>
                Dr. Herek Clack
                <br />
                Engineering 1, Room 252D
                <br />
                (312) 567 3184
              </td>
            </tr>
          </table>
          <table class='officer'>
            <tr>
              <td class='title' rowspan='2'>
                PhD student
              </td>
              <td>
                <img class='profile cushycms' src="images/officers/Solomon.jpg">
              </td>
            </tr>
            <tr>
              <td class='description cushycms'>
                Ubong Solomon
                <br />
                Engineering 1, Room 260
                <br />
                (773) 876 3402
              </td>
            </tr>
          </table>
          <table class='officer'>
            <tr>
              <td class='title' rowspan='2'>
                PhD student
              </td>
              <td>
                <img class='profile cushycms' src="images/officers/lee.jpg">
              </td>
            </tr>
            <tr>
              <td class='description cushycms'>
                Eric Monsu Lee
                <br />
                Engineering 1, Room 260
                <br />
                (312) 567 6903
              </td>
            </tr>
          </table>
        </div>
        <br />
        <div id="member_table">
        </div>
        <div id="data" class="cushycms">
          Former members, Contact, Link;
          Dr. Kavin Ammigan,  ,  ;
          Nekheel Gajjar, , ;
          Dr. Tae-Hoon Jung, , ; 
          Dr. Martin Linck [Post-doc], , ; 
          A. A. Mohammed, , ; 
          Uttam Narasimhan, , ; 
          Peter Richard Bittner, , ; 
          Pierre Coutris, , ; 
          Violaine Todoroff, , ; 
          Vinit Prabhu, , ; 
          Brian Robbins, , ; 
          Taehoon Kim, , ;
        </div>
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
    <script type="text/javascript" src="js/jquery.tableSort.js"></script>
    <script src="js/buildtable.js"></script>
    <script src="js/getDataAndParse.js"></script>
    <script type="text/javascript">
      build_table(getDataAndParse('data'));
    </script>
    <script>
      $(function(){
          //set selected
          $(".people").addClass("selected");            
      })
    </script>
  </body>
</html>
