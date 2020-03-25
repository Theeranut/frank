<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "Nung8338";
	$dbname = "papaproject";

	// Create connection
	$dbcon = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($dbcon->connect_error) 
	{
    die("Connection failed: " . $dbcon->connect_error);
	}
	echo "Connected successfully";
	
?>