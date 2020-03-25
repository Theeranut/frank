<html>
<head>
<title>
</title>
</head>
<body>
<?php
$host = "localhost";
$username = "root";
$password = "Nung8338";
$login = mysql_connect($host,$username,$password);

if($login)
{
	echo "MySQL Connected";
}
else
{
	echo "MySQL Connect Failed : Error : ".mysql_error();
}

mysql_close($login);
?>
</body>
</html>