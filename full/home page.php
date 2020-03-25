<html>
<style>
h1
{
	text-indent: 250px;
	background-color: #243665;
	text-align: center;
	color:turquoise;
	padding: 4px;
	
}
table 
	{
		border:0; 
		margin-top:100px; 
		width:400;
		border-collapse: collapse;
		width: 100%;
	}
td 
	{
		border: 1px solid #dddddd;
		text-align: center;
		padding: 8px;
	}
tr:nth-child(even) 
	{
		background-color: #dddddd;
	}	
body 
	{
  margin: 0;
	}	
ul
	{
	list-style-type: none;
	margin: 0;
	padding: 0;
	width: 20%;
	background-color: #f1f1f1;			
	position: fixed;
	height: 100%;
	overflow: auto;
	}
li a 
	{
	font-size: 30px;
	display: block;
	color: #243665;
	padding: 8px 16px;
	text-decoration: none;
	}
li a.active 
	{
	background-color: #243665;
	color: white;
	}
li a:hover:not(.active)
	{
	background-color: turquoise;
	color: white;
	}
</style>	
<body>
<head>
</head>
<ul>
 
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
<h1>Data about bin</h1>
<div style="margin-left:25%;padding:1px 16px;height:1000px;">
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
	//echo "Connected successfully";

	$query = "SELECT * FROM `waste` WHERE 1 ";
	$result = $dbcon->query($query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 

echo "<table >";
echo "<tr align='center'   bgcolor='#243665' ><td>Zone</td><td>No</td><td>Waste(kg)</td><td>Percentage</td><td>Time</td>";
while($row = $result->fetch_assoc()) 
{ 
  echo "<tr>";
  echo "<td>" .$row["Zone"] .  "</td> "; 
  echo "<td>" .$row["No"] .  "</td> ";  
  echo "<td>" .$row["Waste(kg)"] .  "</td> ";
  echo "<td>" .$row["Percentage"] .  "</td> ";
  echo "<td>" .$row["Time"] .  "</td> ";
  echo "</tr>";
}
echo "</table>";
//5. close connection
$dbcon->close();
?>

</div>

</body>
</html>
