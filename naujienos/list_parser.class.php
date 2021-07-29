<?php

	class ListParser {
	
		function __construct () {
		}
		
		function parse ( $reguliari_israiska, $tekstas ) {
		
			preg_match_all( $reguliari_israiska, $tekstas, $matches, /* PREG_OFFSET_CAPTURE */ PREG_SET_ORDER );
		
			return $matches;
		}
	}