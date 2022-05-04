<?php
	class reclamation {
		private $id=null;
		private $date=null;
		private $objet=null;
		private $description=null; 
		 
		function getid(){
			return $this->id;
		}
		function getdate(){
			return $this->date;
		}
		function getobjet(){
			return $this->objet;
		}
		function getdescription(){
			return $this->description;
		}
		 
		function setid(  $id){
			$this->id=$id;
		}
		function setdate(  $date){
			$this->date=$date;
		}
		function setobjet(  $objet){
			$this->objet=$objet	;
		}
		function setdescription(  $description){
			$this->description=$description;
		}
		 // $reclamation = new reclamation ('id', 'date', 'objet', 'description' );

		  function __construct( $date, $objet, $description){
			 
			$this->date=$date;
			$this->objet=$objet;
			$this->description=$description;
		  }

		 
	}


?>