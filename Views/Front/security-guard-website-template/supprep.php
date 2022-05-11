<?php


include 'C:\xampp\htdocs\validation\Controller\reponsecc.php';
require_once 'C:\xampp\htdocs\validation\Model\reponsee.php';
include_once "C://xampp/htdocs/validation/config.php";
$reponseC=new reponsec();
$reponseC->supprimerreponse($_GET["id"]);
header('Location: ../../Back/affichierrepadmin.php');

 