<?php

session_start();
include 'connect.php';

if(isset($_POST['submit'])){

    $login = $_POST['login'];
    $password = $_POST['password'];

    $resultat = mysqli_query($mysqli,"UPDATE utilisateurs SET login='$login',password = '$password' WHERE login='".$_SESSION['login']."'");
    
    if(isset($_SESSION['login'])){
        echo "Votre profil à été mis à jour ".$_SESSION['login'];
    }

    else{
        echo "impossible de mettre à jour";
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
    

<header>
        <nav>
            <ul>
                <li><a href="index.php">acceuil</a></li>
                <li><a href="inscription.php">inscription</a></li>
                <li><a href="livre-or.php">livre-or</a></li>
                <li><a href="commentaire.php">commentaire</a></li>
                <li><a href="profil.php">profil</a></li>
                <li><a href="connexion.php">connexion</a></li>
                <li><a href="deconnexion.php">deconnexion</a></li>
                <li><php</li>
            </ul>
        </nav>
    </header>
    <section>
        <h1><?php echo "Bienvenue dans votre compte ".'<span>'.$_SESSION['login'].'</span>'; ?></h1>
    </section>

    <<h1><?php echo "modifier votre compte ".'<span>'.$_SESSION['login'].'</span>';?></h1>
    
    <main>
    <form  method="POST" align="center">
        <label for="login">login</label><br>
        <input type="text" placeholder="login" name="login"><br><br>
        
        <label for="password">password </label><br>
        <input type="password" placeholder="password" name="password"><br><br>

        <input type="submit" value="mettre à jour" name="submit">
    </form>
    </main>
    


    <footer>

    </footer>


    
</body>