<?php
   class CategorieDAO{

   	public function GetAll(){
   		$query= Database :: connect()->prepare("SELECT * FROM categorie");
   		$query->execute();
   		$categories=$query->fetchAll();
   		return $categories;
   	}
      public function GetAllById($id){
         $query= Database :: connect()->prepare("SELECT * FROM categorie where id=?");
         $query->execute([$id]);
         $categories=$query->fetchAll();
         return $categories;
      }
      public function insert(Categorie $categorie){
         $query= Database :: connect()->prepare("INSERT INTO categorie(titre) VALUES (?)");
         //on utilise getTitre pour acceder a la propriete titre qui est proteger grace au private
         $query->execute([$categorie->getTitre()]);
      }
      public function delete(int $id){
         $query= Database :: connect()->prepare("DELETE FROM categorie where id=?");
         $query->execute([$id]);
      }
      public function Update(Categorie $categorie){
         $query= Database :: connect()->prepare(" UPDATE  categorie SET titre=? where id=?");
         $query->execute([$categorie->getTitre(),$categorie->getId()]);
      }
   }

?>