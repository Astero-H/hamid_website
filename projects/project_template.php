<?php require_once '../bootstrap.php';?>

<!doctype html>

<html class="no-js" lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title><?=$_ENV['FIRSTNAME']?></title>
  <!-- Meta -->
  <!-- Page Description Here -->
  <meta name="description" content="My personal CV Website">

  <!-- Disable screen scaling-->
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">

  <!-- Facebook Meta -->
  <meta property="og:url" content="your website url here">
  <meta property="og:title" content="Page Title">
  <meta property="og:description" content="Description of the page">
  <meta property="og:type" content="website">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <!-- Favicon.ico  -->
  <link rel="apple-touch-icon" sizes="180x180" href="./../favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./../favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./../favicon/favicon-16x16.png">
  <link rel="manifest" href="./../favicon/site.webmanifest">

  <!-- Web fonts and Web Icons -->
  <link href="./../fonts/opensans/stylesheet.css" rel="stylesheet">
  <link href="./../fonts/bebas/stylesheet.css" rel="stylesheet">
  <link href="./../fonts/ionicons.min.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link href="./../fonts/font-awesome.min.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">



  <!-- Vendor CSS style -->
  <link rel="stylesheet" href="./../css/pageloader.css">

  <!-- Uncomment below to load individualy vendor CSS -->
  <link rel="stylesheet" href="./../css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="./../public/js/vendor/swiper.min.css"> -->
  <link rel="stylesheet" href="./../public/js/vendor/jquery.fullpage.min.css">
  <link rel="stylesheet" href="./../public/js/vegas/vegas.min.css">

  <!-- Main CSS files -->
  <link rel="stylesheet" href="./../css/main.css">

  <!-- add alt layout here -->
  <link rel="stylesheet" href="./../css/style-default.css">
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="./../public/js/vendor/modernizr-2.7.1.min.js" defer></script>
</head>

<body id="menu" class="body-item">
  <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

  <!-- Page Loader : just comment these lines to remove it -->
  <!-- <div class="page-loader" id="page-loader">
    <div>
      <div class="icon ion-spin"></div>
      <p>Loading</p>
    </div>
  </div> -->

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

    <a class="navbar-brand" href="#">
      <span class="logo">
        <img class="light-logo" src="<?= '../'.$_ENV['IMG_PATH'] . "/" . $_ENV['IMG_LOGO']?>" alt="Logo">
      </span>
      <span class="text">
        <span class="line"> <?= $_ENV['FIRSTNAME'] . " " . $_ENV['LASTNAME'] ?></span>
        <span class="line sub"><?= $_ENV['JOB_TITLE'] ?></span>

      </span>
    </a>

    <!-- begin of menu wrapper -->
    <div class="all-menu-wrapper" id="navbarMenu">
      <!-- begin of menu wrapper -->
    <div class="all-menu-wrapper" id="navbarMenu">
      <!-- Begin of top menu -->
      <!-- Begin of hamburger mainmenu menu -->
      <nav class="navbar-mainmenu">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="./../#home"> <?= $menu['welcome']?>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./../#about"><?= $menu['cv']?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./../#projects"><?= $menu['projects']?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./../#contact"><?= $menu['contact']?></a>
          </li>
        </ul>
      </nav>
      <!-- End of hamburger mainmenu menu -->

      <!-- Begin of sidebar nav menu params class: text-only / icon-only-->
      <nav class="navbar-sidebar ">
        <ul class="navbar-nav" id="qmenu">
          <li class="nav-item" data-menuanchor="home">
            <a href= "./../#home">
              <i class="icon ion-ios-home-outline"></i>
              <span class="txt"><?= $menu['welcome']?></span>
            </a>
          </li>
          <li class="nav-item" data-menuanchor="bio">
            <a href="./../#bio">
              <i class="icon ion-ios-information-outline"></i>
              <span class="txt"> <?= $menu['story']?> </span>
            </a>
          </li>
          <li class="nav-item" data-menuanchor="about">
            <a href="./../#about">
              <i class="icon ion-ios-information-outline"></i>
              <span class="txt"> <?= $menu['cv']?> </span>
            </a>
          </li>
          <li class="nav-item" data-menuanchor="projects">
            <a href="./../#projects">
              <i class="icon ion-ios-albums-outline"></i>
              <span class="txt"><?= $menu['projects']?></span>
            </a>
          </li>
          <li class="nav-item" data-menuanchor="services">
            <a href="./../#services">
              <i class="icon ion-ios-list-outline"></i>
              <span class="txt"> <?= $menu['skills']?> </span>
            </a>
          </li>
          <li class="nav-item" data-menuanchor="contact">
            <a href="./../#contact">
              <i class="icon ion-ios-telephone-outline"></i>
              <span class="txt"><?= $menu['contact']?></span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- End of sidebar nav menu -->
    </div>
      <!-- End of sidebar nav menu -->
    </div>
    <!-- end of menu wrapper -->

  </header>
  <!-- END OF site header Menu-->

  <!-- Loading page of selected project-->
  <main class="page-main page-fullpage main-anim" id="itempage">
    <?php
        if(isset($_GET['p'])) {
            switch ($_GET['p']) {
                case 'syspay' : include_once 'syspay.php';
                    break;
                case 'cgi' : include_once 'cgi.php';
                    break;
                case 'bob' : include_once 'bob.php';
                    break;
            }
        }
    ?>
  </main>
  <!-- END OF page main content -->

  <!-- scripts -->
  <!-- All Javascript plugins goes here -->
  <script src="./../public/js/vendor/jquery-1.12.4.min.js" defer></script>

  <!-- All vendor scripts -->
  <script src="./../public/js/vendor/scrolloverflow.min.js" defer></script>
  <script src="./../public/js/vendor/all.js" defer></script>
  <script src="./../public/js/particlejs/particles.min.js" defer></script>

  <!-- Countdown script -->
  <script src="./../public/js/jquery.downCount.js" defer></script>

  <!-- Form script -->
  <script src="./../public/js/form_script.js" defer></script>

  <!-- Javascript main files -->
  <script src="./../public/js/main.js" defer></script>
  <!-- <chat-bot platform_id="b54b64ad-06ca-4cf5-b144-0b0584d73187" user_id="118aea26-d8c5-491e-9f3d-8fa4b88f8120" chatbot_id="96ef1522-8131-47ed-8e44-cc2b85a5ed7b"><a href="https://www.chatsimple.ai/?utm_source=widget&utm_medium=referral">chatsimple</a></chat-bot><script src="https://cdn.chatsimple.ai/chat-bot-loader.js" defer></script> -->
</body>
</html>