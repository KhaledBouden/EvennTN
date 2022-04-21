<?php
require 'config.php';
$pdo = config::getConnexion();
try { 
    $query = $pdo -> prepare (
    "INSERT INTO user (id,firstName,lastName,email,username,password)
    VALUES ( :id,:firstName, :lastName , :email,:username, :password)"

);
$query->execute([
   'id'=> '2',
    'firstName'=>'Yass',
    'lastName'=>'hamza',
    'email'=>'Yass@gmail.com',
    'username'=>'Yass',
    'password'=>'Yass',
]);
}
catch (PDOExepction $e){
    $e->getMessage();
}
?>