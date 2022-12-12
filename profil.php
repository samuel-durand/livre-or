<?php

include 'connect.php';

if(isset($_POST['submit'])){

    $login = $_POST['login'];
    $password = $_POST['password'];

    $resultat = mysqli_query($mysqli,"UPDATE utilisateurs SET login='$login',password = '$password' WHERE login='".$_SESSION['login']."'");
    
    if(isset($_SESSION['login'])){
        echo "Votre profil à été mis à jour ".$_SESSION['login'];
    }


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/styles.css" /> 
    <title>profil</title>
</head>
<body>
    
    <!--header-->

    <?php include 'header.php' ?>
    <section>
        <h1><?php echo "Bienvenue dans votre compte ".'<span>'.$_SESSION['login'].'</span>'; ?></h1>
    </section>
    

    
    <main>
    <form  method="POST" align="center">
        <br>
        <label for="login">login</label><br><br>
        <input type="text" placeholder="login" name="login"><br><br>
        
        <label for="password">password </label><br><br>
        <input type="password" placeholder="password" name="password"><br><br>

        <input type="submit" value="mettre à jour" name="submit"><br><br>
    </form>
    </main>
    


    <footer>

    </footer>


    
</body>