<!DOCTYPE html>
<html>
    <head>        
        <title>EasyManga</title>
        <meta charset="utf-8" />
        
        <!-- Pour Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        
        <!-- Google font et Feuille de style -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu|Poiret+One|Quicksand" rel="stylesheet">
        <link rel="stylesheet" href="../style/style.css">
          
    </head>
    <body>
        
        <?php 
            try {
                $bdd = new PDO('mysql:host=localhost;dbname=easymanga;charset=utf8', 'root', '');
            }
            catch(Exception $e) {
                die('Erreur : '.$e->getMessage());
            }


            $test_manga = $bdd->prepare("SELECT src_image FROM image");
            $test_manga->execute();
            $manga_img = array();
            $i = 0;
            while ($donnees = $test_manga->fetch() ) {
                    $manga_img[$i] = $donnees[0];
                    $i++;
            }
            $test_manga->closeCursor();

            $test_manga = $bdd->prepare("SELECT name_manga FROM manga");
            $test_manga->execute();
            $name_manga = array();
            $i = 0;
            while ($donnees = $test_manga->fetch() ) {
                    $name_manga[$i] = $donnees[0];
                    $i++;
            }
            $test_manga->closeCursor();

            $test_manga = $bdd->prepare("SELECT prix_manga FROM manga");
            $test_manga->execute();
            $prix_manga = array();
            $i = 0;
            while ($donnees = $test_manga->fetch() ) {
                    $prix_manga[$i] = $donnees[0];
                    $i++;
            }
            $test_manga->closeCursor();


            $nb_manga_page = 6;
        ?>
        
        <?php include 'header.php'; ?>
        
        
        
        

        <div id="manga_recherche" class="row container-fluid">
            <div id="recherche" class="col-12 col-md-2">
                <form>
                    <h2 class="d-none d-md-block">Filtres</h2>
                    <button class="navbar-toggler d-block d-md-none" type="button" data-toggle="collapse" data-target="#filtres" aria-controls="filtres" aria-expanded="false" aria-label="Toggle navigation">
                            <h2>Filtres</h2>
                            <i class="material-icons align-items-center">keyboard_arrow_right</i>
                    </button>
                    
                    <div class="d-none d-md-block">
                        <fieldset>
                            <legend>Genre</legend>
                            <ul>
                                <li>
                                    <input type="checkbox" name="name" id="name_1" value="" />
                                    <label for="name_1">Action</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="name" id="name_2" value="" />
                                    <label for="name_2">Aventure</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="name" id="name_3" value="" />
                                    <label for="name_3">Comédie</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="name" id="name_4" value="" />
                                    <label for="name_4">Sport</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="name" id="name_4" value="" />
                                    <label for="name_4">SF</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="name" id="name_4" value="" />
                                    <label for="name_4">Horreur</label>
                                </li>
                            </ul>    
                        </fieldset>

                        <fieldset>
                            <legend>Actualité</legend>
                            <ul>
                                <li>
                                    <input type="checkbox" name="name" id="name_1" value="" />
                                    <label for="name_1">En cours</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="name" id="name_2" value="" />
                                    <label for="name_2">Teminé</label>
                                </li>
                            </ul>    
                        </fieldset>

                        <fieldset>
                            <legend>Critère 3</legend>
                            <ul>
                                <li>
                                    <input type="checkbox" name="name" id="name_1" value="" />
                                    <label for="name_1">Option 1</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="name" id="name_2" value="" />
                                    <label for="name_2">Option 2</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="name" id="name_3" value="" />
                                    <label for="name_3">Option 3</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="name" id="name_4" value="" />
                                    <label for="name_4">Option 4</label>
                                </li>
                            </ul>    
                        </fieldset>
                        
                        <fieldset>
                            <legend>Critère 4</legend>
                            <ul>
                                <li>
                                    <input type="checkbox" name="name" id="name_1" value="" />
                                    <label for="name_1">Option 1</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="name" id="name_2" value="" />
                                    <label for="name_2">Option 2</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="name" id="name_3" value="" />
                                    <label for="name_3">Option 3</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="name" id="name_4" value="" />
                                    <label for="name_4">Option 4</label>
                                </li>
                            </ul>    
                        </fieldset>
                    </div>
                    
                    <div class="col-12 d-md-none d-lg-none d-xl-none collapse row justify-content-center" id="filtres">
                        <fieldset class="col-xs-4 col-sm-3">
                            <legend>Genre</legend>
                            <ul>
                                <li>
                                    <input type="checkbox" name="name" id="name_1" value="" />
                                    <label for="name_1">Action</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="name" id="name_2" value="" />
                                    <label for="name_2">Aventure</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="name" id="name_3" value="" />
                                    <label for="name_3">Comédie</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="name" id="name_4" value="" />
                                    <label for="name_4">Sport</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="name" id="name_4" value="" />
                                    <label for="name_4">SF</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="name" id="name_4" value="" />
                                    <label for="name_4">Horreur</label>
                                </li>
                            </ul>    
                        </fieldset>

                        <fieldset class="col-xs-4 col-sm-3">
                            <legend>Actualité</legend>
                            <ul>
                                <li>
                                    <input type="checkbox" name="name" id="name_1" value="" />
                                    <label for="name_1">En cours</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="name" id="name_2" value="" />
                                    <label for="name_2">Teminé</label>
                                </li>
                            </ul>    
                        </fieldset>

                        <fieldset class="col-xs-4 col-sm-3">
                            <legend>Critère 3</legend>
                            <ul>
                                <li>
                                    <input type="checkbox" name="name" id="name_1" value="" />
                                    <label for="name_1">Option 1</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="name" id="name_2" value="" />
                                    <label for="name_2">Option 2</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="name" id="name_3" value="" />
                                    <label for="name_3">Option 3</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="name" id="name_4" value="" />
                                    <label for="name_4">Option 4</label>
                                </li>
                            </ul>    
