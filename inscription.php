<?php

include 'connect.php';


if(isset($_POST['submit'])){
    


    $login = $_POST['login'];
    $password = $_POST['password'];
    $verify_password = $_POST['verify-password'];


    if($password == $verify_password){
        $resultat1 = mysqli_query($mysqli,"SELECT login FROM utilisateurs;");
        $row = $resultat1->fetch_all();
        $resultat2 = mysqli_query($mysqli,"SELECT login FROM utilisateurs WHERE login='$login';");
        $row1 = $resultat2->fetch_all();

        if($row1 == true){
            echo "L'utilisateur existe déjà";
        }

        else {
            $resultat = mysqli_query($mysqli,"INSERT INTO utilisateurs (`login`,`password`) VALUES ('$login','$password')");
            header("Location: connexion.php");
        }
    }

    else {
        echo "Les mot de passe ne sont pas identiques !";
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
    <title>inscription</title>
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
     
    <br>
    <label for="login">Login :</label><br>
    <input type="text" name="login" id="login" placeholder="pseudo" required="required"><br><br>

    <label for="password">password :</label><br>
    <input type="password" name="password" id="password" placeholder="password" required="required"><br><br>

    <label for="password">retaper votre password :</label><br>
    <input type="password" name="verify-password" id="verify-password" placeholder="confirm password" required="required"><br><br>

    <input type="submit" value="s'inscrire" name="submit"><br>
    <br>
    </form>
    </main>

    <footer>

    </footer>


    
</body>
</html>