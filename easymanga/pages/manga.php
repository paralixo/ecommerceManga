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
            <div id="recherche" class="col-12 col-md-2">
                <form>
                    <h2 class="d-none d-md-block">Filtres</h2>
                    <button class="navbar-toggler d-block d-md-none" type="button" data-toggle="collapse" data-target="#filtres" aria-controls="filtres" aria-expanded="false" aria-label="Toggle navigation">
                            <h2>Filtres</h2>
                            <i class="fa fa-angle-down small" aria-hidden="true"></i>
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
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                    <div class="unManga">
                        <img src="../images/mha1.jpg" alt="mha" class=""/>
                        <p>Titre <span class="prix">8.00€</span></p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                    <div class="unManga">
                        <img src="../images/mha2.jpg" alt="mha" class=""/>
                        <p>Titre <span class="prix">8.00€</span></p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                    <div class="unManga">
                        <img src="../images/mha3.jpg" alt="mha" class=""/>
                        <p>Titre <span class="prix">8.00€</span></p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                    <div class="unManga">
                        <img src="../images/mha4.jpg" alt="mha" class=""/>
                        <p>Titre <span class="prix">8.00€</span></p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                    <div class="unManga">
                        <img src="../images/mha6.jpg" alt="mha" class=""/>
                        <p>Titre <span class="prix">8.00€</span></p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                    <div class="unManga">
                        <img src="../images/mha7.jpg" alt="mha" class=""/>
                        <p>Titre <span class="prix">8.00€</span></p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                    <div class="unManga">
                        <img src="../images/mha.jpg" alt="mha" class=""/>
                        <p>Titre <span class="prix">8.00€</span></p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                    <div class="unManga">
                        <img src="../images/mha9.jpg" alt="mha" class=""/>
                        <p>Titre <span class="prix">8.00€</span></p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                    <div class="unManga">
                        <img src="../images/mha10.jpg" alt="mha" class=""/>
                        <p>Titre <span class="prix">8.00€</span></p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                    <div class="unManga">
                        <img src="../images/op.jpg" alt="mha" class=""/>
                        <p>Titre <span class="prix">8.00€</span></p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                    <div class="unManga">
                        <img src="../images/bleach.jpg" alt="mha" class=""/>
                        <p>Titre <span class="prix">8.00€</span></p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                    <div class="unManga">
                        <img src="../images/naruto.jpg" alt="mha" class=""/>
                        <p>Titre <span class="prix">8.00€</span></p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                    <div class="unManga">
                        <img src="../images/hxh.jpg" alt="mha" class=""/>
                        <p>Titre <span class="prix">8.00€</span></p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                    <div class="unManga">
                        <img src="../images/inuyashiki.jpg" alt="mha" class=""/>
                        <p>Titre <span class="prix">8.00€</span></p>
                    </div>
                </div>
                
                
                <div id="selection_page">
                    <div>
                        <i class="fa fa-angle-left"></i>
                        <p>1 SUR 487</p>
                        <i class="fa fa-angle-right"></i>
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