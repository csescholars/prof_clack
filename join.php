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

      padding: 60px;
      font-size: 38px;
      line-height: 160px;
    }

    .about_img {

      width: 1000px;

    }

    .question {

      font-size: 40px;
      text-align: center;
    }

    .requirement_table {

      line-height: 100%;
      height: 160px;
    }

    .requirement_table .first_row {

      width: 200px;
    }

    .requirement_table .img_row {

      width: 250px;
      margin-right: 30px;
    }

    .img_frame {
      width: 227px;
      height: 207px;
      overflow: hidden;
    }

    .img_frame img {

      position: relative;
    }

    .rollup10 {

      top: -210px;
      margin-bottom: -550px;
    }

    .rollup3 {

      top: -190px;
      margin-bottom: -550px;
    }

    .frame {

      top: -50px;
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

      <div class='info'>
        <p class='question'>
          How to <b>become</b> a member?
        </p>
        <hr />
        <p class='join_orgsync'>
          Join <a href='https://orgsync.com/62965/chapter'>orgsync</a>
        </p>
        <hr />
        <p class='question'>
          How to <b>stay</b> a member?
        </p>
        <hr />
        <p>
          <table class='requirement_table'>
            <tr>
              <td class='first_row'>
                Attend 
              </td>
              <td class='img_row'>
                <div class='img_frame'>
                  <img class="rollup3" src="images/rollup3.png" />
                  <img class="frame" src="images/frame.png" alt="3" /> 
                </div>
              </td>
              <td>
                meetings per semester
              </td>
            </tr>
          </table>
        </p>
        <hr />
        <p>
          <table class='requirement_table'>
            <tr>
              <td class='first_row'>
                Volunteer 
              </td>
              <td class='img_row'>
                <div class='img_frame'>
                  <img class="rollup10" src="images/rollup10.png" />
                  <img class="frame" src="images/frame.png" alt="10" /> 
                </div>
              </td>
              <td>
                service hours per academic year
              </td>
          </table>
        </p>
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

      var animated_attend = false;
      var animated_hours = false;

      $(function(){

        //load navbar
        $(".navbar").load("includes/nav.html", function() {

          //set selected
          $(".join").addClass("selected");            
        }); 

        //load footer
        $("footer").load("includes/footer.html"); 
        
        //Slide in stuff
        $('.join_orgsync').css('position', 'relative');
        $('.join_orgsync').css('text-align','center');
        var center_pos = $('.join_orgsync a').position().left;
        $('.join_orgsync').css('text-align','left');
        $(".join_orgsync").animate({"left": (center_pos - $('.join_orgsync a').position().left) + "px"}, "slow");

        $(window).scroll(function () {


          if (!animated_attend && $(document).scrollTop() + $(window).height() * 2.0/3.0 > $('.rollup3').offset().top) {
            $('.rollup3').animate({
              top: "0px"
            }, 2000);
            animated_attend = true;
          }
          else if (!animated_hours && $(document).scrollTop() + $(window).height() * 2.0/3.0 > $('.rollup10').offset().top) {
            $('.rollup10').animate({
              top: "0px"
            }, 2000);
            animated_hours = true;
          }
        });

      })
    </script>
  </body>
</html>
