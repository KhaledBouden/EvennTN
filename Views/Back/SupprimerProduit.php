<?php
include 'C:\xampp\htdocs\validation\Controller\ProduitController.php';
require_once 'C:\xampp\htdocs\validation\Model\produit.php';
$ProduitC=new ProduitC();
$ProduitC->supprimerProduit($_GET["id"]);

header('Location:tables.php');
?>
