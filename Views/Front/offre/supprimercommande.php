<?php
   // include '../../Model/commande.php';
    include 'C://xampp/htdocs/validation/Controller/commandeC.php';
	$commandeC=new commandeC();
			$commandeC->supprimercommande($_GET["id_commande"]);
			header('Location:affichercommande.php');       
?>
<!--
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/web/front office/css/style.css">
    <title>Document</title>
</head>
<body>
<div class="d-flex flex-row">
    <form action="" method="POST">
                 <div class="p-2">
					 <label for="id">ID</label>
                	 <input class="form-control" name="id" id="id">
                </div>
             <button type="danger" class="btn btn-primary">supprimer</button>
    </form>
</div>
    </div>

</body>
</html>
-->