<?php
	//require '../config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'\Produit_backend\config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'\Produit_backend\produit.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'\Produit_backend\cmd.php';
	include('C:\xampp\htdocs\Produit_backend\phpqrcode/qrlib.php');
	
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
			$sql='INSERT INTO produit (Prix,Quantite,Nom) 
			VALUES (:Prix,:Quantite,:Nom)';
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'Prix' => $produit->getPrix(),
					'Quantite' => $produit->getQtn(),
                    'Nom' => $produit->getNom()
                    
                    
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
					'Prix' => $produit->getPrix(),
					'Quantite' => $produit->getQtn(),
                    'Nom' => $produit->getNom(),
					
                  
                    
                    
					'id' => $id
				]);	
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererProduit($id){
			$sql="SELECT * from produit where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
	
				$produit=$query->fetch();
				return $produit;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function qrpr($i,$n,$p,$q){
			$tempDir = "qrcodes/";
			
			
			
    
			$codeContents = $i;
			$codeContents .= $n;
			$codeContents .= $p;
			$codeContents .= $q;

			
			// we need to generate filename somehow, 
			// with md5 or with database ID used to obtains $codeContents...
			$fileName = '005_file_'.md5($codeContents).'.png';
			
			$pngAbsoluteFilePath = $tempDir.$fileName;
			$urlRelativeFilePath = $tempDir.$fileName;
			
			// generating
			if (!file_exists($pngAbsoluteFilePath)) {
				QRcode::png($codeContents, $pngAbsoluteFilePath);
				
			} else {
				
			}
			
			
			
			// displaying
			echo '<img src="'.$urlRelativeFilePath.'" />';
		}

	}
   
    


        ?>