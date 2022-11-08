<!DOCTYPE html>
<html lang="fr">

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connection</title>
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <script language="javascript">
        function aufocus() {
            form1.pseudo.focus();
        }

    </script>

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
    <div id="cont2">
        <h1 align="center">Connexion pour accéder à la base de données</h1>
    </div>
    <div id="cont">
        <form name=form1 action="verification.php" method="POST">
            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="pseudo" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="mots-de-passe" required>

            <input type="submit" id='submit' value='Connexion'>
            <input type="reset" id='reset' value='Restaurer' onclick="aufocus()">
            <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
        </form>
    </div>
</body>

</html>
