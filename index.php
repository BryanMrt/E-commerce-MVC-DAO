<?php

// array_key_exists :Vérifie si la clé ou l'index donné existe dans le tableau
if(array_key_exists("action",$_GET)){
    
    switch($_GET['action']){ 
        case "categorie" :
            include 'controllers/categorie.php';
            break; 
        case "produit" :
            include 'controllers/produit.php';
            break; 
        case "connexion_inscription" :
            include 'controllers/login.php';
            break; 
        case "recherche" :
            include 'controllers/recherche.php';
            break; 
        case "panier" :
            include 'controllers/panier.php';
            break; 
        case "deconnexion" :
            include 'controllers/deconnexion.php';
            break; 
    }          

}else {
    include 'controllers/index.php';
}

?>