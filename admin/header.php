<?php
//session_start();
echo $_SESSOIN["name"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Azhack - Production &amp; Audio Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Azhack - Production &amp;  Template</title>

  <!-- Favicon -->
  <link rel="icon" href="./img/core-img/favicon.ico">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">

</head>
<style type="text/css">
  .poca-music-thumbnail img
  {
    width: 600px;
    height: 400px;
  }

</style>


<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="preloader-thumbnail">
      <img src="./img/core-img/preloader.png" alt="">
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area">
    <!-- Main Header Start -->
    <div class="main-header-area">
      <div class="classy-nav-container breakpoint-off">
        <!-- Classy Menu -->
        <nav class="classy-navbar justify-content-between" id="pocaNav">

          <!-- Logo -->
          <a class="nav-brand" href="../index.php" style="color: white;"><!-- <img src="./img/core-img/logo.png" alt=""> -->
            
WebUzTv.Uz

          </a>

          <!-- Navbar Toggler -->
          <div class="classy-navbar-toggler">
            <span class="navbarToggler"><span></span><span></span><span></span></span>
          </div>

          <!-- Menu -->
          <div class="classy-menu">

            <!-- Menu Close Button -->
            <div class="classycloseIcon">
              <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
            </div>

            <!-- Nav Start -->
            <div class="classynav">
              <ul id="nav">
                <li class="current-item"><a href="../index.php">Home</a></li>
                <li><a href="#">Sahifalar</a>
                  <ul class="dropdown">
                    <li><a href="../index.php">- Bosh sahifa</a></li>
                    <li><a href="./podcast.php">- Podcast</a></li>
                    <!-- <li><a href="./single-podcast.php">- Single Podcast</a></li> -->
                    <li><a href="./about.php">- Biz haqimizda</a></li>
                    <li><a href="./blog.php">- Bloglar</a></li>
                    <!-- <li><a href="./single-blog.php">- Blog Details</a></li> -->
                    <li><a href="./contact.php">- Bog'lanish</a></li>

                  </ul>
                </li>
                <li><a href="./podcast.php">Yorliq</a></li>
                <li><a href="./about.php">Biz haqimizda</a></li>
                <li><a href="#">Blog</a>
                  <ul class="dropdown">
                    <li><a href="./blog.php">- Blog</a></li>
                    <!-- <li><a href="./single-blog.php">- Blog Details</a></li> -->
                  </ul>
                </li>
                <li><a href="./contact.php">Bog'lanish</a></li>
              </ul>

              <!-- Top Search Area -->
              <div class="top-search-area">
                <form action="index.php" method="post">
                  <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                  <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
              </div>

              <!-- Top Social Area -->
              <div class="top-social-area">
                <a href="https://www.facebook.com/" class="fa fa-facebook" aria-hidden="true"></a>
                <a href="https://www.twitter.com/" class="fa fa-twitter" aria-hidden="true"></a>
                <a href="https://www.pinterest.com/" class="fa fa-pinterest" aria-hidden="true"></a>
                <a href="https://www.instagram.com/" class="fa fa-instagram" aria-hidden="true"></a>
                <a href="https://www.youtube.com/" class="fa fa-youtube-play" aria-hidden="true"></a>
              </div>

            </div>
            <!-- Nav End -->
          </div>
        </nav>
      </div>
    </div>
  </header>