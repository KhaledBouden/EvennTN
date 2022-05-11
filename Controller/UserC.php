<?php
    include "C://xampp/htdocs/validation/config.php";
   // include "C://wamp64/www/solis/config.php";
 // include '../../Controller/InfoC.php';


 use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
require 'PHPMailer/Exception.php'; 
require 'PHPMailer/PHPMailer.php'; 
require 'PHPMailer/SMTP.php'; 
    class UserC {

        public function recupererUserInfo($username)
        {
            $sql = "SELECT * from infos where username= :username";
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute(['username' => $username ] );
    
                $user = $query->fetch();
                return $user;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }

        public function assignerAdmin($username)
        {
            $sql="UPDATE user  SET role = 2 WHERE username = '". $username . "'" ;
            $db = config::getConnexion();
            try {

                $query = $db->prepare($sql);
                $query->execute();
                echo $query->rowCount() . " Admin assigned successfully <br>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function ajouterUser($user)
        { 
            $sql = "INSERT INTO user (username, password, email , role) 
            VALUES (:username, :password, :email , 1)";
    
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
    
                $query->execute([
                    'username' => $user->getUsername(),
                    'password' => $user->getPassword(),
                    'email' => $user->getEmail()
    
                ]);
            } catch (Exception $e) {
                echo 'Erreur: ' . $e->getMessage();
            }
        }

        public function verifierUser($username)
        {
            $sql = "SELECT * from user where username='$username' ";
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute();
                $result = $query->rowCount();
                return $result;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }

        function connexionUser($username,$password){
            $sql="SELECT * FROM user  WHERE username ='" . $username . "' and Password = '". $password."'";
            $db = config::getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->execute();
                $count=$query->rowCount();
                if($count==0) {
                    $message = "pseudo ou le mot de passe est incorrect";
                } else {
                    $x=$query->fetch();
                    $message = $x['role'];
                }
            }
            catch (Exception $e){
                    $message= " ".$e->getMessage();
            }
          return $message;
        }


        public function afficherUser() //TO ADD WHERE ROLE = ADMIN
        {
    
            $sql = "SELECT * FROM user";
            $db = config::getConnexion();
            try {
                $liste = $db->query($sql);
                return $liste;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }
 
        public function afficherAdmins() //TO ADD WHERE ROLE = ADMIN
        {
    
            $sql = "SELECT * FROM user WHERE user.role = 2";
            $db = config::getConnexion();
            try {
                $liste = $db->query($sql);
                return $liste;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }

        public function supprimerUser($id)
        {
            $sql = "DELETE FROM user WHERE id = :id";
            $db = config::getConnexion();
            $req = $db->prepare($sql);
            $req->bindValue(':id', $id);
            try {
                $req->execute();
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }


     

        public function modifierUser($user, $id)
        {
            $db = config::getConnexion();
            try {
                
                $query = $db->prepare(
                    'UPDATE user SET 
                            username = :username,
                            password = :password,
                            email = :email
                        WHERE id = :id'
                );
                $query->execute([
                    'id' =>  $id,
                    'username' =>  $user->getUsername(),
                    'password' => $user->getPassword(),
                    'email' => $user->getEmail()
                                 
                ]);
                echo $query->rowCount() . " records UPDATED successfully <br>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function recupererUser($id)
        {
            $sql = "SELECT * from user where id=$id";
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute();
    
                $user = $query->fetch();
                return $user;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }
    

      
      
        public function recupererUserUsername($username)
        {
            $sql = "SELECT * from user where username='$username' ";
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute();
    
                $user = $query->fetch();
                return $user;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }




        public function recherche($search_value)
        {
            $sql="SELECT * FROM user where username like '$search_value' ";
    
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
     

        public function paginationAdmins($page, $perPage)
        {
            $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
            $sql = "SELECT * FROM user WHERE user.role = 1 LIMIT {$start},{$perPage}";
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

        public function triCroissant($page, $perPage)
        {
            $start = ($page > 0) ? ($page * $perPage) - $perPage : 0;
            $sql = "SELECT * FROM user order by username ASC LIMIT {$start},{$perPage}";
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
            $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM user";
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

        function mailcmd($user){
			$mail = new PHPMailer; 
			$username=$user->getUsername();
			$email=$user->getEmail();
            
			
		 
		$mail->isSMTP();                      // Set mailer to use SMTP 
		$mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
		$mail->SMTPAuth = true;               // Enable SMTP authentication 
		$mail->Username = 'khaledturki20182017@gmail.com';   // SMTP usern

        $mail->Password = 'khaled2018turki2017';   // SMTP password 
		$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
		$mail->Port = 587;                    // TCP port to connect to 
		 
		// Sender info 
		$mail->setFrom('khaledturki20182017@gmail.com', 'eventn'); 
		$mail->addReplyTo('khaledturki20182017@gmail.com', 'eventn'); 
		 
		// Add a recipient 
		$mail->addAddress($user->getEmail()); 
		 
		//$mail->addCC('cc@example.com'); 
		//$mail->addBCC('bcc@example.com'); 
        $mail->isHTML(true); 
        // Mail subject 
		$mail->Subject = 'Bienvenue Chez  Eventn'; 

        // Mail body content 
		$bodyContent = '<html><body>';
		$bodyContent .= '<h1 style="color:#f40;">  votre inscription est Validée  : </h1>'; 
		$bodyContent .= '<h4 style="color:#dc143c;"> Username : </h4> '; 
		$bodyContent .=   $username ; 
		$bodyContent .= '<h4 style="color:#dc143c;"> Email : </h4> '; 
		$bodyContent .=   $email ; 
		$bodyContent .= '<html><body>';
		$mail->Body    = $bodyContent; 
        if(!$mail->send()) { 
			echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
		} else { 
			echo 'Message has been sent.'; 
		} 
			 }



             
             


    }