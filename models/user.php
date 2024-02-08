<?php
class User{
	private $id;
	private $Nom;
	private $Email;
	private $MotdePasse;

	public function __construct($id,$Nom,$Email,$MotdePasse){
		$this->id=$id;
		$this->Nom=$Nom;
		$this->Email=$Email;
		$this->MotdePasse=$MotdePasse;
	}
	

	public function getId(){
		return $this->id;
	}

	public function getNom(){
		return $this->Nom;
	}
	
	public function setNom($Nom){
		$this->Nom=$Nom;
	}

	public function getEmail(){
		return $this->Email;
	}
	public function setEmail($Email){
		$this->Email=$Email;
	}

	public function getMotdePasse(){
		return $this->MotdePasse;
	}
	public function setMotdePasse($MotdePasse){
		$this->MotdePasse=$MotdePasse;
	}
	
	
}
?>