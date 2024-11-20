<?php
// Start the PHP block for the header
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Booksaw | Home</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/custom-style.css" rel="stylesheet">
</head>

<body class="index-page">
  <div class="topbar">
    <div class="container" style="max-width: 1200px; width: 100%; padding: 0 15px;">
      <h4 class="text-neutral-100 text-center m-0">
        Use code <span class="fw-bold">COUPON50</span> and get an offer on your purchase!
      </h4>
    </div>
  </div>

  <header id="header" class="header d-flex align-items-center">
    <div class="custom-container position-relative d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center mr-auto">
        <img src="assets/img/main-logo.png" alt="">
      </a>

      <!-- SEARCH CONTAINER -->
      <div class="search-container">
        <input type="search" class="search-input" placeholder="Search books, authors, Publishers, ISBN No...">
        <i class="search-icon fas fa-search"></i>
      </div>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li class="dropdown">
            <a href="#"><span>Academics</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown">
                <a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="listing-dropdown">
            <a href="#"><span>Fiction</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>

      <div class="navbar__button">
        <a href="login.php" class="sign__inButton">
          <i class="bi bi-person"></i> Sign In
        </a>
        <a class="btn-cart">
          <i class="bi bi-cart"></i> Cart
        </a>
      </div>
    </div>
  </header>

  <div class="search-container-two">
    <input type="search" class="search-input-two" placeholder="Search books, authors, Publishers, ISBN No...">
    <i class="search-icon-two fas fa-search"></i>
  </div>
