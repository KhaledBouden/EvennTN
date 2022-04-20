<?php
include 'C:\xampp\htdocs\Produit_backend\ProduitController.php';
require_once 'C:\xampp\htdocs\Produit_backend\produit.php';
    $error = "";

    // create adherent
    $produit = null;

    // create an instance of the controller
    $produitC = new produitC();
    if (
        isset($_POST["Prix"]) &&
		isset($_POST["Quantite"]) &&		
        isset($_POST["Nom"]) &&
		
        isset($_POST["id"]) 
    ) {
        if (
            !empty($_POST["Prix"]) && 
			!empty($_POST['Quantite']) &&
            !empty($_POST["Nom"]) && 
			
            !empty($_POST["id"]) 
        ) {
            $produit = new Produit(
                $_POST['Prix'],
				$_POST['Quantite'],
                $_POST['Nom'], 
				
                $_POST['id']
            );
            $produitC->ajouterProduit($produit);
            header('Location:tables.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherListeAdherents.php">Retour à la liste des adherents</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="Prix">Prix:
                        </label>
                    </td>
                    <td><input type="text" name="Prix" id="Prix" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="Quantite">Quantite:
                        </label>
                    </td>
                    <td><input type="text" name="Quantite" id="Quantite" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Nom">Nom":
                        </label>
                    </td>
                    <td><input type="text" name="Nom" id="Nom" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="id">id:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="id" id="id">
                    </td>
                </tr>
                
                              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>