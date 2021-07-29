<?php

	class Csv {
	
		public $failas;
		
		public $content = array();
	
		function __construct ( $failas ) {
		
			$this -> failas = $failas;
		}
		
		function nuskaityti () {
		
			$row = 1;
			
			if ( ( $handle = fopen( $this -> failas , "r" ) ) !== FALSE ) {
			
				while ( ( $data = fgetcsv ( $handle, 0, "," ) ) !== FALSE ) {
			    
					$this -> content[]  = $data;
				}
				
				fclose ( $handle );
			}
		}		
	}