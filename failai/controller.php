<?php

	$content_html = __DIR__ .  '/html.php';
	
	include 'csv.class.php';	
	$csv = new Csv( "C:\\Users\\sesioliktas\\Desktop\\xampp\\htdocs\\user-files\\Rental-price-indexes-March-2021.csv" );
	$csv -> nuskaityti();

	include 'failas_eilutemis.class.php';	
	$failas_eilutemis = new FailasEilutemis( "C:\\Users\\sesioliktas\\Desktop\\xampp\\htdocs\\user-files\\Rental-price-indexes-March-2021.csv" );	
	// $failas_eilutemis -> nuskaityti();
	
	$failas_pilnas = file_get_contents ( "C:\\Users\\sesioliktas\\Desktop\\xampp\\htdocs\\user-files\\Rental-price-indexes-March-2021.csv" );
	
	$html_webe = file_get_contents ( "https://www.thymeleaf.org/doc/tutorials/2.1/usingthymeleaf.html" );
	
	//  https://www.php.net/manual/en/simplexml.examples-basic.php