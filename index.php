  <?php
use Dotenv\Dotenv;
require 'vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title><?=$_ENV["SITE_TITLE"]?> </title>

  <meta name="description" content="">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">

  <!-- Twitter Meta -->
  <meta name="twitter:site" content="">
  <meta name="twitter:creator" content="">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="Page Title">
  <meta name="twitter:description" content="Description of the page">
  <meta name="twitter:image" content="public/img/bg-default.jpg">

  <!-- Facebook Meta -->
  <meta property="og:url" content="your website url here">
  <meta property="og:title" content="Page Title">
  <meta property="og:description" content="Description of the page">
  <meta property="og:type" content="website">
  <meta property="og:image" content="public/img/bg-default.jpg">
  <meta property="og:image:secure_url" content="/img/bg-default.jpg">
  <meta property="og:image:type" content="image/jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
  <!-- Web fonts and Web Icons -->
  <link rel="stylesheet" href="./fonts/opensans/stylesheet.css">
  <link rel="stylesheet" href="./fonts/bebas/stylesheet.css">
  <link rel="stylesheet" href="./fonts/ionicons.min.css">
  <link rel="stylesheet" href="./fonts/font-awesome.min.css">

  <!-- Vendor CSS style -->
  <link rel="stylesheet" href="./css/pageloader.css">

  <!-- Uncomment below to load individualy vendor CSS -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./public/js/vendor/swiper.min.css">
  <link rel="stylesheet" href="./public/js/vendor/jquery.fullpage.min.css">
  <link rel="stylesheet" href="./public/js/vegas/vegas.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Petit+Formal+Script&display=swap" rel="stylesheet">

  <!-- Main CSS files -->
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/timeline.css">

  <!-- add alt layout here -->

  <script src="./public/js/vendor/modernizr-2.7.1.min.js"></script>
</head>

