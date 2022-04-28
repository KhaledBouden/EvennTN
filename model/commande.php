<?php
	class commande{
		private $id_commande=null;
		private $id_offre=null;
		private $date_commande=null;
		private $prix_commande=null;
        
		function __construct( $id_offre, $date_commande, $prix_commande){
			$this->id_offre=$id_offre;
			$this->date_commande=$date_commande;
			$this->prix_commande=$prix_commande;
		}
		function getid_commande(){
			return $this->id_commande;
		}
		function getid_offre(){
			return $this->id_offre;
		}
		function getdate_commande(){
			return $this->date_commande;
		}
		function getprix_commande(){
			return $this->prix_commande;
		}
		function setid_offre(string $id_offre){
			$this->id_offre=$id_offre;
		}
		function setdate_commande(string $date_commande){
			$this->date_commande=$date_commande;
		}
		function setprix_commande(string $prix){
			$this->prix_commande=$prix_commande;
		}
	}


?>