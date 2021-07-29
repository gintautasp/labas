<?php

	class Miestai {
	
		public $ercl_db;
		public $qw = "";
		public $rs;
	
		function __construct () {
		
			mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
			$this -> ercl_db = new mysqli( "localhost", "root", "", "geox");
		}
	
		function prideti ( $pav, $kodas_salies, $data_ikurimo, $gyventoju, $plotas ) {
		
			$qw_add = 
					"
				INSERT INTO `miestas` ( 
					`pavadinimas`
					, `salies_kodas`
					, `Ikurimo_data`
					, `gyventojai`
					, `plotas` 
				)  VALUES (
					'" . $pav. "'
					, '" . $kodas_salies . "'
					, '" . $data_ikurimo . "'
					, '" . $gyventoju . "'
					, '" . $plotas . "'					
				)";
			
			// echo $qw_add; exit;
			
			$this ->qw = $qw_add;
		
			$this -> ercl_db  -> query( $qw_add );
		}
		
		function sarasas () {
		
			$qw_sel = "SELECT * FROM `miestas`";
			
			// echo $qw_add; exit;
			
			$this ->qw = $qw_sel;
		
			$this -> rs = $this -> ercl_db  -> query( $qw_sel );
		}		
	}