<body id="menu" class="body-page">
  <!--[if lt IE 8]>
              <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
          <![endif]-->

  <!-- Page Loader : just comment these lines to remove it -->
  <div class="page-loader" id="page-loader">
    <div>
      <div class="icon ion-spin"></div>
      <p>Chargement</p>
    </div>
  </div>

  <!-- BEGIN OF site header Menu -->
  <header class="page-header navbar page-header-alpha scrolled-white menu-right topmenu-right">

    <!-- Begin of menu icon toggler -->
    <button class="navbar-toggler site-menu-icon" id="navMenuIcon">
      <!-- Available class : menu-icon-dot / menu-icon-thick /menu-icon-random -->
      <span class="menu-icon menu-icon-random">
        <span class="bars">
          <span class="bar1"></span>
          <span class="bar2"></span>
          <span class="bar3"></span>
        </span>
      </span>
    </button>
    <!-- End of menu icon toggler -->

    <!-- Begin of logo/brand -->
    <a class="navbar-brand" href="#">
      <span class="logo">
        <img class="light-logo" src="public/img/misc/hamid_logo.jpg" alt="Logo">
      </span>
      <span class="text">
        <span class="line"> Abdel Hamid Hennane</span>
        <span class="line sub">Software Developer PHP</span>
        <div id="theme_div">
          <span class="line sub text-theme"> Thème</span>
          <label class="switch">
            <input id="mySwitch" class="switch" type="checkbox">
            <span class="slider round"> </span>
          </label>
        </div>
      </span>
    </a>

    <!-- begin of menu wrapper -->
    <div class="all-menu-wrapper" id="navbarMenu">
      <!-- Begin of top menu -->
      <!-- Begin of hamburger mainmenu menu -->
      <nav class="navbar-mainmenu">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#home"> Bienvenue
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">CV</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </nav>
      <!-- End of hamburger mainmenu menu -->

      <!-- Begin of sidebar nav menu params class: text-only / icon-only-->
      <nav class="navbar-sidebar ">
        <ul class="navbar-nav" id="qmenu">
          <li class="nav-item" data-menuanchor="home">
            <a href="#home">
              <i class="icon ion-ios-home-outline"></i>
              <span class="txt">Bienvenue</span>
            </a>
          </li>
          <li class="nav-item" data-menuanchor="bio">
            <a href="#bio">
              <i class="icon ion-ios-information-outline"></i>
              <span class="txt"> Bio </span>
            </a>
          </li>
          <li class="nav-item" data-menuanchor="about">
            <a href="#about">
              <i class="icon ion-ios-information-outline"></i>
              <span class="txt"> CV </span>
            </a>
          </li>
          <li class="nav-item" data-menuanchor="services">
            <a href="#services">
              <i class="icon ion-ios-list-outline"></i>
              <span class="txt"> Développement </span>
            </a>
          </li>
          <li class="nav-item" data-menuanchor="contact">
            <a href="#contact/message">
              <i class="icon ion-ios-telephone-outline"></i>
              <span class="txt">Contact</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- End of sidebar nav menu -->
    </div>
    <!-- end of menu wrapper -->

  </header>
  <!-- END OF site header Menu-->

  <!-- BEGIN OF page cover -->
  <div class="page-cover">
    <!-- Cover Background -->
    <div class="cover-bg bg-img" data-image-src="public/img/bg-default.jpg"></div>

    <!--BEGIN OF Static video bg - uncomment below to use Video as Background-->
    <div id="container" class="video-container d-none d-sm-block">
      <video autoplay="autoplay" loop="loop" muted="muted" width="640" height="360">
        <source src=<?=$_ENV['URL_VIDEO'];?> type="video/mp4">
      </video>
    </div>
    <!--END OF Static video bg-->

    <!-- Transluscent mask as filter -->
    <div class="cover-bg-mask bg-color" data-bgcolor="rgba(29, 29, 29, 0.2)"></div>
  </div>
  <!--END OF page cover -->

  <!-- BEGIN OF page main content -->
  <main class="page-main page-fullpage main-anim" id="mainpage">

    <!-- Begin of home section -->
    <div class="section section-home fullscreen-md fp-auto-height-responsive " data-section="home">
      <!-- Begin of section wrapper -->
      <div class="section-wrapper">
        <!-- content -->
        <div class="section-content anim">
          <div class="row">
            <div class="col-12 col-md-6 text-left">
              <!-- title and description -->
              <div class="title-desc">
                <h2 class="display-4 display-title home-title bordered anim-1"><?=$_ENV['FIRSTNAME']?></h2>
                <h4 class="anim-2"> <?=$_ENV['INTRO_TEXT']?>
                </h4>
              </div>

              <!-- Action button -->
              <div class="btns-action anim-3">
                <a class="btn btn-outline-white btn-round" href="#bio">
                  <b> On y va ? </b>
                </a>
              </div>
            </div>

            <!-- begin of right content -->
            <div class="col-12 col-sm-6 col-md-5 center-vh">
              <div class="img-avatar-alpha">
                <img class="img" src="public/img/misc/ahen1.jpg" alt="Image">
              </div>
            </div>

            <!-- end of right content -->
          </div>
        </div>
      </div>
      <!-- End of section wrapper -->
    </div>
    <!-- End of home section -->

    <!-- Begin of bio -->
    <div class="section section-bio fullscreen-md fp-auto-height-responsive " data-section="bio">
      <!-- Begin of section wrapper -->
      <div class="section-wrapper">
        <!-- content -->
        <div class="section-content anim">
          <div class="row">
            <div class="col-12 col-md-6 text-left">
              <!-- title and description -->
              <div class="title-desc">
                <h2 class="display-4 display-title home-title bordered anim-1"> BIO </h2>
                <h4 class="anim-2 size-2"> <?=$_ENV["BIO_TXT"]?>
                </h4>
              </div>
            </div>

            <!-- begin of right content -->
            <div class="col-12 col-md-6 right-content hidden-sm center-vh">
              <!-- content -->
              <div class="section-content">
                <!-- illustartion -->
                <div class="illustr zoomout-1">
                  <div id="text-anim"></div>
                </div>
              </div>
            </div>
            <!-- end of right content -->
          </div>
        </div>
      </div>
      <!-- End of section wrapper -->
    </div>
    <!-- End of home bio -->

    <div class="section section-description fp-auto-height-responsive " data-section="about">
      <!-- Begin of section wrapper -->
      <div class="section-wrapper center-vh dir-col anim">
        <!-- title -->
        <div class="section-title text-center">
          <h5 class="title-bg">CV</h5>
          <h2 class="display-4 display-title anim-2" id="cv">Curriculum Vitae</h2>
        </div>

        <!-- content -->
        <div class="section-content reduced anim text-center">
          <!-- title and description -->
          <div class="btns-action anim-3" id="buttonCV">
            <?='<a href="downloadCV.php?file=' . urlencode($_ENV['CV_FR_FILE']) . '";>
                  <img class="myCV" src="public/img/misc/CV.png" title="Download" alt="Download"/>
                </a>'?>
          </div>
        </div>
      </div>
      <!-- End of section wrapper -->
    </div>

    <!-- End of section wrapper -->
    <!-- <section class="cd-horizontal-timeline"> -->

    <!-- <div class="timeline">
      <div class="events-wrapper">
        <div class="events">
          <ol>
            <li><a href="#0" data-date="01/01/2017" class="selected">Jan 2017</a></li>
            <li><a href="#0" data-date="01/09/2017">Sep 2017</a></li>
            <li><a href="#0" data-date="01/12/2017">Dec 2017</a></li>
            <li><a href="#0" data-date="01/03/2018">Mar 2018</a></li>
            <li><a href="#0" data-date="09/05/2018">June 2018</a></li>
            <li><a href="#0" data-date="01/01/2019">Jan 2019</a></li>
          </ol>

          <span class="filling-line" aria-hidden="true"></span>
        </div>
      </div>

      <ul class="cd-timeline-navigation">
        <li><a href="#0" class="prev inactive">Prev</a></li>
        <li><a href="#0" class="next">Next</a></li>
      </ul> -->
    <!-- </div>   -->

    <!-- End of description section -->

    <!-- Begin of contact section -->
    <div class="section section-contact fp-auto-height-responsive no-slide-arrows " data-section="contact">

      <!-- begin of message slide -->
      <div class="slide" id="message" data-anchor="message">
        <!-- Begin of slide section wrapper -->
        <div class="section-wrapper">
          <div class="row justify-content-between">
            <div class="col-12 col-md-6 center-vh">
              <!-- content -->
              <div class="section-content anim text-left">
                <!-- title and description -->
                <div class="title-desc">
                  <div>
                    <!--<h5>Customer Service</h5>-->
                    <h2 class="display-4 display-title">CONTACT</h2>
                    <p>Pour toute demande merci de compléter le formulaire.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-5">
              <!-- content -->
              <div class="section-content anim text-left">
                <!-- title and description -->
                <div class="">
                  <div class="form-container form-container-card">
                    <!-- Message form container -->
                    <form class="send_message_form message form" method="post" action="ajaxserver/server.php"
                      id="message_form">
                      <div class="form-group name">
                        <label for="mes-name">Nom :</label>
                        <input id="mes-name" name="name" type="text" placeholder=""
                          class="form-control-line form-success-clean" required>
                      </div>
                      <div class="form-group email">
                        <label for="mes-email">Email :</label>
                        <input id="mes-email" type="email" placeholder="" name="email"
                          class="form-control-line form-success-clean" required>
                      </div>
                      <div class="form-group no-border">
                        <label for="mes-text">Message</label>
                        <textarea id="mes-text" placeholder="..." name="message"
                          class="form-control form-control-outline thick form-success-clean" required></textarea>

                        <div>
                          <p class="message-ok invisible form-text-feedback form-success-visible">Votre message a été
                            envoyé. Merci :)</p>
                        </div>
                      </div>

                      <div class="btns">
                        <button id="submit-message" class="btn btn-normal btn-white btn-round btn-full email_b"
                          name="submit_message">
                          <span class="txt">Envoyer</span>
                          <span class="arrow-icon"></span>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End of slide section wrapper -->
      </div>
      <!-- end of message slide -->
    </div>
    <!-- End of contact section -->
  </main>
  <!-- END OF page main content -->

  <!-- BEGIN OF page footer -->
  <footer id="site-footer" class="page-footer">
    <!-- Left content -->
    <div class="footer-left">
      <p>PHOTO BY
        <a href="https://www.basiliopuglia.com/" target="_blank">
          <span class="marked">BASILIO PUGLIA</span>
        </a>
      </p>
    </div>

    <!-- Right content -->
    <div class="footer-right">
      <ul class="social">
        <li>
          <a href="https://github.com/Astero-H" target="_blank">
            <i class="icon fa fa-github"></i>
          </a>
        </li>
        <li>
          <a href="https://www.linkedin.com/in/abdel-hamid-hennane" target="blank">
            <i class="icon fa fa-linkedin"></i>
          </a>
        </li>
      </ul>
    </div>
  </footer>
  <!-- END OF site footer -->

  <!-- scripts -->
  <!-- All Javascript plugins goes here -->
  <script src="./public/js/vendor/jquery-1.12.4.min.js"></script>

  <!-- All vendor scripts -->
  <script src="./public/js/vendor/scrolloverflow.min.js"></script>
  <script src="./public/js/vendor/all.js"></script>
  <script src="./public/js/particlejs/particles.min.js"></script>

  <!-- Countdown script -->
  <script src="./public/js/jquery.downCount.js"></script>

  <!-- Form script -->
  <script src="./public/js/form_script.js"></script>

  <!-- Javascript main files -->
  <script src="./public/js/main.js"></script>

</body>
<script src="./public/js/timeline.js"></script>

</html>