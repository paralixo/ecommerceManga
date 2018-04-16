<!-- Header -->

<!-- liens -->
<meta charset="utf-8"/>
<link href="https://fonts.googleapis.com/css?family=Ubuntu|Poiret+One|Quicksand" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../style/header.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans:700" rel="stylesheet">

<!-- block du header -->
<header>
    <div id="header-pc">
        <!--TITRE-->
        <div id="logo-header-pc">
            <a href="../test/index.php" title="home page"><h1>easyManga</h1></a>
        </div>
        <!--MENU-->
        <div id="menu-pc">
            <nav>
                <ul>
                    <li>
                        <a href="manga.php" title="">Mangas</a>
                    </li>
                    <li>
                        <a href="../test/index.php" title="lien vers l'accueil">Accueil</a>
                    </li>
                    <li>
                        <a href="contact.php" title="lien vers formulaire de contact">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!--Affichage différent si on est connecté ou pas-->
        <div id="menu-connection-pc">
            <nav>

                <ul>
                    <li>
                        <!--                    Affichage différent si on est connecté ou pas-->
                        <?php
                        session_start();
                        if (isset($_SESSION['connecte'])) {

                            echo '<div class="dropdown show">';
                            echo '<a href="#" title="lien vers mon compte" class="icon dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                            echo '<i class="fa fa-user"></i>';
                            echo " " . $_SESSION['username'];
                            echo '</a>';

                            echo '<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">';
                            if ($_SESSION['admin'] == 1) {
                                echo ' <a class="dropdown-item" href="../admin/adminManga.php">Admin</a>';
                            }
                            echo ' <a class="dropdown-item" href="deconnexion.php">Deconnexion</a>';
                            echo ' </div>';
                            echo '  </div>';


                        } else {
                            echo '<a href="signin.php" title="se connecter" class="icon">';
                            echo '<i class="fa fa-user"></i>';
                            echo ' Se Connecter';
                            echo '</a>';

                        }
                        ?>
                    </li>
                    <li>
                        <a href="panier.php" title="lien vers mon panier" class="icon">
                            <i class="fa fa-shopping-cart"></i>
                            Mon Panier
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div id="header-sm">
        <!--TITRE-->
        <div id="logo-header-sm">
            <a href="../test/index.php" title="home page"><h1>easyManga</h1></a>
        </div>
        <hr id="hr-1">
        <!--Affichage différent si on est connecté ou pas-->
        <div id="menu-connection-sm">
            <nav>

                <ul>
                    <li>
                        <!--                    Affichage différent si on est connecté ou pas-->
                        <?php
                        if (isset($_SESSION['connecte'])) {

                            echo '<div class="dropdown show">';
                            echo '<a href="#" title="lien vers mon compte" class="icon dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                            echo '<i class="fa fa-user"></i>';
                            echo " " . $_SESSION['username'];
                            echo '</a>';

                            echo '<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">';
                            if ($_SESSION['admin'] == 1) {
                                echo ' <a class="dropdown-item" href="../admin/adminManga.php">Admin</a>';
                            }
                            echo ' <a class="dropdown-item" href="deconnexion.php">Deconnexion</a>';
                            echo ' </div>';
                            echo '  </div>';


                        } else {
                            echo '<a href="signin.php" title="se connecter" class="icon">';
                            echo '<i class="fa fa-user"></i>';
                            echo ' Se Connecter';
                            echo '</a>';

                        }
                        ?>
                    </li>
                    <li>
                        <a href="panier.php" title="lien vers mon panier" class="icon">
                            <i class="fa fa-shopping-cart"></i>
                            Mon Panier
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <hr>
        <!--MENU-->
        <div id="menu-sm">
            <nav>
                <ul>
                    <li>
                        <a href="manga.php" title="">Mangas</a>
                    </li>
                    <li>
                        <a href="../test/index.php" title="lien vers l'accueil">Accueil</a>
                    </li>
                    <li>
                        <a href="contact.php" title="lien vers formulaire de contact">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
