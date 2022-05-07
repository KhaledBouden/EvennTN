<?php
	//require '../config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'\Produit_backend\config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'\Produit_backend\cmd.php';
	
	
	use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
require 'PHPMailer/Exception.php'; 
require 'PHPMailer/PHPMailer.php'; 
require 'PHPMailer/SMTP.php'; 

	//include_once '../Model/utilisateur.php';
	class cmdC {
		function affichercmd(){
			$sql="SELECT * FROM cmd";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage("no cnx"));
			}
		}

        function supprimercmd($id){
			$sql="DELETE FROM cmd WHERE id=:id";
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
    
    
        function ajoutercmd($cmd){
			$sql='INSERT INTO cmd (nom,prenom,email,num,numc,cvv) 
			VALUES (:nom,:prenom,:email,:num,:numc,:cvv) ';
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nom' => $cmd->getnom(),
					'prenom' => $cmd->getprenom(),
                    'email' => $cmd->getemail(),
					'num' => $cmd->getnum(),
					'numc' => $cmd->getnum_c(),
					'cvv' => $cmd->getcvv()
                    
                    
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
    
        
		function recuperercmd($id){
			$sql="SELECT * from cmd where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
	
				$cmd=$query->fetch();
				return $cmd;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		

		function mailcmd($cmd){
			$mail = new PHPMailer; 
			$nomM=$cmd->getnom();
			$prenomM=$cmd->getprenom();
			$emailm=$cmd->getemail();
			$numm=$cmd->getnum();
			$numcm=$cmd->getnum_c();
			$cvvm=$cmd->getcvv();
		 
		$mail->isSMTP();                      // Set mailer to use SMTP 
		$mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
		$mail->SMTPAuth = true;               // Enable SMTP authentication 
		$mail->Username = 'khaledbouden15@gmail.com';   // SMTP username 
		$mail->Password = 'Torquejake69';   // SMTP password 
		$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
		$mail->Port = 587;                    // TCP port to connect to 
		 
		// Sender info 
		$mail->setFrom('khaledbouden15@gmail.com', 'eventn'); 
		$mail->addReplyTo('khaledbouden15@gmail.com', 'eventn'); 
		 
		// Add a recipient 
		$mail->addAddress($cmd->getemail()); 
		 
		//$mail->addCC('cc@example.com'); 
		//$mail->addBCC('bcc@example.com'); 
		 
		// Set email format to HTML 
		$mail->isHTML(true); 
		 
		// Mail subject 
		$mail->Subject = 'Vote commande de Eventn'; 
		 
		// Mail body content 
		$bodyContent = '<html><body>';
		$bodyContent .= '<h1 style="color:#f40;">Vote commande : </h1>'; 
		$bodyContent .= '<h4 style="color:#dc143c;">Nom : </h4> '; 
		$bodyContent .=   $nomM ; 
		$bodyContent .= '<h4 style="color:#dc143c;">Prenom : </h4> '; 
		$bodyContent .=   $prenomM ; 
		$bodyContent .= '<h4 style="color:#dc143c;">email : </h4> '; 
		$bodyContent .=   $emailm ; 
		$bodyContent .= '<h4 style="color:#dc143c;">numéro téléphone : </h4> '; 
		$bodyContent .=   $numm ; 
		$bodyContent .= '<h4 style="color:#dc143c;">numéro carte : </h4> '; 
		$bodyContent .=   $numcm ;
		$bodyContent .= '<h4 style="color:#dc143c;">cvv : </h4> '; 
		$bodyContent .=   $cvvm ;
		$bodyContent .= '<html><body>';
		$mail->Body    = $bodyContent; 
		 
		// Send email 
		if(!$mail->send()) { 
			echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
		} else { 
			echo 'Message has been sent.'; 
		} 
			 }


			
	}
   
    //qr
	

	 

        ?>