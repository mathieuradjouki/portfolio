
<?php

$errors = [];
 if(!isset($_POST['name'])) {
    $errors['name'] = "vous n'avez pas renseigné votre nom";
 }
 if(!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Votre email n'est pas valide";
 }
 if(!isset($_POST['object'])) {
    $errors['object'] = "vous n'avez pas renseigné d'objet";
 }
 if(!isset($_POST['message'])) {
    $errors['message'] = "vous n'avez pas écrit votre message";
 }
 session_start();
 if(!empty($errors)){
   $_SESSION['errors'] = $errors;
   $_SESSION['input'] = $_POST;
   header('location: index.php#contact');
 }else{
   $_SESSION['succes'] = '1';
   $message = $_POST['message'];
   $headers = 'FROM: siteportfolio@codeur.online';
   echo $_POST['email'];
   mail('m.radjouki@codeur.online', 'formulaire de contact', $message, $headers);
   header('location: index.php#contact');
 }
