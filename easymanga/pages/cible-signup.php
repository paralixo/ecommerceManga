<?php
    // connexion base

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=easymanga;charset=utf8', 'root', '');
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    // On charge les différents emails & mots de passe pour vérifier plus tard qu'ils existent
    $test_mail = $bdd->prepare("SELECT email_user FROM user");
    $test_mail->execute();

    // On mets tout les emails de la base dans un tableau (on a pas réussi autrement)
    $email_utilise = array();
    $i = 0;
    while ($donnees = $test_mail->fetch() ) {
        //var_dump($donnees);
        $email_utilise[$i] = $donnees[0];
        $i++;
    }
    $test_mail->closeCursor();

    // Pour vérifier que l'email n'est pas déjà utilisé
    $email_deja_utilise = false;


	// erreur
	$error1 = "";
	$error2	= "";
	$error3 = "";
	$error4 = "";
	// Envoi des données dans les variables  	
	if (isset($_POST["submit"]) && !empty($_POST["submit"])) {

        // Condition civilté
        if (isset($_POST["civilite"])) {
            $civilite = $_POST["civilite"];
        } else {
            $error1 = "Veuillez entrer votre civilité";
        }

        // Condition nom
        if (isset($_POST["lastname"]) && strlen($_POST["lastname"]) >= 2 && strlen($_POST["lastname"]) <= 144) {
            $lastname = $_POST["lastname"];
        } else {
            $error2 = "Veuillez entrer votre nom";
        }

        // Condition prenom
        if (isset($_POST["firstname"]) && strlen($_POST["firstname"]) >= 2 && strlen($_POST["lastname"]) <= 144) {
            $firstname = $_POST["firstname"];
        } else {
            $error3 = "Veuillez entrer votre prénom";
        }

        // Condition login
        if (isset($_POST["login"]) && strlen($_POST["login"]) >= 2 && strlen($_POST["lastname"]) <= 14) {
            $login = $_POST["login"];
        } else {
            $error4 = "Veuillez entrer un login de 2 à 14 caractères";
        }

        // Condition email
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            for($i=0; $i < count($email_utilise); $i++) {
                if ($email_utilise[$i] == $_POST["email"]) {
                    $email_deja_utilise = true;
                }
            }
            if ($email_deja_utilise == false) {
                $email = $_POST["email"];
            } else {
                $error6 = "Adresse email déjà utilisé";
            }
        } else {
            $error5 = "Veuillez entrer une adresse email valide";
        }

		// Condition mdp
		if (isset($_POST["mdp"]) == true && isset($_POST["verif_mdp"]) == true) {
			if ($_POST["mdp"] == $_POST["verif_mdp"]) {
				if (strlen($_POST["mdp"]) >= 8 && strlen($_POST["mdp"]) <= 45) {
					$pswd = $_POST["mdp"];
				} else {
					$error9 = "Veuillez entrer un mot de passe d'au moins 8 caractères (maximum: 45 caractères)";
				}
			} else {
				$error8 = "Les mots de passe ne correspondent pas";
			}
		} else {
            $error7 = "Veuillez entrer un mot de passe et le vérifier";
        }

//        $erreurs = array($error1, $error2, $error3, $error4, $error5, $error6, $error7, $error8, $error9);



	$req = $bdd->prepare("INSERT INTO `user`(`login_user`, `mdp_user`, `email_user`, `firstname_user`, `lastname_user`, `id_civilite`) VALUES (?, ?, ?, ?, ?, ?)");

	$req->execute(array($login, $pswd, $email, $firstname, $lastname, $civilite));
	}
 ?>