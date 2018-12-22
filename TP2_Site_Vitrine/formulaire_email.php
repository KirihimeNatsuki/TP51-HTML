<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>Nous contacter</title>
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="styletp2.css">

</head>
<body>
  <div>
   <form action="index.php" method="post">
 <div>
   <label for="nom">Nom :</label>
   <input type="text" id="nom" name="nom" />
 </div>
 <div>
   <label for="prenom">Prénom :</label>
   <input type="text" id="prenom" name="prenom" />
 </div>
 <div>
   <label for="formation">Formation :</label>
   <input type="text" id="formation" name="formation" />
 </div>
 <div>
     <label for="subject">Sujet :</label>
     <input type ="text" id="subject" name="subject" />
 </div>
 <div>
   <label for="mail">E-mail :</label>
   <input type="email" id="mail" name="mail" />
 </div>
 <div>
   <label for="message">Message:</label>
   <textarea id="message" name="message"></textarea>
 </div>
 <div class="button">
       <input type="submit" name="valider" value="envoyer" />
   </div>
</div>
<?php  include('TP2_Site_Vitrine\formulaire_email.html');   ?>

</body>
