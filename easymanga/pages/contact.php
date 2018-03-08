<!DOCTYPE html>
<html>
    <head>        
        <title>EasyManga</title>
        <meta charset="utf-8" />
        <link href="https://fonts.googleapis.com/css?family=Ubuntu|Poiret+One|Quicksand" rel="stylesheet">
        <link rel="stylesheet" href="../style/style.css">
    </head>
    <body>
        <?php include 'header.php'; ?>

        <form>
            <input type="text" name="nom" placeholder="Votre nom"/>
            <input type="text" name="prenom" placeholder="Votre prenom"/>

            <input type="email" name="email" placeholder="Votre email"/>
            <input type="text" name="numero_tel" placeholder="Votre numéro de téléphone"/>
            
            <textarea></textarea>
        </form>

        <?php include 'footer.php'; ?>
    </body>
</html>