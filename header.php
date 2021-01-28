<?php session_start(); ?>
<?php '_inc.php' ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="Ceci est le portfolio Web design et Développement Web, Web Mobile de Mathieu RADJOUKI. N'hésitez pas à me contacter à l'aide du formulaire ou des reseau sociaux pour en savoir plus">
     <link rel="shortcut icon" type="image/png" href="assets/images/logo-hover.png"/>
     <title>Portfolio Web Designer, Web développeur Mathieu RADJOUKI</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <header>
      <!--Icone ouvrant menu-->
      <div class="open-menu" onclick="openNav()">
        <div class="bar1"><img src="assets/images/bar.png" alt=""></div>
        <div class="bar2"><img src="assets/images/bar.png" alt=""></div>
        <div class="bar3"><img src="assets/images/bar.png" alt=""></div>
      </div>
      <div class="menu">
          <div id="myNav" class="overlay">
      <!-- Button to close the overlay navigation -->
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
              <div class="container">
                <div class="close-bar1"><img src="assets/images/bar.png" alt=""></div>
                <div class="close-bar2"></div>
                <div class="close-bar3"><img src="assets/images/bar.png" alt=""></div>
              </div>
            </a>
      <!-- Overlay content -->
            <div class="overlay-content" onclick="closeNav()">
              <a href="#home" onclick=lien()>Accueil</a>
              <a href="#projects" onclick=lien()>Mes projets</a>
              <a href="#myself" onclick=lien()>Qui suis-je?</a>
              <a href="#contact" onclick=lien()>Contact</a>
              <a href="assets/ressource/cv-mathieu.pdf" download onclick=lien()>Telecharger CV</a>
            </div>
          </div>
        </div>
      <!-- <nav>
        <ul>
          <li><a href="#home" onclick=lien()>Accueil</a></li>
          <li><a href="#projects" onclick=lien()>Mes projets</a></li>
          <li><a href="#myself" onclick=lien()>Qui suis-je?</a></li>
          <li><a href="#contact" onclick=lien()>Contact</a></li>
          <li><a href="assets/ressource/cv-mathieu.pdf" download onclick=lien()>Telecharger CV</a></li>
        </ul>
      </nav> -->
      <div class="home" id="home">
        <div class="section-sign">
          <img src="assets/images/home.png" alt="home sign" class="desktop-home-sign">
          <img src="assets/images/home-mobile.png" alt="mobile home sign" class="mobile-home-sign">
        </div>       
        <div class="title">
          <h1><span class="headline">Je m'appelle Mathieu RADJOUKI</span><br>
          Je suis Designer et developpeur Web, Web Mobile.</h1>
        </div>
      </div>
    </header>
    
