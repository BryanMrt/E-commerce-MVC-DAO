<?php
 class UserDAO{
 	public function add(User $user){
 		$query=Database ::connect()->prepare("INSERT INTO user (Nom,Email,MotdePasse)  VALUES(?,?,?)");
 		$query->execute([$user->getNom(),$user->getEmail(),$user->getMotdePasse()]);

 	}
    public function connexion($email,$motdepasse){
		$query= Database :: connect()->prepare("SELECT * FROM user where Email=?");
		$query->execute([$email]);
		$obj=$query->fetch();

		if(isset($obj['id'])){
			if(password_verify($motdepasse, $obj['MotdePasse'])){
				$user=new User($obj['id'],$obj['Nom'],$obj['Email'],$obj['MotdePasse']);
				return $user;
			}else{
				return null;
			}
		}else{
			return null;
		}
	}
 }

?>														