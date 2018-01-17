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
		<?php include('cible-signup.php');?>
		<!-- formulaire d'envoi de l'inscription -->
		<form action="" method="post">

			<!-- 1er partie du formulaire d'inscription identité -->

			<label>Votre nom</label>
			<input type="text" name="lastname" required="true" />
			<label>Votre prénom</label>
			<input type="text" name="firstname" required="true" />
			<label>Votre civilté <span class="error"><?php echo $error1; ?></span></label>
			<label>M.
				<input type="radio" name="civilite" value="1" id="civ1"/>
			</label>
			<label>Mme
				<input type="radio" name="civilite" value="2" id="civ2"/>
			</label>
			<button>Suivant</button>

			<!-- 2nd partie du formulaire d'inscription identifiant/mdp -->

			<label>Entrez votre pseudo</label>
			<input type="text" name="login" required="true">
			<label>Votre adresse email</label>
			<input type="email" name="email" required="true"/>
			<label>Mot de passe <span class="error"><?php echo $error2; echo $error3; ?></span></label>
			<input type="password" name="mdp" minlength="8" required="true"/>
			<label>Vérification du mot de passe</label>
			<input type="password" name="verif_mdp" minlength="8" required="true" />
			<input type="submit" name="submit" value="Valider" >
		</form>
 
	</body>
</html>