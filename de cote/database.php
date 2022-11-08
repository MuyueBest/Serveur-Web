<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <title>Database</title>
</head>

<body>
    <a href='database.php?deconnexion=true'><span>Déconnexion</span></a>
    <?php
                session_start();
                if(isset($_GET['deconnexion'])){ 
                   if($_GET['deconnexion']==true){  
                      session_unset();
                      header("location:login.php");
                   }
                }
                else if($_SESSION['pseudo'] !== ""){
                    $user = $_SESSION['pseudo'];
                    // afficher un message
                    echo "<br>$user est connectés";
                }
            ?>
    <div align="center">
        <h1>Table des formulaires</h1>
        <table border="1" cellspacing="0" cellpadding="1" width="1000">
            <?php
            //Données pour la connexion à la base de données
            $host = "localhost";
            $user="root";
            $password="root";
            $database = "formulaire";
            //Connexion à la BdD
            $mysqli = new mysqli($host,$user,$password,$database);
            if ($mysqli->connect_errno){
                die("Echec lors de la connexion"
                    .$mysqli->connect_error);
            }
            //execution de la requete
            $sql = "SELECT * FROM formulaires;";
            $resultat = $mysqli->query($sql);
            //récupération des résultats
            $titre = $resultat->fetch_fields();
            foreach ($titre as $colonne){
                echo "<th>"
                    .$colonne->name."</th>";
            }
            //affichage des objets
            while ($ligne = $resultat->fetch_object()){
                echo "<tr>";
                //on récupere chaque attribut de la ligne
                foreach ($ligne as $colonne=>$val){
                    echo "<td >".$val."</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>
