<?php

include 'connect.php';

if(isset($_POST['submit'])){
    $id = $_SESSION['id'];
    $date = date("Y-m-d H:i:s");
    $commentaire = htmlspecialchars($_POST['commentaire']);


    $resultat = mysqli_query($mysqli,"INSERT INTO `commentaires` (`id`,`commentaire`,`id_utilisateur`,`date`) VALUES (NULL,'$commentaire','$id','$date');");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/styles.css" /> 
    <title>commentaire</title>
</head>
<body>

    <!--header-->

    <?php include 'header.php' ?>

    <main>
        
        
        <form method="POST" action="" align="center">
            <br>
            <label for="commentaire">message</label><br><br>
            <input type="text" name="commentaire" placeholder="votre commentaire" id="comment"><br><br>
            <input type="submit" value="Envoyez le commentaire"  name="submit"><br>
            <br>
        </form>
    </main>


</body>
</html>