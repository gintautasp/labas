<?php

	class FailasEilutemis {
	
		public $failas;
		
		public $content = array();
	
		function __construct ( $failas ) {
		
			$this -> failas = $failas;
		}
		
		function nuskaityti () {
		
			$lines = file ( $this ->failas );

			// Loop through our array, show HTML source as HTML source; and line numbers too.
			foreach ( $lines as $line_num => $line ) {
			
				$this ->content[] = $line;
			}
		}		
	}