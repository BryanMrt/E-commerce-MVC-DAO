<?php
include 'header.php';
include 'models/userDAO.php';
include 'models/user.php';


$userDAO= new UserDAO();
  //Inscription
  $inscription_ok=0;

if(isset($_POST['inscription'])){
    //recuperation
        //htmlspecialchars:pratique pour eviter que les donnees fournies pas
        //utilisateurs contiennent des balise html
    $nom=htmlspecialchars($_POST['nom']);
    $email=htmlspecialchars($_POST['email']);
    $motdepasse=htmlspecialchars($_POST['motdepasse']);

    $motdepasse_h=password_hash($motdepasse,PASSWORD_DEFAULT);
    //creation de l'objet
    $user=new User(0,$nom,$email,$motdepasse_h);
    //stockage de l'objet
    $userDAO->add($user);
    $inscription_ok=1;
    
}
    //Connexion
$connexion_erreur=0;

if(isset($_POST['connexion'])){
    
    $email=htmlspecialchars($_POST['email']);
    $motdepasse=htmlspecialchars($_POST['motdepasse']);
    $user=$userDAO->connexion($email,$motdepasse);

    if($user==null){
        $connexion_erreur=1;
    }else{
        $_SESSION['login_nom']=$user->getNom();
        $_SESSION['login_id']=$user->getId();
        header("location:index.php");
    }
}

// template
$template="login";
include 'www/layout.phtml';
?>