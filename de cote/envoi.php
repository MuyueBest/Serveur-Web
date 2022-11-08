<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <title>Envoie du formulaire</title>
</head>

<body>
    <a href='login.php?Retour=true'><span>Retour au formulaire</span></a>
    <?php
                session_start();
                if(isset($_GET['Retour'])){ 
                   if($_GET['Retour']==true){  
                      session_unset();
                      header("location:Formulaire_TP1.html");
                   }
                }
            ?>
    <div id="cont">
        <form name="envoi" method="post">
            <?php
            $civilite   =$_POST["civilite"];
            $nom        =$_POST["nom"];
            $prenom     =$_POST["prenom"];
            $adresse    =$_POST["adresse"];
            $codepostal =$_POST["codepostal"];
            $ville      =$_POST["ville"];
            $pays       =$_POST["pays"];
            $c_interets =$_POST["c_interets"];
            $message    =$_POST["message"];

            //Données pour la connexion à la base de données
            $host = "localhost";
            $user = "root";
            $password = "root";
            $database = "formulaire";
            //Connexion à la BdD
            $mysqli = new mysqli($host,$user,$password,$database);
            if ($mysqli->connect_errno){
                die("Echec lors de la connexion"
                    .$mysqli->connect_error);
            }
            //insertion des infos du formulaire dans la base de donnée
            $sql ="INSERT INTO `formulaires` (`civilite`, `nom`, `prenom`, `adresse`, `codepostal`, `ville`, `pays`, `c_interets`, `message`) VALUES ('$civilite', '$nom', '$prenom', '$adresse', '$codepostal', '$ville', '$pays', '$c_interets', '$message')";
            $mysqli->query($sql);
            echo "<p>Merci pour ton inscription $nom.</p>";
            ?>
            <a href="login.php">Clique pour te connecter à la base de donnée.</a>
        </form>
    </div>
</body>

</html>
