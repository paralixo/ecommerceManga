<!DOCTYPE html>
<html>
    <head>        
        <title>easymanga</title>
        <meta charset="utf-8" />
        
        <!-- Pour Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        
        <!-- Google font et Feuille de style -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu|Poiret+One|Quicksand" rel="stylesheet">
        <link rel="stylesheet" href="../style/produit.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          
    </head>
    <body>

        <?php include 'header.php' ; ?>
               
        <?php
        
        $id = $_GET['id'];
        
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
            
        
        // trouver l'auteur
            $test_manga = $bdd->prepare("SELECT id_auteur FROM manga");
            $test_manga->execute();
            $auteur_id = array();
            $i = 0;
            while ($donnees = $test_manga->fetch() ) {
                    $auteur_id[$i] = $donnees[0];
                    $i++;
            }
            $test_manga->closeCursor();
        
            $auteur = $auteur_id[$id];
        
            $test_manga = $bdd->prepare("SELECT firstname_auteur FROM auteur WHERE id_auteur = $auteur");
            $test_manga->execute();
            $auteur_name = $test_manga->fetch();
            $test_manga->closeCursor();
        
            $test_manga = $bdd->prepare("SELECT lastname_auteur FROM auteur WHERE id_auteur = $auteur");
            $test_manga->execute();
            $auteur_lastname = $test_manga->fetch();
            $test_manga->closeCursor();
        
        //trouver l'éditeur
            $test_manga = $bdd->prepare("SELECT id_editeur FROM manga");
            $test_manga->execute();
            $editeur_id = array();
            $i = 0;
            while ($donnees = $test_manga->fetch() ) {
                    $editeur_id[$i] = $donnees[0];
                    $i++;
            }
            $test_manga->closeCursor();
        
            $editeur = $editeur_id[$id];
        
            $test_manga = $bdd->prepare("SELECT editeur FROM editeur WHERE id_editeur = $editeur");
            $test_manga->execute();
            $editeur_name = $test_manga->fetch();
            $test_manga->closeCursor();
        
        //trouve tomes
            $test_manga = $bdd->prepare("SELECT id_tome FROM manga");
            $test_manga->execute();
            $tome_id = array();
            $i = 0;
            while ($donnees = $test_manga->fetch() ) {
                    $tome_id[$i] = $donnees[0];
                    $i++;
            }
            $test_manga->closeCursor();
        
            $tome = $tome_id[$id];
        
            $test_manga = $bdd->prepare("SELECT num_tome FROM tome WHERE id_tome = $tome");
            $test_manga->execute();
            $num_tome = $test_manga->fetch();
            $test_manga->closeCursor();
        
            
        ?>
        
        <div class="container-fluid">
            
            <div class="row">

                <h2 class="col-12">
                    <?php
                        echo strtoupper($name_manga[$id]);
                    ?>            
                </h2>

                <div id="description" class="row">
                    <img class="col-4" src=<?php echo $manga_img[$id] ?> />
                    <div class="col-8">
                        <ul>
                            <?php echo '<li>Auteur : '.$auteur_name[0].' '.$auteur_lastname[0].'</li>' ?>
                            <?php echo '<li>Editeur : '.$editeur_name[0].'</li>' ?>
                            <?php echo '<li>Nombre de tomes : '.$num_tome[0].'</li>' ?>
                        </ul>

                        <p>RESUME - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam scelerisque, nulla id luctus scelerisque, tortor ipsum posuere erat, id gravida ante mi ac sapien. Duis ut nisi urna. Nam eu nunc at purus efficitur feugiat vitae quis enim. Maecenas ut ipsum ut tellus pulvinar dictum at et ante. Mauris tincidunt velit laoreet commodo malesuada. Etiam vel odio non nisl pulvinar sagittis. Cras scelerisque, ipsum nec bibendum pulvinar, magna lectus commodo lorem, sit amet iaculis nibh ligula nec dui. Mauris turpis nulla, molestie pharetra elementum a, mattis eget massa. Phasellus sollicitudin orci in lacus porttitor lobortis quis eu turpis. In condimentum ullamcorper velit vitae congue. Vivamus sed accumsan lorem. Nunc eleifend diam sem, eleifend tempor ante tincidunt quis. Donec lobortis sagittis purus eu feugiat. Cras placerat ornare viverra. </p>

                    </div>
                </div>
                
            </div>
                
            <hr/>
            
            <div class="row">
            
            
            </div>
            
        </div>
        
        
        
        
        
        <?php include 'footer.php' ; ?>
        
        <!-- Pour Bootstrap ne pas bouger -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>


