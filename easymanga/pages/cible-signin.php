<?php

    // Connexion à la base
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=easymanga;charset=utf8', 'root', '');
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    $admin = $bdd->prepare("SELECT admin FROM user");
    $admin->execute();

    // On mets tout les emails de la base dans un tableau (on a pas réussi autrement)
    $admin_user = array();
    $i = 0;
    while ($donnees = $admin->fetch() ) {
            //var_dump($donnees);
            $admin_user[$i] = $donnees[0];
            $i++;
    }
    $admin->closeCursor();

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

    $test_mdp = $bdd->prepare("SELECT mdp_user FROM user");
    $test_mdp->execute();

    // On mets tout les mdp de la base dans un tableau (on a pas réussi autrement)
    $mdp_utilisateur = array();
    $i = 0;
    while ($donnees = $test_mdp->fetch() ) {
        //var_dump($donnees);
        $mdp_utilisateur[$i] = $donnees[0];
        $i++;
    }
    $test_mdp->closeCursor();


$email_valide = false;

    // Envoi des données dans les variables
    if (isset($_POST["submit"]) && !empty($_POST["submit"])) {

        // Condition email
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $email = $_POST["email"];

            // On vérifie que l'email est bonne, si c'est le cas on vérifie le mot de passe
            for($i=0; $i < count($email_utilise); $i++) {
                if ($email_utilise[$i] == $email) {
                    $email_valide = true;

                    // Condition mdp
                    if (isset($_POST["mdp"]) == true) {
                        $pswd = $_POST["mdp"];

                        // On vérifie que c'est le bon mdp
                        if ($mdp_utilisateur[$i] == $pswd) {
                            
                            $test_nom = $bdd->prepare("SELECT login_user FROM user");
                            $test_nom->execute();  
                            $nom = array();
                            $j = 0;
                            while ($donnees = $test_nom->fetch() ) {
                                    //var_dump($donnees);
                                    $nom[$j] = $donnees[0];
                                    $j++;
                            }
                            $test_nom->closeCursor();

                            session_start();

                            
                            $_SESSION['username'] = $nom[$i];
                            $_SESSION['connecte'] = true;
                            $_SESSION['admin'] = $admin_user[$i];
                            $_SESSION['panier'] = array();
                            header('Location: http://localhost/ecommerceManga/easymanga/pages/index.php');
                            exit();
                            
                        } else {
                            echo "Erreur : mot de passe invalide";
                        }

                    } else {
                        echo "Erreur : veuillez entrer un mot de passe";
                    }

                }
            }

            if ($email_valide == false) {
                echo "Erreur : adresse email invalide";
            }


        } else {
            echo "Erreur : adresse e-mail invalide";
        }

    }

?>