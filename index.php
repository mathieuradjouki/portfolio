<?php include'header.php'?>
<!-- section a propos de moi -->
  <section class="about">
    <div class="container container-about">
      <div class="portrait">
        <img src="images/portrait.png" alt="">
      </div>
      <div class="about-text">
        <h2>A propos de moi</h2>
        <p>Candy carrot cake lollipop soufflé caramels cake chupa chups chupa chups jelly-o. Jelly gingerbread wafer dessert topping cake croissant candy canes. Gummies lollipop chocolate bar sweet roll. Cake tootsie roll caramels.<br>
        Toffee liquorice sesame snaps chocolate bar candy brownie. Topping candy canes biscuit danish tootsie roll tart candy. Jelly beans soufflé chupa chups cupcake carrot cake cake bear claw.<br>
        Brownie apple pie cupcake jelly tootsie roll. Brownie bonbon gummi bears jujubes bonbon croissant cupcake pie. Pie candy cupcake jelly. Cake wafer marshmallow jujubes danish.</p>
      </div>
    </div>
  </section>
<!-- image de fond -->
  <div class="ab-port-img">
    <img src="images/about-img-left.png" alt="skieur">
  </div>
<!-- section projet -->
  <section class="projet">
    <div class="container">
      <h2>Mes Projets</h2>
      <!-- <div class="show-projets">
        <img src="images/hiking.png" alt="capture du projet hiking" class="capture-projets">
        <img src="images/concession.png" alt="capture du projet concession" class="capture-projets">
        <img src="images/spaceDrive.png" alt="capture du projet space drive" class="capture-projets">
      </div> -->
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/hiking.png" class="d-block w-100" alt="capture du projet hiking">
            <!-- <div class="carousel-caption d-none d-md-block">
              <h5>It's Time For Hiking</h5>
              <p>Projet d'intégration à partir d'un template imposé</p>
            </div> -->
          </div>
          <div class="carousel-item">
            <img src="images/concession.png" class="d-block w-100" alt="capture du projet concession">
            <!-- <div class="carousel-caption d-none d-md-block">
              <h5>Site de concession auto</h5>
              <p>Travail en groupe de refonte de site existant</p>
            </div> -->
          </div>
          <div class="carousel-item">
            <img src="images/spaceDrive.png" class="d-block w-100" alt="capture du projet space drive">
            <!-- <div class="carousel-caption d-none d-md-block">
              <h5>Space Drive</h5>
              <p>Projet d'intégration de site dynamique à partir d'une maquette fournie</p>
            </div> -->
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
  </section>
  <section class="parcours">

  </section>

<?php include'footer.php'?>
