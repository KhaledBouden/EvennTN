<?php
	 include "C://xampp/htdocs/validation/config.php";

	include_once 'C:\xampp\htdocs\validation\Model\category.php';
	class categoryC {
		function affichercategory(){
			$sql="SELECT * FROM cat";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimercategory($id){
			$sql="DELETE FROM cat WHERE id=:id";
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
		function ajoutercategory($category){
			$sql="INSERT INTO cat (id,name) 
			VALUES (:id,:name)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id' => $category->getid(),
					'name' => $category->getname()
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recuperercategory($id){
			$sql="SELECT * from cat where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$category=$query->fetch();
				return $category;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifiercategory($category, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE cat SET 
						
						name= :name
						
					WHERE id= :id'
				);
				$query->execute([
					
					'id'=>$category->getid(),
					'name'=>$category->getname()
					
					

					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		function triercategoryDESC()
		{
		$sql = "SELECT * from cat ORDER BY id DESC";
		$db = config::getConnexion();
		try {
		$req = $db->query($sql);
		return $req;
		} 
		catch (Exception $e)
	 	{
		die('Erreur: ' . $e->getMessage());
		}
		}


		function triercategoryASC()
		{
		$sql = "SELECT * from cat ORDER BY id ASC";
		$db = config::getConnexion();
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