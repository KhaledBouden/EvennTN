<?php
include 'C:\xampp\htdocs\Produit_backend\ProduitController.php';
require_once 'C:\xampp\htdocs\Produit_backend\produit.php';
$ProduitC=new ProduitC();
$ProduitC->supprimerProduit($_GET["id"]);
header('Location:tables.php');
?>
