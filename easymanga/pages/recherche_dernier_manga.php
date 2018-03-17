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

    $test_manga = $bdd->prepare("SELECT id_tome FROM manga");
    $test_manga->execute();
    $id_tome = array();
    $i = 0;
    while ($donnees = $test_manga->fetch() ) {
            $id_tome[$i] = $donnees[0];
            $i++;
    }
    $test_manga->closeCursor();

    $test_manga = $bdd->prepare("SELECT date_tome FROM tome ORDER BY timestamp");
    $test_manga->execute();
    $manga_date = array();
    $i = 0;
    while ($donnees = $test_manga->fetch() ) {
            $manga_date[$i] = $donnees[0];
            $i++;
    }
    $test_manga->closeCursor();


    $nb_manga_page = 4;

    $xmin = $_GET['xmin'];
    $xmax = $xmin + $nb_manga_page;


        // ce qui va etre ecrit 
    for ($i = 0; $i < count($manga_date); $i++) { ?>
        <div><?php echo $manga_date[$i];  ?> </div> 
    <?php } ?>

    for ($i = $xmin; $i < $xmax; $i++) { ?>
        <div class="bloc_sorties d-none d-lg-block">
            <img src="<?php echo $manga_img[$i] ?>" alt="<?php echo $name_manga[$i] ?>" class="img-fluid" />
            <h3><?php echo $name_manga[$i] ?></h3>
        </div>

    <?php } ?>
        
        ?>