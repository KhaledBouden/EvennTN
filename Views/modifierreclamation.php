<?php
include_once '../Controller/reclamationcc.php';
include_once '../Model/reclamationn.php';

    $error = "";
    // create adherent
    $reclamation = null;
    // create an instance of the controller
    $reclamationC = new reclamationC();
    if (
        isset($_POST["id"]) &&
		isset($_POST["date"]) &&		
        isset($_POST["objet"]) &&
		isset($_POST["description"])  
        
    ) {
        if (
            !empty($_POST["id"]) && 
			!empty($_POST['date']) &&
            !empty($_POST["objet"]) && 
			!empty($_POST["description"]) 
            
        ) {
            $reclamation = new reclamation(
                $_POST['id'],
				$_POST['date'],
                $_POST['objet'], 
				$_POST['description']
               
            );
            $reclamationC->modifierreclamation($reclamation, $_POST["id"]);
           // header('Location:afficherListereclamation.php');
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
        <button><a href="afficherListereclamation.php">Retour à la liste des reclamation</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<!--  if (isset($_POST['id'])){
				$reclamation = $reclamationC->recupererreclamation($_POST['id']);  -->
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id">id:
                        </label>
                    </td>
                    <td><input type="number" name="id" id="id" value="<?php echo $reclamation['id']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="date">date:
                        </label>
                    </td>
                    <td><input type="date" name="date" id="date" value="<?php echo $reclamation['date']; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="objet">date pub:
                        </label>
                    </td>
                    <td><input type="text" name="objet" id="objet" value="<?php echo $reclamation['objet']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="descritpion">centenu:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="descritpion" value="<?php echo $reclamation['descritpion']; ?>" id="descritpion">
                    </td>
                </tr>     
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>