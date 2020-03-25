<?php

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
		//echo "Connected successfully ";
	session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}

	if($_SESSION['Status'] != "ADMIN")
	{
		echo "This page for Admin only!";
		exit();
	}	
	
	$sql = "SELECT * FROM login_and_register WHERE UserID='".$_SESSION['UserID']."'";
	$qq = $dbcon->query($sql);
	$row = mysqli_fetch_array($qq);
		
?>
<html>
<head>
<link rel ="icon" href = "favicon.ico" type ="image/x-icon">
<title>Hellooooooo</title>
<style>
	.topic {
		color:white;
	}
	
	body {
	  background-repeat: no-repeat;
	  background-attachment: fixed;  
	  background-size: cover;
	}
</style>

</head>
<center>
<?php
	header("location:home.php")
?>
<!--
<body background ="picture/cat1.jpg">
<font color = "white">
  Welcome to Admin Page! <br><br>
  <table border="1" style="width: 350px">
    <tbody>
      <tr>
        <td width="87" class="topic"> &nbsp;Username</td>
        <td width="197" class="topic"><?php echo $row["Username"];?>
        </td>
      </tr>
      <tr>
        <td class="topic"> &nbsp;Name</td>
        <td class="topic"><?php echo $row["Name"];?></td>
      </tr>
    </tbody>
  </table>
  <br>
  <a href="edit_profile.php">Edit</a><br>
  <br>
  <a href="logout.php">Logout</a>
</body>
-->


</center>
</font>
</html>