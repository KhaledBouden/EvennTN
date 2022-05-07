<?php
include 'C:\xampp\htdocs\Produit_backend\cmdController.php';
require_once 'C:\xampp\htdocs\Produit_backend\cmd.php';
$cmdC=new cmdC();
$cmdC->supprimercmd($_GET["id"]);
echo '<script type="text/javascript">alert("Hello! I am an alert box!!");</script>';
header('Location:tables-cmd.php');


?>
