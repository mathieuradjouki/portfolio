
<?php

$errors = [];
 if(!isset($_POST['name'])) {
    $errors['name'] = "vous n'avez pas renseigné votre nom";
 }
 if(!isset($_POST['mail'])) {
    $errors['mail'] = "vous n'avez pas renseigné votre email";
 }
 if(!isset($_POST['object'])) {
    $errors['object'] = "vous n'avez pas renseigné d'objet";
 }
 if(!isset($_POST['message'])) {
    $errors['message'] = "vous n'avez pas écrit votre message";
 }
 if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
   $errors['mail'] = "vous n'avez pas renseigné votre email";
 }
 if(!empty($errors)){

   $_SESSION['errors'] = $errors;
   header('location: index.php');
 }else{
   $message = $_POST['message'];
   $headers = 'FROM: siteportfolio@codeur.online';
   echo $_POST['mail'];
   //mail('m.radjouki@codeur.online', 'formulaire de contact', $message, $headers);
 }
