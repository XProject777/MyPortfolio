<?php
if(isset($_POST["submit"])) {
    $recipient="xavdunn@gmail.com";
    $subject="Programming";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

echo '<script language="javascript">';
echo 'swal("Merci Votre Email à été envoyer avec succès")';
echo '</script>';
}
?>

<!Doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Xavier D.Beauchesne Portfolio</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- in your header -->
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
    rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">

</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1"
                  aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.php">
                  <h1><span>D</span>éveloppeur</h1>

                </a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="#home">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#about">About</a>
                  </li>

                  <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="img/slider/slider1.jpg" alt="" title="#slider-direction-1" />
        <img src="img/slider/slider2.jpg" alt="" title="#slider-direction-2" />
        <img src="img/slider/slider3.jpg" alt="" title="#slider-direction-3" />
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Programmeur analyste </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Xavier D.Beauchesne</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Programmeur analyste </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Xavier D.Beauchesne</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Programmeur analyste </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Xavier D.Beauchesne</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->

  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Profil</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
                <img src="img/about/1.jpg" alt="">
              </a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h5 class="sec-head">PROGRAMMEUR</h5>
              </a>
              <p>
                <h4>Programmer Analyste / Developpeur</h4>
              </p>
              <ul>
                <li>
                  <i class="fa fa-check"></i> C# (MVC + Web Form)
                </li>
                <li>
                  <i class="fa fa-check"></i> C++
                </li>
                <li>
                  <i class="fa fa-check"></i> Java, Java JSP
                </li>
                <li>
                  <i class="fa fa-check"></i> Android (Kotlin + Java)
                </li>
                <li>
                  <i class="fa fa-check"></i> JavaScript, Nodejs, Angular
                </li>
                <li>&nbsp</li>
                <li>
                  <i class="fa fa-check"></i> <a href="Xavier_cv_Final.pdf" download="Xavier_cv.pdf"><Strong>
                      &nbsp;&nbsp;&nbsp;&nbspCV Download pdf </Strong></a>
                </li>
                <li>
                  &nbsp<i class="fa fa-check"></i> <a href="https://www.linkedin.com/in/xavier-d-beauchesne/" class="btn btn-social-icon btn-twitter">
                    <span class="fa fa-linkedin-square"></span><Strong>&nbsp&nbspLINKEDIN</a></Strong>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </div>
  <!-- End About area -->

  <!-- our-skill-area start -->
  <div class="our-skill-area fix hidden-sm">
    <div class="test-overly"></div>
    <div class="skill-bg area-padding-2">
      <div class="container">
        <!-- section-heading end -->
        <div class="row">
          <div class="skill-text">
            <!-- single-skill start -->
            <div class="col-xs col-sm-3 col-md-3 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <input type="text" class="knob" value="0" data-rel="95" data-linecap="round" data-width="130"
                    data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                  <h3 class="progress-h4">C#</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <div class="col-xs col-sm-3 col-md-3 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <input type="text" class="knob" value="0" data-rel="85" data-linecap="round" data-width="130"
                    data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                  <h3 class="progress-h4">SQL/PLSQL</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <div class="col-xs col-sm-3 col-md-3 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <input type="text" class="knob" value="0" data-rel="75" data-linecap="round" data-width="130"
                    data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                  <h3 class="progress-h4">Php</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <div class="col-xs col-sm-3 col-md-3 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <input type="text" class="knob" value="0" data-rel="65" data-linecap="round" data-width="130"
                    data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                  <h3 class="progress-h4">Java Script</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Start portfolio Area -->
  <div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Portfolio</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Start Portfolio -page -->

        <div class="awesome-project-content">
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="img/portfolio/1.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="img/portfolio/1.jpg">
                      <h4>En Construction</h4>
                      <span></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="img/portfolio/2.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="img/portfolio/2.jpg">
                      <h4>En Construction</h4>
                      <span></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <div class="col-md-4 col-sm-4 col-xs-12 design">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="img/portfolio/3.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="img/portfolio/3.jpg">
                      <h4>En Construction</h4>
                      <span></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- single-awesome-project end -->
        </div>
      </div>
    </div>
  </div>

  <!-- Start Testimonials -->
  <div class="testimonials-area">
    <div class="testi-inner area-padding">
      <div class="testi-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- Start testimonials Start -->
            <div class="testimonial-content text-center">
              <div class="testimonial-carousel">
                <div class="single-testi">
                  <div class="testi-text" style="color:white">

                    <div class="contact-icon text-center">
                      <div class="single-icon">
                        <i class="fa fa-envelope-o"></i>
                        <p>
                          Email: xavdunn@gmail.com<br>
                          <span>Web: www.technosolution.tech</span>
                        </p>
                      </div>
                    </div>

                    </p>
                    <!-- <h6>Boby</h6> -->
                  </div>
                </div>
                <!-- End single item -->
                <div class="single-testi">
                  <div class="testi-text" style="color:white">
                    <div class="contact-icon text-center">
                      <div class="single-icon">
                        <i class="fa fa-envelope-o"></i>
                        <p>
                          Email: xavdunn@gmail.com<br>
                          <span>Web: www.example.com</span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>

  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">

            </div>
          </div>
        </div>
        <!-- in your body -->
        <div>
          <div class="contact-icon text-center">
            <div class="single-icon">
              <!-- <i class="fa fa-envelope-o"></i> -->
              <p>
                <h1>Email</h1> <br>
                <span></span>
              </p>
            </div>
          </div>
        </div>
        <!-- Start contact icon column -->
        <!-- Start  contact -->
        <!-- <div class="col-md-6 col-sm-6 col-xs-12"> -->
        <div class="form contact-form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>

          <center>
            <div style="width:60%;">
              <form method="post" action="index.php">
                <input type="text" name="sender" placeholder="Votre Name"><br>
                <input type="email" name="senderEmail" placeholder="Votre Email"><br>
                <textarea type="text" name="message" size="50" placeholder="Votre Email"></textarea><br><br>
                <input type="submit" value="Envoyer" name="submit" class="myButton">
              </form>
          </center>
        </div>
      </div>
      <!-- End Left contact -->
    </div>
  </div>
  </div>
  </div>
  <!-- End Contact Area -->
  <!-- Start Footer bottom Area -->
  <footer>
    <div class="vertical-center">
      <div class="footer-area">
        <div class="container">

          <div class="footer-icons">
            <ul>
              <li>
                <a href="https://www.facebook.com/"><i class="fa fa-facebook" style="color:white"></i></a>
              </li>
              <li>
                <a href="https://www.linkedin.com/in/xavier-d-beauchesne/"><i class="fa fa-linkedin" style="color:white"></i></a>
              </li>
              <li>

              </li>
              <!-- <li>
                    </li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end single footer -->

    </div>
    </div>

  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>

  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>
</body>

</html>