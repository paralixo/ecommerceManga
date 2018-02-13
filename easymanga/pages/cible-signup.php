<?php
    // connexion base

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=easymanga;charset=utf8', 'root', '');
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    $test_mail = $bdd->prepare("SELECT email_user FROM user");
    $test_mail->execute();


	// erreur
	$error1 = "";
	$error2	= "";
	$error3 = "";
	$error4 = "";
	// Envoi des données dans les variables  	
	if (isset($_POST["submit"]) && !empty($_POST["submit"])) {
		$lastname = $_POST["lastname"];
		$firstname = $_POST["firstname"];
		$login = $_POST["login"];
		
		// Conditions d'envoi
        // Condition mail
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL && $_POST["email"] == $test_mail)){
            $email = $_POST["email"];
        }
        else {
            echo $error4 = "Erreur : adresse e-mail invalide";
        }
        // Condition civilté
		if (isset($_POST["civilite"]) == false) {
			$error1 = "Erreur : aucune civilité n'a été sélectioné";
		}
		else {
			$civilite = $_POST["civilite"];
		}

		// Condition mdp
		if (isset($_POST["mdp"]) == true && isset($_POST["verif_mdp"]) == true) {
			if ($_POST["mdp"] == $_POST["verif_mdp"]) {
				if (strlen($_POST["mdp"]) >= 8 && strlen($_POST["mdp"]) <= 45) {
					$pswd = $_POST["mdp"];
				}
				else {
					$error2 = "Erreur :le mot de passe doit être compris entre 8 et 45 caractères";
				}
			}
			else {
				$error3 = "Erreur : mots de passe différents";
			}
		}



	$req = $bdd->prepare("INSERT INTO `user`(`login_user`, `mdp_user`, `email_user`, `firstname_user`, `lastname_user`, `id_civilite`) VALUES (?, ?, ?, ?, ?, ?)");

	$req->execute(array($login, $pswd, $email, $firstname, $lastname, $civilite));
	}
 ?>