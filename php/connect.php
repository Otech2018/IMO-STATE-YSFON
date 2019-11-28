<?php

/*************************
AUTHOR: AJAH OGONNAYA BENJAMIN
COMPANY: MICROLINK CODE MLC
PHONE:07068085036



********************************/

class connect{
			public  $username = 'root';
			public  $password = '';
			public  $host = 'localhost';
			public  $db ='football';	
				
		
	}
	
	
	
		class run_query extends connect{
		
		public function __construct( $query_mlc){
			$this->connect_db = new PDO("mysql:host=$this->host;dbname=$this->db",$this->username,$this->password);

			$this->query_run = $this->connect_db ->query($query_mlc);
			$this->num_rows = $this->query_run->rowCount();
			
			
			}


			public	 function result(){
			$this->result =  $this->query_run ->fetch(PDO::FETCH_BOTH);
			
			return $this->result;
			}
		
	
	}
// query_run
// num_rows

// result
?>