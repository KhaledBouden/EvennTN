<?php
	include 'config.php';
	include_once '../../model/offre.php';
	class offreC {
		function afficherListeOffre(){
			$sql="SELECT * FROM offre";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}


		function ajouteroffre($offre){
			$sql="INSERT INTO offre (id_offre, nom_offre, dateDeb_offre, dateExp_offre, prix_offre) 
			VALUES (:id_offre,:Nom_offre, :dateDeb_offre,:dateExp_offre,:prix_offre)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_offre' => $offre->getid_offre(),
					'Nom_offre' => $offre->getnom_offre(),
					'dateDeb_offre' => $offre->getdateDeb_offre(),
					'dateExp_offre' => $offre->getdateExp_offre(),
					'prix_offre' => $offre->getprix_offre()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function supprimeroffre($id_offre){
			$sql="DELETE FROM offre WHERE id_offre=:id_offre";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_offre', $id_offre);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
	

		function recupereroffre($id_offre){
			$sql="SELECT * from offre where id_offre=$id_offre";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$offre=$query->fetch();
				return $offre;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifieroffre($offre, $id){
			$db = config::getConnexion();
			try {
				$query = $db->prepare(
					'UPDATE offre SET 
						nom_offre = :nom_offre, 
                        dateDeb_offre = :dateDeb_offre,
						dateExp_offre = :dateExp_offre,
						prix_offre = :prix_offre
					WHERE id_offre = :id'
				);
				$query->execute([
					'id'=>$id,
					'nom_offre' => $offre->getnom_offre(),
					'dateDeb_offre' => $offre->getdateDeb_offre(),
					'dateExp_offre' => $offre->getdateExp_offre(),
					'prix_offre' => $offre->getprix_offre()
					
						]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}




