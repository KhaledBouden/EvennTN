<?php
	class category{
		private $id=null;
		private $name=null;
		function __construct($id,$name){
            $this->id=$id;
			$this->name=$name;
			
			
		}
        // function get(var p)
        // {
            
        //     return p;
        // }

		function getid(){
			return $this->id ;
		}
		

		function getname(){
			return $this->name;
		}

		
		


		function setname(string $name){
			$this->name=$name;
		}
	
		
	
		
		
	}


?>