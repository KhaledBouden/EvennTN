

<?php
	class events{
		private $id_ev_ev=null;
		private $nom_ev_ev=null;
		private $lieu=null;
		private $descrip_lieu=null;
		private $date_ev_ev=null;
		private $date_fin=null;
		private $nb_p=null;
		private $descrip_ev=null;
		private $category=null;
		private $image_ev=null;

		function __construct($id_ev,$nom_ev,$lieu,$descrip_lieu,$date_ev, $date_fin,$nb_p,$descrip_ev,$category,$image_ev){

            $this->id_ev=$id_ev;
			$this->nom_ev=$nom_ev;
			$this->lieu=$lieu;
			$this->descrip_lieu=$descrip_lieu;
			$this->date_ev=$date_ev;
			$this->date_fin=$date_fin;
			$this->nb_p=$nb_p;
			$this->descrip_ev=$descrip_ev;
			$this->category=$category;
			$this->image_ev=$image_ev;
			
		}
        // function get(var p)
        // {
            
        //     return p;
        // }

		function getid_ev(){
			return $this->id_ev ;
		}
		

		function getnom_ev(){
			return $this->nom_ev;
		}

		function getlieu(){
			return $this->lieu;
		}

		function getdescrip_lieu(){
			return $this->descrip_lieu;
		}

		function getdate_ev(){
			return $this->date_ev;
		}
		function getdate_fin(){
			return $this->date_fin;
		}
		function getnb_p(){
			return $this->nb_p;
		}
		function getdescrip_ev(){
			return $this->descrip_ev;
		}
		function getcategory()
		{
			return $this->category;
		}
		function getimage_ev()
		{
			return $this->image_ev;
		}
		


		function setnom_ev(string $nom_ev){
			$this->nom_ev=$nom_ev;
		}
	
		function setlieu(string $lieu){
			$this->lieu=$lieu;
		}
		function setdescrip_lieu(string $descrip_lieu){
			$this->descrip_lieu=$descrip_lieu;
		}
		function setdate_ev(string $date_ev){
			$this->date_ev=$date_ev;
		}
		function setdate_fin(string $date_fin){
			$this->date_fin=$date_fin;
		}
		
		function setnb_p(string $nb_p){
			$this->nb_p=$nb_p;
		}
		function setdescrip_ev(string $descrip_ev){
			$this->descrip_ev=$descrip_ev;
		}
		function setcategory(string $category){
			$this->category=$category;
		}
		function setimage_ev(string $image_ev){
			$this->image_ev=$image_ev;
		}
	
		
		
	}


?>