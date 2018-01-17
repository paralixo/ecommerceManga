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
        
        <?php include 'header.php' ; ?>
        
        
        <div id="manga_recherche" class="row container-fluid">
            <div id="recherche" class="col-2">
                <form>
                    <h2>Filtres</h2>
                    
                    <fieldset>
                        <legend>Critère 1</legend>
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
                        <legend>Critère 2</legend>
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
                        
                </form>
            </div>
            
            <div id="mangas" class="col-10 row">
                <div class="align-self-center col-xs-12 col-sm-6 col-lg-2">
                    <div class="unManga">
                    <img src="../images/mha.jpg" alt="mha" class="img-fluid"/>
                    <p>Titre <span class="prix">8.00€</span></p>
                </div>
                </div>
                <div class="align-self-center col-xs-12 col-sm-6 col-lg-2">
                    <div class="unManga">
                        <img src="../images/mha.jpg" alt="mha" class="img-fluid"/>
                        <p>Titre <span class="prix">8.00€</span></p>
                    </div>
                </div>
                <div class="align-self-center col-xs-12 col-sm-6 col-lg-2">
                    <div class="unManga">
                        <img src="../images/mha.jpg" alt="mha" class="img-fluid"/>
                        <p>Titre <span class="prix">8.00€</span></p>
                    </div>
                </div>
                <div class="align-self-center col-xs-12 col-sm-6 col-lg-2">
                    <div class="unManga">
                        <img src="../images/mha.jpg" alt="mha" class="img-fluid"/>
                        <p>Titre <span class="prix">8.00€</span></p>
                    </div>
                </div>
                <div class="align-self-center col-xs-12 col-sm-6 col-lg-2">
                    <div class="unManga">
                        <img src="../images/mha.jpg" alt="mha" class="img-fluid"/>
                        <p>Titre <span class="prix">8.00€</span></p>
                    </div>
                </div>
                <div class="align-self-center col-xs-12 col-sm-6 col-lg-2">
                    <div class="unManga">
                        <img src="../images/mha.jpg" alt="mha" class="img-fluid"/>
                        <p>Titre <span class="prix">8.00€</span></p>
                    </div>
                </div>
                <div class="align-self-center col-xs-12 col-sm-6 col-lg-2">
                    <div class="unManga">
                        <img src="../images/mha.jpg" alt="mha" class="img-fluid"/>
                        <p>Titre <span class="prix">8.00€</span></p>
                    </div>
                </div>
            </div>
        </div>
            

        
        
        <?php include 'footer.php' ; ?>


        
        <!-- Pour Bootstrap ne pas bouger -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>