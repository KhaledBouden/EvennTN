<?php
	class Cmd{
		
		
		private $nom=null;
        private $prenom=null;
        private $email=null;
        private $num=null;
		private $numc=null;
		private $cvv=null;
		
		
		
		function __construct($nom,$prenom,$email,$num,$numc,$cvv/*,$id*/){
			
			
			$this->nom=$nom;
            $this->prenom=$prenom;
            
			$this->email=$email;
			$this->num=$num;
			$this->numc=$numc;
			$this->cvv=$cvv;

            //$this->id=$id;
		}
		/*function getId(){
			return $this->idu;
		}*/
		function getid(){
			return $this->id;
		}
		function getnom(){
			return $this->nom;
		}
        function getprenom(){
			return $this->prenom;
		}

		function getemail(){
			return $this->email;
		}
		function getnum(){
			return $this->num;
		}
		function getnum_c(){
			return $this->numc;
		}
       
		function getcvv(){
			return $this->cvv;
		}
		
        //////////


		
		function setnom(string $nom){
			$this->nom=$nom;
		}
        function setprenom(string $prenom){
			$this->prenom=$prenom;
		}
        
		function setemail(string $email){
			$this->email=$email;
		}
		function setnum(string $num){
			$this->num=$num;
		}
		function setnum_c(string $numc){
			$this->numc=$numc;
		}
		function setcvv(string $cvv){
			$this->cvv=$cvv;
		}
	}


?>