<?php include '_inc.php' ?>
<div class="information">
  <div class="contact-sign">
    <img src="assets/images/contact.png" alt="contact sign" class="desktop-myself-sign">
    <img src="assets/images/mobile-contact.png" alt="mobile contact sign" class="mobile-contact-sign">
  </div>
  <section class="contact" id="contact">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
        <h3 class="text-center">Contactez moi pour plus d'information</h3>
        </div>
        <div class="row contact-form">
          <div class="col-12">
            <?php if(isset($_SESSION['errors'])): ?>
              <div class="alert alert-danger">
                <?= implode("<br>",$_SESSION['errors']); ?>
              </div>
              <?php endif; ?>
              <?php if(isset($_SESSION['succes'])): ?>
                <div class="alert alert-succes">
                  Votre email a été envoyé avec succés!
                </div>
              <?php endif; ?>
          <!--Form contact-->
            <form class="contact" action="contact.php" name="contact" method="POST" onsubmit="return validForm()">
                <?php $form = new Form(); ?>
                    <?= $form-> text('name','Votre nom','Prenom Nom'); ?>
                    <?= $form-> email('email','Votre email','monemail@email.com') ?>
                    <?= $form-> tel('tel','Telephone', '0x xx xx xx xx') ?>
                    <?= $form-> text('object','Objet','Objet du message') ?>
                    <?= $form-> textarea('message','Votre message', 'Ecrivez ici') ?>
                    <?= $form-> submit('Envoyez message') ?>
                    <?= isset($_SESSION['input']['email']) ? $_SESSION['input']['email'] : '';?>
                    <?= isset($_SESSION['input']['message']) ? $_SESSION['input']['message'] : '';?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<div class="social-medias">
  <a href="https://www.linkedin.com/in/mathieu-radjouki/"><img src="assets/images/linkedin.png" alt="icon linkedin"></a>
  <a href="https://github.com/mathieuradjouki"><img src="assets/images/github.png" alt="icon github"></a>
  <a href="https://twitter.com/home?lang=fr"><img src="assets/images/twitter.png" alt="icon twitter"></a>
</div>
<div class="footer">
  <hr>
  <p class="text-center">Tous droits reserves - 2021 | Mentions legales</p>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="assets/JS/main.js"></script>
  </body>
</html>

<?php if($_SESSION['input'] = null){ 
unset($_SESSION['input']);} ?>
<?php unset($_SESSION['succes']); ?>
<?php unset($_SESSION['errors']); ?>
