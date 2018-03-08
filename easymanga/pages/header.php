<!-- Header -->

<!-- liens -->
<meta charset="utf-8" />
<link href="https://fonts.googleapis.com/css?family=Ubuntu|Poiret+One|Quicksand" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../style/header.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans:700" rel="stylesheet"> 

<!-- block du header -->
<header class="container-fluid border-bottom">
    <div class="row">
        <div class="col-md-4">
        <!--LOGO-->
        <a href="index.php" title="lien vers accueil depuis logo" class="logoTaille d-none d-sm-block ">
            <img class="logo" src="../images/renard.png" alt="logo easyManga" title="Notre magnifique logo"/>
        </a>
        
        <!--TITRE-->
        <h1>easyManga</h1>
        </div>
        <!--MENU-->
        <nav class="col-md-4">
            <ul>
                <li>
                    <a href="#" title="">Goodies</a>
                </li>
                <li>
                    <a href="manga.php" title="">Mangas</a>
                </li>
                <li>
                    <a href="index.php" title="lien vers l'accueil">Accueil</a>
                </li>
                <li>
                    <a href="contact.php" title="lien vers formulaire de contact">Contact</a>
                </li>

            </ul>
        </nav>
        <nav class="col-md-4">

            <ul>
                <li>
<!--                    Affichage différent si on est connecté ou pas-->
                    <?php
                        session_start();
                        if (isset($_SESSION['connecte'])) {

                            echo '<div class="dropdown show">';
                                echo '<a href="#" title="lien vers mon compte" class="icon dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                                    echo '<i class="fa fa-user"></i>';
                                    echo " ".$_SESSION['username'];
                                echo '</a>';

                                echo '<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">';
                                    if ($_SESSION['admin'] == 1) {
                                        echo ' <a class="dropdown-item" href="../admin/admin.php">Admin</a>';
                                    }
                                    echo ' <a class="dropdown-item" href="deconnexion.php">Deconnexion</a>';
                                echo ' </div>';
                            echo '  </div>';


                        } else {
                            echo '<a href="signin.php" title="se connecter" class="icon">';
                            echo '<i class="fa fa-user"></i>';
                            echo ' Se Connecter';
                            echo '</a>';
                            echo ';
                        }
                    ?>
                </li>
                <li>
                    <a href="#" title="lien vers mon panier" class="icon">
                        <i class="fa fa-shopping-cart"></i>
                        Mon Panier
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>