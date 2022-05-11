<?php
include_once '../../Controller/reclamationcc.php';
include_once '../../model/reclamationn.php';
include_once '../../config.php';
$reclamationC=new reclamationc();
$reclamationC->supprimerreclamation($_GET["id"]);
header('Location:blank.php');

 