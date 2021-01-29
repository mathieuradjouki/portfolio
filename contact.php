
<?php

$errors = [];
 if(!array_key_exists('name', $_POST) || $_POST['name'] == '') {
    $errors['name'] = "Vous n'avez pas renseigné votre nom";
 }
 if(!array_key_exists('email', $_POST) || $_POST['name'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Votre email n'est pas valide";
 }
 if(!array_key_exists('object', $_POST) || $_POST['object'] == '') {
    $errors['object'] = "Vous n'avez pas renseigné d'objet";
 }
 if(!array_key_exists('message', $_POST) || $_POST['message'] == '') {
    $errors['message'] = "Vous n'avez pas écrit votre message";
 }
 session_start();
 if(!empty($errors)){
  
   $_SESSION['errors'] = $errors;
   $_SESSION['input'] = $_POST;
   header('location: index.php#contact');
 }else{
   $_SESSION['success'] = 1;
   $headers = 'FROM: ' . $_POST['email'];
   mail('m.radjouki@codeur.online', 'formulaire de contact' . '' . $_POST['name'], $_POST['message'], $headers);
   header('location: #contact');
 }
