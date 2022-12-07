<?php

session_start();
include 'connect.php';

if(isset($_POST['submit'])){

    $login = $_POST['login'];
    $password = $_POST['password'];

    $resultat = mysqli_query($mysqli,"SELECT id,login,password FROM utilisateurs WHERE login='$login' and password='$password';");
    $row = $resultat->fetch_all();

    if($row == true) {
        $_SESSION['id'] = $row[0][0];
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password'] = $_POST['password'];
        echo "bienvenue ".$_SESSION['login'];
        
    }
    

    else {
        echo "Le login et/ou le mot de passe est incorrect !";
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
    <title>connexion</title>
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
    
    <main>
    <form method="POST" action="" align="center">

    <label for="login">Login :</label><br>
    <input type="text" name="login" id="login" placeholder="pseudo" required="required"><br><br>

    <label for="password">password :</label><br>
    <input type="password" name="password" id="password" placeholder="password" required="required"><br><br>

    <input type="submit" value="se connecter" name="submit"><br>

    
    </form>
    </main>

    <footer>

    </footer>


    
</body>
</html>
