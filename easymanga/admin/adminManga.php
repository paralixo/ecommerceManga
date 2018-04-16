<!DOCTYPE html>
<html>
<head>
    <title>EasyManga - admin</title>
    <meta charset="utf-8"/>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu|Poiret+One|Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Easymanga Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="adminManga.php">Mangas</a></li>
                <li class="nav-item nav-link" id="pipe">|</li>
                <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
            </ul>
        </div>
    </nav>
</header>
<main class="main">
    <!--    ajouter / supprimer un auteur -->
    <div class="row">
        <div class="col-6 col-md-6">
            <nav>
                <div class="nav nav-tabs" id="nav-tab-auteur" role="tablist">
                    <a class="nav-item nav-link active" id="nav-auteurAjout-tab" data-toggle="tab" href="#auteurAjout"
                       role="tab"
                       aria-controls="nav-auteurAjout" aria-selected="true">ajouter</a>
                    <a class="nav-item nav-link" id="nav-auteurSuppr-tab" data-toggle="tab" href="#auteurSuppr"
                       role="tab"
                       aria-controls="nav-auteurSuppr" aria-selected="false">modifier</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent-auteur">
                <div class="tab-pane fade show active formLeft" id="auteurAjout" role="tabpanel"
                     aria-labelledby="auteurAjout-tab">
                    <!--    ajouter un auteur -->
                    <form action="cible-admin.php" method="post">
                        <label>
                            Nom de l'auteur :
                            <input type="text" name="lastname" required>
                        </label>
                        <label>
                            Prénom de l'auteur :
                            <input type="text" name="firstname" required>
                        </label>
                    </form>
                </div>
                <div class="tab-pane fade" id="auteurSuppr" role="tabpanel" aria-labelledby="auteurSuppr-tab">
                    <!--    supprimer un auteur -->
                    <form action="cible-admin.php" method="post">

                    </form>
                </div>
            </div>
            <nav>
                <div class="nav nav-tabs" id="nav-tab-editeur" role="tablist">
                    <a class="nav-item nav-link active" id="nav-editeurAjout-tab" data-toggle="tab" href="#editeurAjout"
                       role="tab"
                       aria-controls="nav-editeurAjout" aria-selected="true">ajouter</a>
                    <a class="nav-item nav-link" id="nav-editeurSuppr-tab" data-toggle="tab" href="#editeurSuppr"
                       role="tab"
                       aria-controls="nav-editeurSuppr" aria-selected="false">modifier</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent-editeur">
                <div class="tab-pane fade show active formLeft" id="editeurAjout" role="tabpanel"
                     aria-labelledby="editeurAjout-tab">
                    <!--    ajouter un editeur -->
                    <form action="cible-admin.php" method="post">
                        <label>
                            Nom de l'editeur :
                            <input type="text" name="editeur" required>
                        </label>
                    </form>
                </div>
                <div class="tab-pane fade" id="editeurSuppr" role="tabpanel" aria-labelledby="editeurSuppr-tab">
                    <!--    supprimer un editeur -->
                    <form action="cible-admin.php" method="post">

                    </form>
                </div>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-auteurAjout-tab" data-toggle="tab"
                           href="#auteurAjout"
                           role="tab"
                           aria-controls="nav-auteurAjout" aria-selected="true">ajouter</a>
                        <a class="nav-item nav-link" id="nav-auteurSuppr-tab" data-toggle="tab" href="#auteurSuppr"
                           role="tab"
                           aria-controls="nav-auteurSuppr" aria-selected="false">modifier</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active formLeft" id="auteurAjout" role="tabpanel"
                         aria-labelledby="auteurAjout-tab">
                        <!--    ajouter un genre -->
                        <form action="cible-admin.php" method="post">
                            <label>
                                Nom de l'auteur :
                                <input type="text" name="lastname" required>
                            </label>
                            <label>
                                Prénom de l'auteur :
                                <input type="text" name="firstname" required>
                            </label>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="auteurSuppr" role="tabpanel" aria-labelledby="auteurSuppr-tab">
                        <!--    supprimer un genre -->
                        <form action="cible-admin.php" method="post">

                        </form>
                    </div>
                </div>
                <!--    ajouter un manga -->
                <form action="cible-admin.php" method="post">

                </form>
                <!--    supprimer un manga -->
            </div>
</main>


<!-- script pour bootstrap 4 -->
<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"-->
<!--        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"-->
<!--        crossorigin="anonymous"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="admin.js" type="text/js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>

</body>
</html>