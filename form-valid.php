<?php
  $serveur = "localhost"; $dbname = "cours"; $user = "root"; $pass = "root";
  $name = $_POST["name"];
  $mail = $_POST["mail"];
  $object = $_POST["object"];
  $message = ["message"];

  $name = valid_donnees($_POST["name"]);
  $mail = valid_donnees($_POST["mail"]);
  $object = valid_donnees($_POST["object"]);
  $message = valid_donnees($_POST["message"]);


   function valid_donnees($donnees){
       $donnees = trim($donnees);
       $donnees = stripslashes($donnees);
       $donnees = htmlspecialchars($donnees);
       return $donnees;
   }

   if (!empty($name)
      && strlen ($name) <= 25
      && preg_match("[A-Za-z' -]+", $name)
      && !empty($mail)
      && filter_var($mail, FILTER_VALIDATE_EMAIL))
      {

        try{
            //On se connecte à la BDD
            $dbco = new PDO("mysql:host=$eerveur;dbname=$dbname",$user,$pass);
            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //On insère les données reçues
            $sth = $dbco->prepare("
                INSERT INTO form(name, mail, object, message)
                VALUES(:name, :mail, :object, :message)");
            $sth->bindParam(':name',$name);
            $sth->bindParam(':mail',$mail);
            $sth->bindParam(':object',$object);
            $sth->bindParam(':message',$message);
            $sth->execute();
            //On renvoie l'utilisateur vers la page de remerciement
            header("Location:form-merci.html");
        }
        catch(PDOException $e){
            echo 'Erreur : '.$e->getMessage();
        }
    }else{
        header("Location:footer.php");
    }
?>
