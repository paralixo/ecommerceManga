<!DOCTYPE html>
<html>
    <head>
        <title>EasyManga - Connexion</title>
        <meta charset="utf-8" />
        <link href="https://fonts.googleapis.com/css?family=Ubuntu|Poiret+One|Quicksand" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../style/signup.css">
    </head>
    <body>
        
        <?php include('header.php');?>
        <?php include('cible-signin.php');?>
        
        
        
        <div id="connexion">

            <form action="" method="post">
                <div class="form-check">
                    <label class="form-check-label" for="email">Votre adresse email</label>
                    <input class="form-control" type="email" name="email" required="true"/>
                </div>
                <div class="form-check">
                    <label class="form-check-label" for="mdp">Mot de passe</label>
                    <input class="form-control" type="password" name="mdp" minlength="8" required="true"/>
                </div>
                <input type="submit" name="submit" id="valider" value="Connexion" class="btn btn-primary" />

            </form>

            <small>Pas de compte ? Inscrivez-vous <a href="signup.php">ici</a></small>

        </div>
        
        
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>