</fieldset>
                        
                        <fieldset class="col-xs-4 col-sm-3">
                            <legend>Critère 4</legend>
                            <ul>
                                <li>
                                    <input type="checkbox" name="name" id="name_1" value="" />
                                    <label for="name_1">Option 1</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="name" id="name_2" value="" />
                                    <label for="name_2">Option 2</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="name" id="name_3" value="" />
                                    <label for="name_3">Option 3</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="name" id="name_4" value="" />
                                    <label for="name_4">Option 4</label>
                                </li>
                            </ul>    
</fieldset>
                    </div>
                        
                </form>
            </div>
            
            <div id="mangas" class="col-12 col-md-10 row justify-content-center">
                
                <div id="livres" class="col-12 col-md-10 row justify-content-center"></div>
                
                
                <div id="selection_page">
                    <div>
                        <i class="fa fa-angle-left" id='prev'></i>
                        <p><span id="n_page_actuel">1</span> SUR <?php echo ceil(count($name_manga)/$GLOBALS["nb_manga_page"]) ?></p>
                        <i class="fa fa-angle-right" id='next'></i>
                    </div>
                </div>
            </div>
            
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
                        document.getElementById('livres').innerHTML = httpRequest.responseText;
                    }
                };

                httpRequest.open('GET', 'recherche_manga.php?xmin='+index, true);
                httpRequest.send();
            };
            
            
            var next = document.getElementById('next');
            next.addEventListener('click', function() {
                //doit etre la meme valeur dans recherche_manga.php
                var next_contenu = document.getElementById('n_page_actuel');
                if (parseInt(next_contenu.innerHTML) != <?php echo ceil(count($name_manga)/$GLOBALS["nb_manga_page"]) ?>){
                    index_page += 6;
                    var next_contenu = document.getElementById('n_page_actuel');
                    next_contenu.innerHTML = parseInt(next_contenu.innerHTML) + 1;

                    req(index_page);
                }
            });
            
            var next = document.getElementById('prev');
            next.addEventListener('click', function() {
                //doit etre la meme valeur dans recherche_manga.php
                if (index_page != 0) {
                    index_page -= 6;
                    var prev_contenu = document.getElementById('n_page_actuel');
                    prev_contenu.innerHTML = parseInt(prev_contenu.innerHTML) - 1;
                    
                    req(index_page);
                }
            });
            
            // génération par défaut
            req(index_page);
        </script>
        
            

        
        
        <?php include 'footer.php'; ?>


        
        <!-- Pour Bootstrap ne pas bouger -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>