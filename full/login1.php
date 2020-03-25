<html>
	<head>
	<link rel ="icon" href = "favicon.ico" type ="image/x-icon"> 
	<title>Papaproject.com</title>
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
		padding-top: 40px;
		padding-bottom: -20px;
	}
	</style>
	</head>
		<body>
			<form name="form1" method="post" action="check_login.php">
			<center><br>
			<h1>Login</h1>
			<div>
				<table>
				<tbody>
					<tr><br>
					<td class="topic"> &nbsp;Username<br><br></td>
					<td>
					<input name="txtUsername" type="text" id="txtUsername"><br><br>
					</td>
					</tr>
					<tr>
					<td class="topic"> &nbsp;Password</td>
					<td>
					<input name="txtPassword" type="password" id="txtPassword">
					</td>
					</tr>
				</tbody>
				</table>
				</br>
				<input type="submit" size"60px" name="Submit" value="Login">
				<br><br><br><br><br>
				<a href="frm_register.php">Register</a>
			</div>
			</form>
			</center>
		</body>
</html>




