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

<div class="color"></div>
      <div class="color"></div>
      <div class="color"></div>
      <div class="box">
        <div class="square" style="--i: 0"></div>
        <div class="square" style="--i: 1"></div>
        <div class="square" style="--i: 2"></div>
        <div class="square" style="--i: 3"></div>
        <div class="square" style="--i: 4"></div>

    <!--header-->

        <?php include 'header.php' ?>
    
    


    <section>

    <main>
    <form method="POST" action="" align="center">
     
    <br>
    <label for="login">Login :</label><br><br>
    <input type="text" name="login" id="login" placeholder="pseudo" required="required"><br><br>

    <label for="password">password :</label><br><br>
    <input type="password" name="password" id="password" placeholder="password" required="required"><br><br>

    <label for="password">retaper votre password :</label><br><br>
    <input type="password" name="verify-password" id="verify-password" placeholder="confirm password" required="required"><br><br>

    <input type="submit" value="s'inscrire" name="submit"><br>
    <br>
    </form>
    
   </section>

   <main>

    
   </main>

   


    <footer>

    </footer>

    
</body>


</html>