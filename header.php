<?php '_inc.php' ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Portfolio Mathieu RADJOUKI</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <header>
      <!--Icone ouvrant menu-->
        <div class="open-menu" onclick="openNav()">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>
      <!--Images fond-->
        <img src="assets/images/header.jpg" alt="fond-header" class="header-bg">

      <!--Logo-->
        <img src="assets/images/logo-hover.png" id="logo-hover" alt="logo" class="main-logo-hover">
        <img src="assets/images/logo.png" id="logo-top"  alt="logo" class="main-logo">
      <!-- The overlay -->
        <div class="menu">
          <div id="myNav" class="overlay">
      <!-- Button to close the overlay navigation -->
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
              <div class="container">
                <div class="close-bar1"></div>
                <div class="close-bar2"></div>
                <div class="close-bar3"></div>
              </div>
            </a>
      <!-- Overlay content -->
            <div class="overlay-content">
              <a href="#">A propos</a>
              <a href="#">Projets</a>
              <a href="#">Télecharger CV</a>
              <a href="#">Contact</a>
            </div>
          </div>
        </div>
    </header>
