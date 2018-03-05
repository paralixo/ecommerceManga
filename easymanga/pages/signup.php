<!DOCTYPE html>
<html>
	<head>
		<title>EasyManga - Inscription</title>
		<meta charset="utf-8" />
        <link href="https://fonts.googleapis.com/css?family=Ubuntu|Poiret+One|Quicksand" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../style/signup.css">
	</head>
	<body>
		<?php include('cible-signup.php');?>

        <?php include 'header.php' ; ?>

        <div id="inscription">

            <h1>Inscription</h1>
        <!-- formulaire d'envoi de l'inscription -->
		<form action="" method="post">

			<!-- 1er partie du formulaire d'inscription identité -->

            <div>Votre civilté :</div>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name="civilite" value="2" id="civ2"/>
                <label class="form-check-label" for='civ2'>Mme</label>
            </div>

            <div class='form-check'>
                <input class="form-check-input" type="radio" name="civilite" value="1" id="civ1"/>
                <label class="form-check-label" for='civ1'>M.</label>
            </div>


                <?php
                    if ( !empty($error1)) {
                        echo '<div class="alert alert-danger" role="alert">';
                        echo $error1;
                        echo '</div>';
                    }
                ?>
            

            <div class='form-group'>
    			<label class="form-check-label" for='lastname'>Votre nom :</label>
	    		<input class="form-control" type="text" name="lastname" id="lastname" required="true" />
            </div>

            <div class='form-group'>
                <label class="form-check-label" for='firstname'>Votre prénom :</label>
                <input class="form-control" type="text" name="firstname" id="firstname" required="true" />
            </div>

            <hr/>

<!--			<button class="btn">Suivant</button>-->

			<!-- 2nd partie du formulaire d'inscription identifiant/mdp -->

            <div class='form-group'>
                <label class="form-check-label" for="login">Votre pseudo :</label>
                <input class="form-control" type="text" name="login" id="login" required="true" />
            </div>

            <div class='form-group'>
                <label class="form-check-label" for="email">Votre adresse email :</label>
                <input class="form-control" type="email" name="email" id="email" required="true"/>
            </div>

            <hr/>

            <div class='form-group'>
                <label class="form-check-label" for="mdp">Mot de passe :<span class="error"><?php echo $error2; echo $error3; ?></span></label>
                <input class="form-control" type="password" name="mdp" id="mdp" minlength="8" required="true"/>

                <label class="form-check-label" for="verif_mdp">Vérification du mot de passe :</label>
                <input class="form-control" type="password" name="verif_mdp" id="verif_mdp" minlength="8" required="true" />
            </div>

            <input  class="btn btn-primary" type="submit" name="submit" value="Valider" >
		</form>

            <small>Déjà un compte ? Connectez-vous <a href="signin.php">ici</a></small>

        </div>

        <?php include 'footer.php' ; ?>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>