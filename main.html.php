<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Labas php</title>
	<style>
<?php
		$plotis_pagr_div = 1200;

		include 'stiliai.css.php';
	
		if ( WORK_MODE == 'LOCAL' ) {
		
			include $conf [ 'dir_commons' ] . 'css/debug.css';
		}
		/*
		while ( $this -> resp -> files_css -> takeNext() ) {

			if ( ! is_array (  $this -> resp -> files_css -> piece ) ) { 
			
				include $this -> resp -> files_css -> piece;

			} else {

				include $this -> resp -> files_css -> piece [ 'file' ];		

			}
		}
		*/
?>
	</style>
</head>
<body>
<?php // = $sessijos_id ?> 
<div id="main">
<?php

	include $content_html_x;
?>
</div>
<footer>
<?php

	if ( WORK_MODE == 'LOCAL' ) {
	
		// $this -> _s -> log -> see();

		$_syst -> log -> see ();
	}
?>
<footer>
</body>
</html>