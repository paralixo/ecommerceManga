<?php
    // On se déconnecte de la session actuelle
    session_start();
    session_destroy();

    // Suppression des cookies de connexion automatique
    setcookie('login', '');
    setcookie('pass_hache', '');

    // On retourne à la page précédente
    header ("Location: $_SERVER[HTTP_REFERER]" );
?>