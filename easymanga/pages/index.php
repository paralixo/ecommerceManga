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
        
        <?php include 'header.php' ; ?>
        <a href="signup.html">Signup</a>
        <a href="signin.html">Signin</a>
        
        <div id="selection">
<!--            <img id="fond_selection" src="../images/dragonsbaballes.png" alt="fond" style="border: 1px solid black;" />-->
            <div>
                <h2>Notre sélection</h2>
                <p>Petit layus</p>
                <a href="#" alt="découvrir">Découvrir</a>
            </div>
        </div>
                   
        
        
        <div id="sorties" class="container-fluid">
            <h2>Les dernières sorties</h2>

            <div id="selectionSorties" class="row justify-content-center align-items-center">
                <i class="material-icons">keyboard_arrow_left</i>

                <div class="bloc_sorties">
                    <img src="../images/naruto-tome-40.jpg" alt="image couverture tome 4O naruto" class="img-fluid" />
                    <h3>Naruto 40</h3>
                </div>
                <div class="bloc_sorties d-none d-sm-block">
                    <img src="../images/naruto-tome-40.jpg" alt="image couverture tome 4O naruto" class="img-fluid" />
                    <h3>Naruto 40</h3>
                </div>
                <div class="bloc_sorties d-none d-md-block">
                    <img src="../images/naruto-tome-40.jpg" alt="image couverture tome 4O naruto" class="img-fluid" />
                    <h3>Naruto 40</h3>
                </div>
                <div class="bloc_sorties d-none d-lg-block">
                    <img src="../images/naruto-tome-40.jpg" alt="image couverture tome 4O naruto" class="img-fluid" />
                    <h3>Naruto 40</h3>
                </div>

                <i class="material-icons">keyboard_arrow_right</i>
            </div>

            <a href="#" alt="découvrez tout nos mangas" class="btn-2">Découvrez tout nos mangas</a>
        </div>
        
        
        
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
        
        
        <?php include 'footer.php' ; ?>


        
        <!-- Pour Bootstrap ne pas bouger -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>


























<!--
         positionnement du script a changer 
        <script>
            $(document).ready(function(){
              var scrollTop = 0;
              $(window).scroll(function(){
                scrollTop = $(window).scrollTop();
                 $('.counter').html(scrollTop);

                if (scrollTop >= 100) {
                  $('header').css('opacity', '0.8');
                } else if (scrollTop < 100) {
                  $('header').css('opacity', '1');
                } 

              }); 

            });
        </script>
-->
