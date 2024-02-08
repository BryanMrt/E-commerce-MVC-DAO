<?php
//class metier:

class Produit{

	private $id;
	private $titre;
	private $prix;
	private $id_Categorie;
	private $stock;
	private $image;


	public function __construct($id,$titre,$prix,$id_Categorie,$stock,$image){
		$this->id=$id;
		$this->titre=$titre;
		$this->prix=$prix;
		$this->id_Categorie=$id_Categorie;
		$this->stock=$stock;
		$this->image=$image;

	}
	public function getId(){
	    return $this->id;
	}
	public function getTitre(){
	    return $this->titre;
	}
	public function setTitre($titre){
	    $this->titre=$titre;
	}
	public function getprix(){
	    return $this->prix;
	}
	public function setprix($prix){
	    $this->prix=$prix;
	}
	public function getid_Categorie(){
	    return $this->id_Categorie;
	}
	public function setid_Categorie($id_Categorie){
	    $this->id_Categorie=$id_Categorie;
	}
	public function getstock(){
	    return $this->stock;
	}
	public function setstock($stock){
	    $this->stock=$stock;
	}
	public function getimage(){
	    return $this->image;
	}
	public function setimage($image){
	    $this->image=$image;
	}

}


?>