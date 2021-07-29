<?php

	define ( 'DIR_MAIN', dirname ( __FILE__  ) . '/' );
	
	require DIR_MAIN . 'config.php';

	if ( isset ( $_GET [ 'm' ] ) ) {
	
		$lst_links = array ( 'miestai', 'salys', 'failai', 'naujienos' );
	
		if ( in_array ( $_GET [ 'm' ] , $lst_links ) )  {

			require  $_GET [ 'm'] . '/controller.php';	
			
		} else {
		
			include 'default.php';
		}
		
	} else {
		
		include 'default.php';
	}
	include 'main.html.php';
	