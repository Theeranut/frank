<style>
	table 
	{
		
		border:0; 
		margin:auto; 
		width:400;
		margin-top:150px;
		border-collapse: collapse;
		width: 40%;
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

	
	</style>
<meta charset="UTF-8">
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
echo"<caption>"."Waste"."</caption>";
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
