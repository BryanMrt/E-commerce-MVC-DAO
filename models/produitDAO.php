<?php
//DAO:patron de conception,c’est-à-dire un modèle pour concevoir une solution, utilisé dans les architectures logicielles objet.

    /* Le modèle DAO propose de regrouper les accès aux données persistantes dans des classes à part(classDAO), plutôt que de les disperser. Il s'agit surtout de ne pas écrire ces accès dans les classes "métier== ex:class produit", qui ne seront modifiées que si les règles de gestion métier changent.*/

// il  faut creer un seul DAO pour les 2 parties admin(back) et client(font)

class ProduitDAO{
	//GetById
	public function ShowProduit($id){
		$query= Database :: connect()->prepare("SELECT * FROM produit where id=?");
		$query->execute([$id]);
		$Produits=$query->fetch();
		return $Produits;

	}
	public function ProduitsSimilaires(int $idCat){
		$query= Database :: connect()->prepare("SELECT * FROM produit where id_Categorie=?");
		$query-> execute([$idCat]);
		$ProduitsSml=$query->fetchAll();
		return $ProduitsSml;
	}
	//GetImages
	public function ShowImage( int $id){
		$query= Database :: connect()->prepare("SELECT * FROM images where id_produit=?");
		$query->execute([$id]);
		$Images=$query->fetchAll();
		return $Images;
	}
	//GetAllByCat
	public function ShowProduit_Cat( int $id){
		$query=Database :: connect()->prepare("SELECT * FROM produit where id_Categorie=?");
		$query->execute([$id]);
		$Produitscat=$query->fetchAll();
		return $Produitscat;
    
	}
	public function Recherch(string $motcle){
		$query=Database :: connect()->prepare("SELECT * FROM produit where titre like CONCAT('%',?,'%') ");
		$query->execute([$motcle]);
		$Produits=$query->fetchAll();
		return $Produits;

	}
	public function insert(Produit $produit){
		$query=Database :: connect()->prepare("INSERT INTO produit (titre,prix,id_Categorie,stock,image) VALUES(?,?,?,?,?)");
		$query->execute([$produit->getTitre(),$produit->getPrix(),$produit->getId_Categorie(),$produit->getStock(),$produit->getImage()]);

	}
	//GetAll
	public function GetAll(){
		$query=Database :: connect()->prepare("SELECT * FROM produit  LIMIT 8");
		$query->execute();
		$Produits=$query->fetchAll();
		return $Produits;

	}
	//Delete
	public function Delete(int $id){
		$query= Database :: connect()->prepare("DELETE FROM produit where id=?");
		$query->execute([$id]);

	}
	//Update
	public function Update(Produit $produit){
		$query= Database :: connect()->prepare("UPDATE produit SET titre=?,prix=?,id_Categorie=?,stock=?,image=? where id=?");
		$query->execute([$produit->gettitre(),$produit->getprix(),$produit->getid_Categorie(),$produit->getstock(),$produit->getimage(),$produit->getid()]);
	}
}




?>