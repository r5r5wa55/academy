<?php

	// Database configuration 

	$sernamename = "localhost";
	$username    = "root";
	$passoword   = "";
	$databasename= "ekkarin";

	// Create database connection
	$con = mysqli_connect($sernamename, $username,$passoword,$databasename);

	// Check connection
	if ($con->connect_error) {
		die("Connection failed". $con->connect_error);
	}

?>