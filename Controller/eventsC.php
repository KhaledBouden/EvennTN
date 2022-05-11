<?php
	include "C://xampp/htdocs/validation/config.php";
	include_once 'C:\xampp\htdocs\validation\Model\events.php';
	class eventsC {
		function afficherevents(){
			$sql="SELECT * FROM events";
			$db = config2::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerevents($id){
			$sql="DELETE FROM events WHERE id_ev=:id_ev";
			$db = config2::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_ev', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterevents($events){
			$sql="INSERT INTO events (id_ev,nom_ev,lieu,descrip_lieu,date_ev,date_fin,nb_p,descrip_ev,category,image_ev) 
			VALUES (:id_ev,:nom_ev,:lieu,:descrip_lieu,:date_ev,:date_fin,:nb_p,:descrip_ev,:category,:image_ev)";
			$db = config2::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_ev' => $events->getid_ev(),
					'nom_ev' => $events->getnom_ev(),
					'lieu' => $events->getlieu(),
					'descrip_lieu' => $events->getdescrip_lieu(),
                    'date_ev'=> $events-> getdate_ev(),
                    'date_fin'=> $events->getdate_fin(),
                    'nb_p'=> $events->getnb_p(),
					'descrip_ev'=> $events->getdescrip_ev(),
					'category'=>$events->getcategory(),
					'image_ev'=>$events->getimage_ev()




				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererevents($id_ev){
			$sql="SELECT * from events where id_ev=$id_ev";
			$db = config2::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$events=$query->fetch();
				return $events;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierevents($events, $id_ev){
			try {
				$db = config2::getConnexion();
				$query = $db->prepare(
					'UPDATE events SET 
						
						nom_ev= :nom_ev,
						lieu= :lieu,
						descrip_lieu= :descrip_lieu,
						date_ev= :date_ev,
						date_fin= :date_fin,
						nb_p= :nb_p,
						descrip_ev= :descrip_ev,
						category= :category,
						image_ev= :image_ev
						
					WHERE id_ev= :id_ev'
				);
				$query->execute([
					
					'id_ev' => $events->getid_ev(),
					'nom_ev' => $events->getnom_ev(),
					'lieu' => $events->getlieu(),
					'descrip_lieu' => $events->getdescrip_lieu(),
                    'date_ev'=> $events-> getdate_ev(),
                    'date_fin'=> $events->getdate_fin(),
                    'nb_p'=> $events->getnb_p(),
					'descrip_ev'=>$events->getdescrip_ev(),
					'category'=>$events->getcategory(),
					'image_ev'=>$events->getimage_ev(),

					'id_ev' => $id_ev


					
					

					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		function triereventsDESC()
		{
		$sql = "SELECT * from events ORDER BY date_ev DESC";
		$db = config2::getConnexion();
		try {
		$req = $db->query($sql);
		return $req;
		} 
		catch (Exception $e)
	 	{
		die('Erreur: ' . $e->getMessage());
		}
		}


		function triereventsASC()
		{
		$sql = "SELECT * from events ORDER BY date_ev ASC";
		$db = config2::getConnexion();
		try {
		$req = $db->query($sql);
		return $req;
		} 
		catch (Exception $e)
	 	{
		die('Erreur: ' . $e->getMessage());
		}
	    }


	}
?>