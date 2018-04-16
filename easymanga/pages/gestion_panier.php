<?php 
    session_start();

    $id = $_GET['id'];

    unset($_SESSION['panier'][$id]);
    $_SESSION['panier'] = array_values($_SESSION['panier']);

    echo var_dump($_SESSION['panier'])
?>