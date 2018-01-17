<!-- Header -->

<!-- liens -->
<meta charset="utf-8" />
<link href="https://fonts.googleapis.com/css?family=Ubuntu|Poiret+One|Quicksand" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../style/header.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- block du header -->
<header class="container-fluid">
    <div class="row align-items-center">
        
        <!--LOGO-->
        <a href="index.php" alt="lien vers accueil depuis logo"  class="d-none d-sm-block ">
            <img class="logo" src="../images/renard.png" alt="logo easyManga" title="Notre magnifique logo"/>
        </a>
        
        <!--TITRE-->
        <h1>easyManga</h1>

        <!--MENU-->
        <nav class="justify-content-center d-none d-lg-block d-xl-block" id="nav_pc">
            <ul class="row">
                <li>
                    <a href="#" alt="">Goodies</a>
                </li>
                <li>
                    <a href="manga.php" alt="">Mangas</a>
                </li>
                <li>
                    <a href="index.php" alt="lien vers l'accueil">Accueil</a>
                </li>
                <li>
                    <a href="contact.php" alt="lien vers formulaire de contact">Contact</a>
                </li>
                
                <!-- Séparateur -->
                <li>|</li>

                <li>
                    <a href="#" alt="lien vers mon compte" class="icon">
                        <i class="fa fa-user"></i>
                        Mon Compte
                    </a>
                </li>
                <li>
                    <a href="#" alt="lien vers mon panier" class="icon">
                        <i class="fa fa-shopping-cart"></i>
                        Mon Panier
                    </a>
                </li>
            </ul>   
        </nav>

        <!--MENU CACHE POUR MOBILE-->
        <nav class="navbar navbar-dark d-lg-none d-xl-none justify-content-center" id="nav-tel">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        
        <nav class="col-12 d-lg-none d-xl-none collapse align-self-end"  id="navbarToggleExternalContent">
            <hr>
            <ul class="row justify-content-center">
                <li class="col-12">
                    <a href="#">Goodies</a>
                </li>
                <hr class="hr_menu">
                <li class="col-12">
                    <a href="manga.php">Mangas</a>
                </li>
                <hr class="hr_menu">
                <li class="col-12">
                    <a href="index.php" alt="lien vers l'accueil">Accueil</a>
                </li>
                <hr class="hr_menu">
                <li class="col-12">
                    <a href="contact.php" alt="lien vers formulaire de contact">Contact</a>
                </li>
                <hr class="hr_menu">
                <li class="col-12">
                    <a href="#">Mon Compte</a>
                </li>
                <hr class="hr_menu">
                <li class="col-md-12 d-lg-none d-xl-none">
                    <a href="#">Mon Panier</a>
                </li>
            </ul>
        </nav>

        
        
    </div>
</header>