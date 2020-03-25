<?php 
	require 'connectdb.php';

	$Username = $_POST['txtUsername'];
	$Password = $_POST['txtPassword'];
	$login_email = $_POST['email'];
	$Name = $_POST['txtName'];

	//เข้ารหัส
	$salt = 'tikde78uj4ujuhlaoikiksakeidke';	
	$hash_login_password = hash_hmac('sha256', $Password, $salt);
	
	
//เข้ารหัส	$query = "INSERT INTO login_and_register (Username,Password,login_email) VALUES ('$Username','$hash_login_password','$login_email')";
	$query = "INSERT INTO login_and_register (Name,Username,Password,login_email) VALUES ('$Name','$Username','$Password','$login_email')";
	$result = mysqli_query($dbcon, $query);

	if($result)
	{
		header("Location: echo.php");
	}
	else
	{ 
		echo "Someting went wrong". mysqli_error($dbcon);
	}	
	
	$dbcon = NULL;

?>