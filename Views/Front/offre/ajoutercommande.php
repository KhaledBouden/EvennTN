<?php
   // include '../../Model/commande.php';
    include 'C://xampp/htdocs/validation/Controller/commandeC.php';

    $error = "";

    // create commande
    $commande = null;


    // create an instance of the controller
    $commandeC = new commandeC();
    if (
        isset($_POST["id_commande"]) &&
		isset($_POST["id_offre"]) &&		
        isset($_POST["date"]) &&
		isset($_POST["prix"]) 
    ){
        if (
            !empty($_POST["id_commande"]) && 
			!empty($_POST['id_offre']) &&
            !empty($_POST["date"])&& 
			!empty($_POST["prix"]) 
    
        ) {
            $commande = new commande(
                $_POST['id_commande'],
				$_POST['id_offre'],
                $_POST['date'], 
				$_POST['prix']

            );
            $commandeC->ajoutercommande($commande);
            header('Location:affichercommande.php');
         
        }
        else
            $error = "Missing information";
    }

    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wid_commandeth=device-wid_commandeth, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="d-flex flex-row">
    <form action="" method="POST">
                 <div class="p-2"><label for="id_commande">id_commande</label>
                 <input class="form-control" name="id_commande">
                </div>
                 <div class="p-2"><label for="id_offre">id_offre</label>
                 <input class="form-control" name="id_offre" id="id_offre"></div>
                 <div class="p-2"><label for="date">date </label>
                 <input class="form-control" name="date" type="date" id="date" ></div>
                 <div class="p-2"><label for="prix">prix</label>
                 <input class="form-control" name="prix" id="prix" type="number"></div>
             <button type="submit" class="btn btn-primary">envoyer</button>
    </form>
</div>
    </div>

</body>
</html>