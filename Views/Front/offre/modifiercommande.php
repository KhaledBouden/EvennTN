<?php

   // include '../model/commande.php';
    include 'C://xampp/htdocs/validation/Controller/commandeC.php';

    $error = "";

    // create commande
    $commande = null;

    // create an instance of the controller
    $commandeC = new commandeC();

    if (
		isset($_POST["id_commande"]) &&		
        isset($_POST["id_offre"]) &&
        isset($_POST["date_commande"])&& 
		isset($_POST["prix_commande"]) 
        
    ) {
        if (
            !empty($_GET["id_commande"]) && 
			!empty($_POST['id_offre']) &&
            !empty($_POST["date_commande"]) && 
			!empty($_POST["prix_commande"]) 
        ) {
            $commande = new commande(
                $_GET['id_commande'],
				$_POST['id_offre'],
                $_POST['date_commande'],
				$_POST['prix_commande']

                
            );
            $commandeC->modifiercommande($commande,$_GET["id_commande"]);
           // header('Location:../front office/service.php');
           
        }
        else
            $error = "Missing information";
            
    }



    


    

 
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wid_commandeth=device-wid_commandeth, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<?php
			if (isset($_GET['id_commande'])) 
				$commande = $commandeC->recuperercommande($_GET['id_commande']);
				
?>

<body>
<div class="d-flex flex-row">
    <form action="" method="POST">
                <div class="p-2">
                     <label for="id_commande_commande">id commande</label>
                     <input class="form-control" value="<?php echo($commande["id_commande"]) ?>" name="id_commande" id="id_commande" >
                </div>
                 <div class="p-2">
                     <label for="date">id offre</label>
                     <input class="form-control"type="number" value="<?php echo($commande["id_offre"]) ?>" name="id_offre" id="id_offre" >
                </div>
                 <div class="p-2">
                     <label for="prix_commande">prix_commande</label>
                     <input class="form-control" type="number" value="<?php echo($commande["prix_commande"]) ?>" name="prix_commande" id="prix_commande"></div>
                 <div class="p-2">
                     <label for="dateExp">date expritation</label>
                     <input class="form-control" type="date" value="<?php echo($commande["date_commande"]) ?>" name="date_commande" id="date_commande">
                </div>
             <button type="submit" class="btn btn-primary">modifier</button>
             <a type="button" class="btn btn-dark" href="affichercommande.php">retour</a>
    </form>
</div>
    </div>

</body>
</html>