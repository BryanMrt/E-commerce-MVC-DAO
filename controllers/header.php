<?php
session_start();

include 'models/panier.php';
include 'models/Database.php';
include 'models/categorieDAO.php';

  //instancier l objet $CategorieDAO a partir de la class DAO categorie 
 $catDAO=new CategorieDAO;
 //récupération des données dans la variable $Cat
 $Cat=$catDAO->GetAll();


// template
 $template1="www/header";
?>