<?php
	$dbusername = "root";
	$dbpassword = "admin1234";
	$server = "localhost";

	$dbconnect = mysqli_connect($server,$dbusername,$dbpassword);
	$dbselect = mysqli_select_db($dbconnect,"papaproject");

	$Waste = $_GET['Waste'];
	$Volume = $_GET['Volume'];
	$Zone = $_GET['Zone'];
	$Latitude = $_GET['Latitude'];
	$Longtitude = $_GET['Longtitude'];
	$No = $_GET['No'];
	$Percentage = $_GET['Percentage'];
	
	$sql1 = "INSERT INTO `databin`(`id`, `Zone`, `No`, `Volume(cm^3)`, `Latitude`, `Longtitude`) VALUES (NULL,'$Zone','$No','$Volume','$Latitude','$Longtitude')";
	$sql2 = "INSERT INTO `waste`(`id`,`Zone`,`No`,`Waste(kg)`,`Percentage`) VALUES (NULL,'$Zone','$No','$Waste','$Percentage')";
	
	mysqli_query($dbconnect, $sql1);
	mysqli_query($dbconnect, $sql2);
?>