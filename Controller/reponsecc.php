<?php
 	//include_once '../Controller/reponsecc.php';
	 
	class reponsec { 
		public function afficherreponse(){
			
			$sql="SELECT * FROM reponse";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}

		function supprimerreponse($id){
			include_once "C://xampp/htdocs/validation/config.php";
			$sql="DELETE FROM reponse WHERE id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}

		public function ajouterreponse($reponse){
			
			$sql="INSERT INTO reponse (id, date, objet, description) 
			VALUES (:id,:date,:objet, :description )";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id' => $reponse->getid(),
					'date' => $reponse->getdate(),
					'objet' => $reponse->getobjet(),
					'description' => $reponse->getdescription()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}
		} 


		function recupererreponse($id){
			$sql="SELECT * from reponse where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$reponse=$query->fetch();
				return $reponse;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierreponse($reponse, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE reponse SET 
						id= :id, 
						date= :date, 
						objet= :objet, 
						description= :description
					WHERE id= :id'
				);
				$query->execute([
					'id' => $reponse->getid(),
					'date' => $reponse->getdate(),
					'objet' => $reponse->getobjet(),
					"description" => $reponse->getdescription(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>