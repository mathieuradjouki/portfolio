
<section class="contact p-5" id="contact">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
      <h2 class="text-center">Pour plus d'information n'hésitez pas à me contacter</h2>
      </div>
      <div class="row w-100 m-0">
        <!--Form contact-->
        <div class="col-12">
          <?php if(isset($_SESSION['errors'])); ?>
            <div class="alert alert-danger">
              <?= implode("<br>",$_SESSION['errors']); ?>
            </div>
          <?php unset($_SESSION['errors']); ?>
          <form class="contact" action="footer.php" name="contact" method="POST" onsubmit="return validForm()">
            <div class="form-group">
              <label for="contact_name">Name</label>
              <input type="text" placeholder="Antoine DUPONT" name="name" id="contact_name" class="form-control input-contact" required pattern="[A-Za-z' -]+" maxlength="25">
            </div>
            <div class="form-group">
              <label for="contact_email">E-mail</label>
              <input type="email" placeholder="monemail@email.com" name="email" id="contact_email"class="form-control input-contact" required>
            </div>
            <div class="form-group">
              <label for="contact_object">Objet</label>
              <input type="text" name="object" class="form-control input-contact" id="contact_object" required pattern="[A-Za-z' -]+">
            </div>
            <div class="form-group">
              <label for="contact_message">Message</label>
              <textarea name="message" rows="8" id="contact_message" class="form-control input-contact" required></textarea>
            </div>
            <div class="form-group">
              <button type="submit" id=contact_send>Envoyer message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php

$errors = [];
 if(isset($_POST['name'])) {
    $errors['name'] = "vous n'avez pas renseigné votre nom";
 }
 if(isset($_POST['mail'])) {
    $errors['mail'] = "vous n'avez pas renseigné votre email";
 }
 if(isset($_POST['object'])) {
    $errors['object'] = "vous n'avez pas renseigné d'objet";
 }
 if(isset($_POST['message'])) {
    $errors['message'] = "vous n'avez pas écrit votre message";
 }
 if(!empty($errors)){
   session_start();
   $_SESSION['errors'] = $errors;
   header('location: index.php#contact');
 }else{
   $message = $_POST['message'];
   $headers = 'FROM: siteportfolio@condeur.online';
   mail('m.radjouki@codeur.online', 'formulaire de contact', $message, $headers);
 }
 var_dump($errors);
 die();

 ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
