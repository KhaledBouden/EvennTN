<?php


require_once 'C:\xampp\htdocs\validation\Model\cmd.php';
include 'C:\xampp\htdocs\validation\Controller\cmdController.php';



$cmdC=new cmdC();
$cmdC->supprimercmd($_GET["id"]);
echo '<script type="text/javascript">alert("Hello! I am an alert box!!");</script>';
header('Location:tables-cmd.php');


?>
