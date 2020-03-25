<html>
	<head>
		<meta charset="UTF-8">
		<title>Papaproject.com</title>
		<!--<link href="style.css" rel ="stylesheet">-->
		<style>
	h1
	{
		text-decoration: overline;
		letter-spacing: 5px;
		color:#243665;
	}
	body 
	{
		
		color:turquoise;

	}
	
	body 
	{
	  background-repeat: no-repeat;
	  background-attachment: fixed;  
	  background-size: cover;
	}
	div 
	{
		height: 150px;
		width: 400px;
		border: 2px solid black;
		align: center;
		margin: 200px; 
		background-color: #243665;
		padding-top: 50px;
		padding-bottom: 60px;
	}
	</style>
	</head>
		<body>
		<form method="POST" action="register.php" >
			<center>
			<h1>Register</h1>
			<table>
			<div>
				
				<label for="Name">Name: </label>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="txtName" required autofocus>
				<br><br>
	
				<label for="username">Username:&nbsp; </label>
				<input type="text" name="txtUsername" required autofocus>
				<br><br>
				
				
				<label for="password">Password: </label>
				&nbsp;
				<input type="password" name="txtPassword" required>
				<br><br>
				
				<label for="email"> E-mail: </label>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="email" name="email" placeholder="example@domain.com" required>
				<br><br>
				
				<input type="submit" value="Register">
				
		</form>
			<br><br><br>
			<a href="login1.php">Back to Login page</a>
			</div>
			</table>
			</center>
		</body>
</html>