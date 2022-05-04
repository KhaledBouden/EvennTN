<?php
include_once '../Controller/reponsecc.php';
include_once '../model/reponsee.php';
include_once '../config.php';
$reponseC=new reponsec();
$reponseC->supprimerreponse($_GET["id"]);
header('Location:affichierrep.php');

 