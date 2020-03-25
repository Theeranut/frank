<?php 
	session_start(); 
	if (!isset($_SESSION['UserID'])) 
	{
	header ("Location: index.php");
	} 
 
	require 'connectdb.php';
	$session_UserID = $_SESSION['UserID']; 
	$qry_user = "SELECT * FROM login_and_register WHERE UserID='$session_UserID'"; 
	$result_user = mysqli_query($dbcon,$qry_user); 
 
	if ($result_user) 
	{
	 $row_user = mysqli_fetch_array($result_user, MYSQLI_ASSOC); 
	 $s_login_username = $row_user['Username']; $row_user['login_email'] 
	 $s_login_email = mysqli_free_result ($result_user); 
	 mysqli_close ($dbcon);
	}	
?> 
<!DOCTYPE html> 
<html> 
	<head> 
	<meta charset="UTF-8"> 
	<title></title> 
	</head> 
		<body> 
			<?php 
			echo "ID member ".$_SESSION['UserID'];
			echo "<br>"; 
			echo "Your welcome! $s_login_username Email $s_login_email";
			?> 
			<hr>
			<a href="logout.php">logout</a> 
		</body> 
</html>