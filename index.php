<?php

	function sanitize_input( $input_string )
	{
		$input_string = strip_tags( $input_string );
		$input_string = mysql_real_escape_string( $input_string );
		return $input_string;
	}

	session_start();
	$db = mysqli_connect( "localhost", "root", "password", "loretta" );

	if ( !$db ) {
		echo mysqli_connect_error();
		return;
	}

	if(isset( $_GET["a"] )) {
		$action=$_GET["a"];
		switch ( $action ) {
			case 'result':
			include( $action . ".php" );	
			default:
			include( '404.php' );
			break;
		}
	} else {
		include( 'start.html' );
	}
?>