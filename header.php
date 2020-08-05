<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Portfolio Mathieu RADJOUKI</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <link rel="stylesheet" href="main.css">
     <script src="main.js"></script>
  </head>
  <body>
    <header>
      <!--Images fond-->
        <img src="images/header.jpg" alt="fond-header" class="header-bg">
        <div class="open-menu" onclick="openNav()">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>
        <img src="images/logo.png" id="logo-header" onmouseover="openLogo" alt="logo" class="main-logo">
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
            <a href="#">About</a>
            <a href="#">Projet</a>            
            <a href="#">Contact</a>
          </div>
        </div>
        <!-- Use any element to open/show the overlay navigation menu -->

      </div>

        <!--<span onclick="openNav()">open</span>-->
    </header>
