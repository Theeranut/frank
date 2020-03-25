<title>Papaproject.com</title>
<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "Nung8338";
	$dbname = "papaproject";

// Create connection
	$dbcon = new mysqli($servername, $username, $password, $dbname);

// Check connection
	if ($dbcon->connect_error) {
    die("Connection failed: " . $dbcon->connect_error);
}
	//การเข้ารหัส
	/*
	$Password = $_POST['txtPassword'];
	$salt = 'tikde78uj4ujuhlaoikiksakeidke';	
	$hash_login_password = hash_hmac('sha256', $Password, $salt);
	*/
	
	$sql = "SELECT * FROM login_and_register WHERE Username='".$_POST['txtUsername']."' and Password='".$_POST['txtPassword']."'";
	$result = $dbcon->query($sql);
	//echo $result -> num_rows; // check data 
	$data = mysqli_fetch_array($result);

	if($data['Username'] == $_POST['txtUsername'] and $data['Password'] == $_POST['txtPassword'])
	{
			$_SESSION["UserID"] = $data["UserID"];
			$_SESSION["Status"] = $data["Status"];

			session_write_close();
			
			if($data["Status"] == "ADMIN")
			{
				header("location:admin_page.php");
			}
			else
			{
				header("location:user_page.php");
			}
	}
	else
	{
		header("location:echo1.php");
		
	}
	mysql_close();
?>