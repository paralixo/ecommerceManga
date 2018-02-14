<!DOCTYPE html>
<html>
    <head>
        <title>EasyManga</title>
        <meta charset="utf-8" />
        <link href="https://fonts.googleapis.com/css?family=Ubuntu|Poiret+One|Quicksand" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../style/signup.css">
        <link rel="stylesheet" href="../style/style.css">
    </head>
    <body>
        <?php include('cible-signin.php');?>

        <form action="" method="post">

            <label for="email">Votre adresse email</label>
            <input type="email" name="email" required="true"/>

            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp" minlength="8" required="true"/>

            <input type="submit" name="submit" value="Connexion" />

        </form>
    </body>
</html>