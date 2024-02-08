<?php

include 'header.php';
include 'models/produit.php';
include 'models/produitDAO.php';

$produitDAO= new ProduitDAO;
$produits=$produitDAO->GetAll();



//definir la template:
$template='index';
include 'www/layout.phtml';
?>