<?php
	class Produit{
		
		
		private $Prix=null;
        private $Quantite=null;
        private $Nom=null;
        private $id=null;
		
		
		
		function __construct($Prix,$Quantite,$Nom/*,$id*/){
			
			
			$this->Prix=$Prix;
            $this->Quantite=$Quantite;
            
			$this->Nom=$Nom;
            //$this->id=$id;
		}
		/*function getId(){
			return $this->idu;
		}*/
		function getid(){
			return $this->id;
		}
		function getPrix(){
			return $this->Prix;
		}
        function getQtn(){
			return $this->Quantite;
		}
       
		function getNom(){
			return $this->Nom;
		}
		
        //////////


		
		function setPrix(string $Prix){
			$this->Prix=$Prix;
		}
        function setQtn(string $Quantite){
			$this->Quantite=$Quantite;
		}
        
		function setNom(string $Nom){
			$this->Nom=$Nom;
		}
	}


?>