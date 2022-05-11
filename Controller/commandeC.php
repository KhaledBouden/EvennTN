<?php

	include_once 'C://xampp/htdocs/validation/config.php';
	include 'C://xampp/htdocs/validation/model/commande.php';
	class commandeC {
		function afficherListecommande(){
			$sql="SELECT * FROM commande";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}


		function ajoutercommande($commande){
			$sql="INSERT INTO commande ( id_offre, prix_commande, date_commande) 
			VALUES (:id_offre,:prix_commande, :date_commande)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_offre' => $commande->getid_offre(),
					'date_commande' => $commande->getdate_commande(),
					'prix_commande' => $commande->getprix_commande()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function supprimercommande($id_commande){
			$sql="DELETE FROM commande WHERE id_commande=:id_commande";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_commande', $id_commande);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
	

		function recuperercommande($id_commande){
			$sql="SELECT * from commande where id_commande=$id_commande";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$commande=$query->fetch();
				return $commande;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifiercommande($commande, $id){
			$db = config::getConnexion();
			try {
				$query = $db->prepare(
					'UPDATE commande SET 
						id_offre = :id_offre, 
						date_commande = :date_commande,
						prix_commande = :prix_commande
                        
					WHERE id_commande = :id'
				);

				$query->execute([
					'id'=>$id,
					'id_offre' => $commande->getid_offre(),
					'date_commande' => $commande->getdate_commande(),
					'prix_commande' => $commande->getprix_commande()
					
					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function afficherListecommandevendu(){
								$sql="SELECT * FROM offre o,commande c where o.id_offre=c.id_offre ";
								$db = config::getConnexion();
							try{
								$liste = $db->query($sql);
								return $liste;
								}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
								}
			}
				

			

	}
	




