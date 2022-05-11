 

<?php
 	//include_once '../Controller/reclamationcc.php';
	 
	   
	class reclamationc { 
		public function afficherreclamation(){
			
			$sql="SELECT * FROM reclamation";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerreclamation($id){
			include_once "C://xampp/htdocs/validation/config.php";
			$sql="DELETE FROM reclamation WHERE id=:id";
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
		public function ajouterreclamation($reclamation){
			
			$sql="   INSERT INTO reclamation ( date, objet, description) 
			VALUES (:date,:objet, :description )";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					 
					'date' => $reclamation->getdate(),
					'objet' => $reclamation->getobjet(),
					'description' => $reclamation->getdescription()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}
		}/*
		public function ajouterreclamation($reclamation){
			$pdo=config::getConnexion();
			try {
				$query=$pdo->prepare(
					"INSERT INTO reclamation (id,date,objet,description )
					 VALUES (:id,:date,:objet,:description );"
				);
			
				$query->execute([
					'id'=>$reclamation->get_id(),
					'date'=>$reclamation->get_date(),
					'objet'=>$reclamation->get_objet(),
					'description'=>$reclamation->get_description()
					 
				]);
			}
			catch(PODException $e) {
				$e->getMessage();
			}
		}
*/


	
		function recupererreclamation($id){
			 
		 	 
			$sql="SELECT * from reclamation where id=$id  ";

			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$reclamation=$query->fetch();
				return $reclamation;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		 function modifierreclamation($reclamation, $id){
		
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE reclamation SET 
						 id= :id, 
						date= :date, 
						objet= :objet, 
						description= :description
					WHERE id= :id'
				);
				$query->execute([
					'id' => $reclamation->getid(),
					'date' => $reclamation->getdate(),
					'objet' => $reclamation->getobjet(),
					"description" => $reclamation->getdescription(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		public function pagination($page, $perPage)
        {
            $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
            $sql = "SELECT * FROM reclamation LIMIT {$start},{$perPage}";
            $db = config::getConnexion();
            try {
                $liste = $db->prepare($sql);
                $liste->execute();
                $liste = $liste->fetchAll(PDO::FETCH_ASSOC);
                return $liste;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }
		public function calcTotalRows($perPage)
        {
            $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM reclamation";
            $db = config::getConnexion();
            try {
    
                $liste = $db->query($sql);
                $total = $db->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
                $pages = ceil($total / $perPage);
                return $pages;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }
       
		public function recherche($search_value)
        {
            $sql=" SELECT * FROM reclamation where id like '$search_value' ";
            //global $db;
            $db =Config::getConnexion();
            try{
                $result=$db->query($sql);
                return $result;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }

		public function triCroissant($page, $perPage)
        {
            $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
            $sql = "SELECT * FROM reclamation order by id LIMIT {$start},{$perPage}";
            $db = config::getConnexion();
            try {
                $liste = $db->prepare($sql);
                $liste->execute();
                $liste = $liste->fetchAll(PDO::FETCH_ASSOC);
                return $liste;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }



	}
?>