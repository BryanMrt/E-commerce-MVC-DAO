<?php

   include 'header.php';
   require 'models/produit.php';
   require 'models/produitDAO.php';
   
	$produitDAO= new ProduitDAO;
//suprimer

   if(isset($_GET['del'])){
   	$panier->supprimerArticle($_GET['del']);
   	
   }
    
//Modifer panier

if(isset($_POST['update'])){

	$nombre_articles=count($_SESSION['panier']['idProduit']);
	
	for($i = 0; $i < $nombre_articles; $i++)
	{
		$id=$_POST['id_'.$i]; //$_POST['id_0'] .... $_POST['id_1']...
		$qte=$_POST['qte_'.$i];
		$panier->modifierQte($id,$qte);
	}
   }
   
$produits=$produitDAO->GetAll();


//template
$template="panier";
include "www/layout.phtml";



?>