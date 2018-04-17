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
    <body id="page_panier">

        <?php include 'header.php' ; ?>
               
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
            
        ?>
        
        <div class="container-fluid" id="panier">
            
            <div class="row">
                <div class="col-12 col-md-9" id="produits">
                    <?php 
                        $prix_total = 0.0;
                        echo '<ul>';
                        for ($i = 0; $i < count($_SESSION['panier']); $i++) {
                            echo '<li>'.$name_manga[$_SESSION['panier'][$i][0]].' : tome '.$_SESSION['panier'][$i][1].' | '.$_SESSION['panier'][$i][2].'€ <button class="trash btn btn-secondary"><i class="fa fa-trash-o"></i>
                                </button></li>';
                            $prix_total += $_SESSION['panier'][$i][2];
                        }
                        echo '</ul>';
                    ?>
                </div>
                <div class="col-12 col-md-3" id="infos"> 
                    <hr class="d-block d-md-none"/>
                    <span><?php echo count($_SESSION['panier']); ?> article(s)<br/>Total : <?php echo $prix_total; ?>€<br/></span>
                    <hr/>
                    <button class="btn btn-primary" onclick="alert('Votre achat a bien été effectué')">Valider votre achat</button>
                </div>
            </div>
                
        </div>
        
        <script>
            
            
            var req = function(id) {
                if (window.XMLHttpRequest) {
                    httpRequest = new XMLHttpRequest();
                    if (httpRequest.overrideMimeType) {
                        httpRequest.overrideMimeType('text/xml');
                    }
                }


                httpRequest.open('GET', 'gestion_panier.php?id='+id, true);
                httpRequest.send();
            }
            
            var next = document.querySelectorAll(".trash");
            console.log(next);
            for (var i = 0; i< next.length; i++) {
                next[i].onclick = function() {
                    console.log(this);
                    this.parentNode.innerHTML='';
                    req(0);
                }
            }

            
            // génération par défaut
            
        </script>
        
        
        
        
        
        <?php include 'footer.php' ; ?>
        
        <!-- Pour Bootstrap ne pas bouger -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>


