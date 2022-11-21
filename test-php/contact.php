<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact</title>
</head>
<body>
<?php 
    include "menu.php"
    ?>
    <h1>Contact</h1>
    <article>
     <img class="img" src="./image/contacts.jpg" alt="">
     <form>

            <label for="nom">Votre nom</label>:<input type="text" name="nom" id="nom" placeholder="Votre nom"><br>

            <label for="prenom">Votre prénom</label>:<input type="text" name="prenom" id="prenom" placeholder="Votre prénom"><br>

            <label for="adresse">Votre domicile</label>:<input type="text" name="adresse" id="adresse" placeholder="Votre domicile"><br>

   

            <label for="mail">Votre adresse email</label>:<input type="email" name="adresse mail" id="mail" placeholder="Votre mail"><br>

            <label for="com">Commentaires</label>:<textarea type="text" name="commentaires" id="com" placeholder="Vos commentaires"></textarea><br>

            <hr>

   

            <input type="submit" value="Envoyer">

        </form>
    </article>
</body>
</html>