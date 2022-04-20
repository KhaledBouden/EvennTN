<?php
    include_once "C://xampp/htdocs/validation/config.php";
  // include_once "C://wamp64/www/validation/config.php";
   //require_once '../../Controller/UserC.php';
    class InfoC {

        public function ajouterInfo($info,$username,$img)
        {
            $sql = "INSERT INTO infos (nom, prenom, age ,username ,telephone) 
            VALUES (:nom, :prenom, :age , :username , :telephone)";
    
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
    
                $query->execute([
                    'nom' => $info->getNom(),
                    'prenom' => $info->getPrenom(),
                    'age' => $info->getAge(),
                    'username' => $username,
                    'telephone' =>$info->getTelephone(),
    
                ]);
            } catch (Exception $e) {
                echo 'Erreur: ' . $e->getMessage();
            }
        }

        public function supprimerInfo($username)
        {
            $sql = "DELETE FROM infos WHERE username = :username";
            $db = config::getConnexion();
            $req = $db->prepare($sql);
            $req->bindValue(':username', $username);
            try {
                $req->execute();
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }

        public function modifierUser($info, $username)
        {
            $db = config::getConnexion();
            try {
                
                $query = $db->prepare(
                    'UPDATE infos SET 
                            nom = :nom,
                            prenom = :prenom,
                            telephone = :telephone,
                            age = :age
                        WHERE username = :username'
                );
                $query->execute([
                    'username' =>  $username,
                    'nom' =>  $info->getNom(),
                    'prenom' => $info->getPrenom(),
                    'telephone' => $info->getTelephone(),
                    'age' => $info->getAge()
                                 
                ]);
                echo $query->rowCount() . " records UPDATED successfully <br>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function recupererUser($username)
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

        public function triCroissant($page, $perPage)
        {
            $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
            $sql = "SELECT * FROM infos order by username LIMIT {$start},{$perPage}";
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


     /*   public function verifierUser($username)
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

        public function pagination($page, $perPage)
        {
            $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
            $sql = "SELECT * FROM user LIMIT {$start},{$perPage}";
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
        }*/

    
    }