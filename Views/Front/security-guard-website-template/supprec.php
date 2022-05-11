<?php


include 'C:\xampp\htdocs\validation\Controller\reclamationcc.php';
 require_once 'C:\xampp\htdocs\validation\Model\reclamationn.php';
 include_once "C://xampp/htdocs/validation/config.php";
$reclamationC=new reclamationc();
$reclamationC->supprimerreclamation($_GET["id"]);
header('Location:ajouter.php');

 