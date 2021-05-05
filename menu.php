<!--Icone ouvrant menu-->
<div class="open-menu" onclick="openNav()">
        <div class="bar1"><img src="assets/images/bar.png" alt="image barre d'ouverture du menu"></div>
        <div class="bar2"><img src="assets/images/bar.png" alt="image barre d'ouverture du menu"></div>
        <div class="bar3"><img src="assets/images/bar.png" alt="image barre d'ouverture du menu"></div>
      </div>
      <div class="menu">
          <div id="myNav" class="overlay">
      <!-- Button to close the overlay navigation -->
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
              <div class="container">
                <div class="close-bar1"><img src="assets/images/bar.png" alt="image de fermeture du menu"></div>
                <div class="close-bar2"></div>
                <div class="close-bar3"><img src="assets/images/bar.png" alt="image de fermeture menu"></div>
              </div>
            </a>
      <!-- Overlay content -->
            <div class="overlay-content" onclick="closeNav()">
              <a href="#home" onclick=lien()>Accueil</a>
              <a href="#projects" onclick=lien()>Mes projets</a>
              <a href="#myself" onclick=lien()>Qui suis-je?</a>
              <a href="#contact" onclick=lien()>Contact</a>
              <a href="assets/ressource/Cv_Radjouki_Mathieu.pdf" download onclick=lien()>Telecharger CV</a>
            </div>
          </div>
        </div>
      <nav>
        <ul>
          <li><a href="#home" onclick=lien()>Accueil</a></li>
          <li><a href="#projects" onclick=lien()>Mes projets</a></li>
          <li><a href="#myself" onclick=lien()>Qui suis-je?</a></li>
          <li><a href="#contact" onclick=lien()>Contact</a></li>
          <li><a href="assets/ressource/cv-mathieu.pdf" download onclick=lien()>Telecharger CV</a></li>
        </ul>
      </nav>