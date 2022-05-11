<?php
    include "../../Controller/UserC.php";

    $userC = new userC();

    if (isset($_POST['id'])) 
    {
        $userC->supprimerUser($_POST['id']);
        header('location: afficherAdmins.php');
    }
    else
    {
        echo 'Erreur : try again';
        echo $_POST['id'];
    }
?>