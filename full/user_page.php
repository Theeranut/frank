<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "admin1234";
	$dbname = "Nung8338";
	
	// Create connection
		$dbcon = new mysqli($servername, $username, $password, $dbname);
		session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}

	if($_SESSION['Status'] != "USER")
	{
		echo "This page for User only!";
		exit();
	}	
	$sql = "SELECT * FROM login_and_register WHERE UserID='".$_SESSION['UserID']."'";
	$qq = $dbcon->query($sql);
	$row = mysqli_fetch_array($qq);
	
	
?>
<html>
<head>
<link rel ="icon" href = "favicon.ico" type ="image/x-icon">
<style>
	.topic {
		color:#ffbb33;
	}
	
	body {
	  background-repeat: no-repeat;
	  background-attachment: fixed;  
	  background-size: cover;
	}
	
</style>                                                                                                                                                                                                                                                                                                                                                                                                                                                               
<title>Papaproject.com</title>
</head>
<center>
	<?php
	header("location:home.php")
?>
<!--
<body background ="picture/wallpaperflare.com_wallpaper.jpg"->

  <br>Welcome to User Page! <br><br>
  <table border="1" style="width: 300px">
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
</html>