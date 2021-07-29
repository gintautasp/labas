<?php

	$content_html = __DIR__ .  '/html.php';
	
	include 'miestai.class.php';	
	$miestai = new Miestai();	
	
	if ( isset ( $_POST [ 'add' ] )  && ( $_POST [ 'add' ] == 'papildyti'  ) ) {
	
		// _cfihod ( $_POST, 'add', 'nepildyti' ) == 'papildyti'
	
		$pav = $_POST [ 'pav' ];
		$kodas_salies = $_POST [ 'kodas_salies' ];	
		$data_ikurimo = $_POST[ 'data_ikurimo' ];
		$gyventoju = $_POST [ 'skaicius_gyv' ];
		$plotas = $_POST[ 'plotas' ]; 
		
		$miestai -> prideti ( $pav, $kodas_salies, $data_ikurimo, $gyventoju, $plotas ); 
	}	
	
	$miestai -> sarasas();
	
