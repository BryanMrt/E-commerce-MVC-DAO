<?php
//création du panier
$panier=new Panier;
$panier->creationPanier();

class Database {
    
    // proprietes
    public static $bdd;
   
    //creer la fonction qui va retourner la connexion
    public static function connect(){

        try{
            self::$bdd = new PDO('mysql:host=localhost;dbname=smile;charset=utf8',"root","");
        }
        catch(Exeption $erreur){
            die("ERROR connexion a la base de donnée:" .$erreur->getMessage());
        }

        return self::$bdd;
    }
    
}

?>
