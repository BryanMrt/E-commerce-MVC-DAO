<?php

// cat*

include 'header.php';
require 'models/produitDAO.php';


$id=$_GET['id'];
$produitDAO= new ProduitDAO;

//afficher un Produit
$article=$produitDAO->ShowProduit($id);

//produits similaires
$produit=$produitDAO->ProduitsSimilaires($article["id_categorie"]);


$images=$produitDAO->ShowImage($_GET["id"]);

//ajouter au panier 
if(isset($_POST['add'])){
    $id=$_GET['id'];
    $qte=$_POST['qte'];
    $panier->ajouterArticle($id,$article['titre'],$qte,$article['prix'],$article['image']);
}



// template
$template="produit";
include 'www/layout.phtml';
?>