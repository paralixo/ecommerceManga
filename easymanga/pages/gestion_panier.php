<?php 
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=easymanga;charset=utf8', 'root', '');
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    $test_manga = $bdd->prepare("SELECT name_manga FROM manga");
    $test_manga->execute();
    $name_manga = array();
    $i = 0;
    while ($donnees = $test_manga->fetch() ) {
            $name_manga[$i] = $donnees[0];
            $i++;
    }
    $test_manga->closeCursor();

    $type = $_GET['type'];


        // ce qui va etre ecrit 
    if ($type=="panier") {
        echo '<ul>';
        for ($i = 0; $i < count($_SESSION['panier']); $i++) {
            echo '<li>'.$name_manga[$_SESSION['panier'][$i][0]].' : tome '.$_SESSION['panier'][$i][1].' | '.$_SESSION['panier'][$i][2].'€ <button><i class="fa fa-trash-o"></i></button></li>';
        }
        echo '</ul>';
    } else if ($type=="infos") {
        echo '<span>'.count($_SESSION['panier']).' article(s)<br/>Total : <?php echo $prix_total; ?>€<br/></span>'
    } else {echo "erreur";}

?>