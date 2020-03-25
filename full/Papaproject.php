<html>
<style>
h1
{
	margin-top:200px;
	
	color:#243665;
	padding: 4px;
	
}
table 
	{
		border:0; 
		margin-top:100px; 
		width:400;
		border-collapse: collapse;
		width: 80%;
	}
td 
	{
		border: 2px solid black;
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
li a.active 
	{
	background-color: #243665;
	color: turquoise;
	padding: 5%;
	}
li a:hover:not(.active)
	{
	background-color: turquoise;
	color: black;
	padding: 3%;
	}
.sidenav {
  height: 100%;
  width: 0px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: black;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 90px;
  
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 17px;
  color: turquoise;				/*สีตัวอักษรเมนูข้าง*/
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 17px;}
	
}
.navbar {
  overflow: hidden;
  background-color: black;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: turquoise;
  color: black;
 
}

.navbar a.active {
  background-color: #243665;
  color: turquoise;  
}
</style>
<div class="navbar">
	<a> <span style="font-size:16px;cursor:pointer" onclick="openNav()">&#9776; open</span></a>
  <a href="home.php" >Home</a>
  <a href="News.php">News</a>
  <a href="Contact.php">Contact</a>
</div>

<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" 
class="closebtn" 
onclick="closeNav()">&times;</a>

  <!--#news คือ url-->
  <li><a href="Papaproject.php"class="active">Papaproject</a></li>
  <li><a href="Project map.php">Project Map</a></li>
  <li><a href="Datagarbage.php">Data about bin</a></li>
  <li><a href="afwaste.php">Waste</a></li>

</div>
<h1 align = 'center'>This Papaproject page  coming soon</h1>

<div style="margin-left:20%;padding:1px 16px;height:600px;">
<?php
echo".........................................................................................................................................................................................................................................................................";




?>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>

</html>