<?php

ini_set( 'display_errors', 1 );

error_reporting( E_ALL );

if(isset($_POST['valider'])){
        $from = "test@mesozogeek.000webhostapp.com";
        $to = "enzo.lemarchand83@gmail.com";
        $mail = $_POST['mail'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $formation = $_POST['formation/métier'];
        $headers = "From " . $nom . " " . $prenom . " en " . $formation . "  " . $mail;
        mail($to,$subject,$message, $headers);
        echo "L'email a été envoyé.";
    }
?>
