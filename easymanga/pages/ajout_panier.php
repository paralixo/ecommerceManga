<?php
session_start();
echo var_dump($_SESSION['panier']);
echo ' ------------------------------------------------------ ';
array_push($_SESSION['panier'], array($_GET['id'], $_GET['tome'], $_GET['prix'] ));
echo var_dump($_SESSION['panier']);
?>