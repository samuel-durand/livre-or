<?php


include 'connect.php';

$resultat = mysqli_query($mysqli,"SELECT DATE_FORMAT(`date`,'%d/%m/%Y'), `login`, `commentaire` FROM `utilisateurs` INNER JOIN `commentaires` WHERE utilisateurs.id = commentaires.id_utilisateur ORDER BY `date` DESC; ");
$row = $resultat->fetch_all();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>livre d'or</title>
</head>
<body>
    

<header>
        <nav>
            <ul>
                <li><a href="index.php">acceuil</a></li>
                <li><a href="inscription.php">inscription</a></li>
                <li><a href="connexion.php">connexion</a></li>
                <li><a href="livre-or.php">livre-or</a></li>
                <li><a href="commentaire.php">commentaire</a></li>
                <li><a href="profil.php">profil</a></li>
                <li><php</li>
            </ul>
        </nav>
    </header>

    <main>
        
        <table>
            <thead>
                <th>poste le</th>
                <th>pseudo</th>
                <th>commentaires</th>
            </thead>
            <tbody>
                <?php
                for ($i=0; isset($row[$i]) ; $i++) { 
                    echo "<tr>";
                    for ($j=0; isset($row[$i][$j]) ; $j++) 
                    { 
                        echo "<td>" . $row[$i][$j] . "</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        </div>
    </main>


    <footer>

    </footer>


    
</body>
</html>


