<?php
	//require '../config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'\Produit_backend\config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'\Produit_backend\produit.php';
	//include_once '../Model/utilisateur.php';
	class ProduitC {
		function afficherProduit(){
			$sql="SELECT * FROM produit";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage("no cnx"));
			}
		}

        function supprimerProduit($id){
			$sql="DELETE FROM produit WHERE id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
    
    
        function ajouterProduit($produit){
			$sql='INSERT INTO produit (Prix,Quantite,Nom,id) 
			VALUES (:Prix,:Quantite,:Nom,:id)';
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'Prix' => $produit->getPrix(),
					'Quantite' => $produit->getQtn(),
                    'Nom' => $produit->getNom(),
                    'id' => $produit->getid()
                    
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
    
        function modifierProduit($produit, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE produit SET 
						Prix= :Prix, 
						Quantite= :Quantite,
                        Nom= :Nom
                       
					WHERE id= :id'
				);
				$query->execute([
					'Prix' => $produit->getprix(),
					'Quantite' => $produit->getQtn(),
                    'Nom' => $produit->getNom(),
                    
					'id' => $id
				]);	
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
    
    


        ?>