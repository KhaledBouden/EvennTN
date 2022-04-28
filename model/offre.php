<?php
	class offre{
		private $id_offre=null;
		private $nom_offre=null;
		private $dateDeb_offre=null;
		private $dateExp_offre=null;
		private $prix_offre=null;
        
		function __construct($id_offre, $nom_offre, $dateExp_offre, $dateDeb_offre, $prix_offre){
			$this->id_offre=$id_offre;
			$this->nom_offre=$nom_offre;
			$this->dateExp_offre=$dateExp_offre;
			$this->dateDeb_offre=$dateDeb_offre;
			$this->prix_offre=$prix_offre;
		}
		function getid_offre(){
			return $this->id_offre;
		}
		function getnom_offre(){
			return $this->nom_offre;
		}
		function getdateExp_offre(){
			return $this->dateExp_offre;
		}
		function getdateDeb_offre(){
			return $this->dateDeb_offre;
		}
		function getprix_offre(){
			return $this->prix_offre;
		}
		function setnom_offre(string $nom_offre){
			$this->nom_offre=$nom_offre;
		}
		function setdateExp_offre(string $dateExp_offre){
			$this->dateExp_offre=$dateExp_offre;
		}
		function setdateDeb_offre(string $dateDeb_offre){
			$this->dateDeb_offre=$datedeb_offre;
		}
		function setprix_offre(string $prix){
			$this->prix_offre=$prix_offre;
		}
	}


?>