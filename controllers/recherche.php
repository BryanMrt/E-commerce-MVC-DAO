<?php

include 'header.php';
include 'models/produitDAO.php';


$produit=new ProduitDAO;

//recherche
if(isset($_GET['motcle'])){

    $motcle=$_GET['motcle'];
    $produits=$produit->Recherch($motcle);

}

//template
$template="recherche";
include "www/layout.phtml";
?>