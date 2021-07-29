<?php
	session_start ();
	
	$sessijos_id = session_id();

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
	