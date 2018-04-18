<!DOCTYPE html>
<html>
    <head>        
        <title>easymanga</title>
        <meta charset="utf-8" />
        
        <!-- Pour Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        
        <!-- Google font et Feuille de style -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu|Poiret+One|Quicksand" rel="stylesheet">
        <link rel="stylesheet" href="../style/style.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          
    </head>
    <body>
        
        <?php include 'header.php'; ?>


        <div id="selection">
<!--            <img id="fond_selection" src="../images/dragonsbaballes.png" alt="fond" style="border: 1px solid black;" />-->
                
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 img-fluid" src="http://lorempicsum.com/futurama/1920/825/4" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="http://lorempicsum.com/simpsons/1920/825/4" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="http://lorempicsum.com/nemo/1920/825/4" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
        </div>
                   
        
        
        <div id="sorties" class="container-fluid">
            <h2>Les dernières sorties</h2>

            <div id="selectionSorties" class="row justify-content-center align-items-center">
                <i class="material-icons" id="prev">keyboard_arrow_left</i>
<!--                affiché par défaut-->
                <div>
                    <div class="bloc_sorties">
                        <img src="../images/mha4.jpg" alt="image couverture tome 4O naruto" class="img-fluid" />
                        <h3>Titre</h3>
                    </div>
                    <div class="bloc_sorties d-none d-sm-block">
                        <img src="../images/mha6.jpg" alt="image couverture tome 4O naruto" class="img-fluid" />
                        <h3>Titre</h3>
                    </div>
                    <div class="bloc_sorties d-none d-md-block">
                        <img src="../images/naruto-tome-40.jpg" alt="image couverture tome 4O naruto" class="img-fluid" />
                        <h3>Titre</h3>
                    </div>
                    <div class="bloc_sorties d-none d-lg-block">
                        <img src="../images/mha9.jpg" alt="image couverture tome 4O naruto" class="img-fluid" />
                        <h3>Titre</h3>
                    </div>
                </div>
                <i class="material-icons" id="next">keyboard_arrow_right</i>   
            </div>

            <a href="manga.php" alt="découvrez tout nos mangas" class="btn-2">Découvrez tout nos mangas</a>
        </div>
        
        
        <script>
            var index_page = 0;
            
            
            var req = function(index) {
                if (window.XMLHttpRequest) {
                    httpRequest = new XMLHttpRequest();
                    if (httpRequest.overrideMimeType) {
                        httpRequest.overrideMimeType('text/xml');
                    }
                }

                httpRequest.onreadystatechange = function() {
                    if (httpRequest.readyState === 4) {
                        var zoneDernieresSorties = document.getElementById('selectionSorties').getElementsByTagName("div")[0];
                        zoneDernieresSorties.innerHTML = httpRequest.responseText;
                    }
                }

                httpRequest.open('GET', 'recherche_dernier_manga.php?xmin='+index, true);
                httpRequest.send();
            }
            
            
            var next = document.getElementById('next');
            next.addEventListener('click', function() {
                    index_page += 1;
                    req(index_page);
            })
            
            var next = document.getElementById('prev');
            next.addEventListener('click', function() {
                if (index_page != 0) {
                    index_page -= 1;      
                    req(index_page);
                }
            })
            

            req(index_page);
        </script>
        
        
        
        <div id="derives" class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="bloc_derives col-7 col-md-3 col-lg-3">
                    <img src="" alt="figurine" class="img-fluid" />
                    <h3>Figurines</h3>
                </div>
                <div class="bloc_derives col-7 col-md-3 col-lg-3">
                    <img src="" alt="Posters" class="img-fluid" />
                    <h3>Autres</h3>
                </div>
                <div class="bloc_derives col-7 col-md-3 col-lg-3">
                    <img src="" alt="T-Shirts" class="img-fluid" />
                    <h3>Vêtements</h3>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="bloc_derives col-7 col-md-3 col-lg-3">
                    <img src="" alt="figurine" class="img-fluid" />
                    <h3>Porte-clés</h3>
                </div>
                <div id="msgDerives" class="bloc_derives col-7 col-md-3 col-lg-3 d-none d-md-block">
                    <h2>Tout les produits dérivés de vos mangas préférés</h2>
                    <a href="#" alt="découvrez tout nos mangas" class="btn-2">Découvrir</a>
                </div>
                <div class="bloc_derives col-7 col-md-3 col-lg-3">
                    <img src="" alt="T-Shirts" class="img-fluid" />
                    <h3>Posters</h3>
                </div>
            </div>
            <div class="d-md-none">
                <h2>Tout les produits dérivés de vos mangas préférés</h2>
                <a href="#" alt="découvrez tout nos mangas" class="btn-2">Découvrir</a>
            </div>
        </div>
        
        
        <?php include 'footer.php'; ?>


        
        <!-- Pour Bootstrap ne pas bouger -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>


