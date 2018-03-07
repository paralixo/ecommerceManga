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

    $xmin = $_GET['xmin'];
    $xmax = $xmin + $nb_manga_page;


        // ce qui va etre ecrit 

    for ($i = $xmin; $i < $xmax && $i < count($name_manga); $i++) { ?>
        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2">
            <div class="unManga">
                <img src=<?php echo $manga_img[$i] ?> alt=<?php echo $name_manga[$i] ?> class=""/>
                <p><?php echo $name_manga[$i] ?> <span class="prix"><?php echo $prix_manga[$i] ?>€</span></p>
            </div>
        </div>

    <?php } ?>