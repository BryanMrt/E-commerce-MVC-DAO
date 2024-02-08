
<?php
include 'header.php';
include 'models/produitDAO.php';

$produitbycat=new ProduitDAO();
$produits=$produitbycat->ShowProduit_Cat($_GET['id']);


$template="categorie";
include 'www/layout.phtml';

?>