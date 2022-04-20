<?php
    include "C://xampp/htdocs/validation/config.php";
   // include "C://wamp64/www/solis/config.php";
 // include '../../Controller/InfoC.php';
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
            $sql = "SELECT * FROM user order by username DESC LIMIT {$start},{$perPage}";
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
    }