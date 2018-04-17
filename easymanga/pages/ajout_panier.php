<html>
<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"></head>

<body id="ajout_panier2">
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
            $i = 1;
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

    include 'header.php' ;
    
    array_push($_SESSION['panier'], array($_GET['id'], $_GET['tome'], $_GET['prix'] ));



    echo '<div id="ajout_panier" class="justify-container">
            <div class="row">
                <img class="col-3" src="'.$manga_img[$_GET['id']+1].'" />
                <h2 class="col">'.$name_manga[$_GET['id']].' tome '.$_GET['tome'].' a été correctement ajouté au panier</h2>
            </div>
        </div>';
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>