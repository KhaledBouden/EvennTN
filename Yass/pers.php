<?php
class personne
{
    public   $nom ; 
    public   $prenom ; 
    public   $email  ; 
    public function __construct( ) { 
        $this -> nom ;
        $this -> prenom;
    }
    public function saisir ($p , $n)
 {   
    $this->nom=$n;
    $this->prenom=$p;
}
public function afficher (){
    echo ($this ->nom.' '.$this->prenom);
}
} 
$p1=new Personne();
$p1->saisir ('rim','mdimagh');
$p1->afficher();


?>