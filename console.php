<html>
<head>
	<title>Console</title>
	<style>
body {
	background-image: url("https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fmedia.istockphoto.com%2Fvectors%2Fan-abstract-light-blue-and-white-wavy-background-vector-id165974199%3Fk%3D6%26m%3D165974199%26s%3D612x612%26w%3D0%26h%3DF7FizU90s29vl_PI9VzPeKvO1IVDce-j64CvvUiFrJU%3D&f=1&nofb=1");
	background-size: cover;
	background-repeat: no-repeat;
	font-family: Arial, Helvetica, sans-serif;
     }
div { 
	font-size: 35px;
	font-family: Arial, Helvetica, sans-serif;
}
	</style>
</head>
<body>
	<img width="150px" height="150px" align="left" src="https://vvce.ac.in/wp-content/uploads/2020/03/vvce-logo.png">
	<H1 align="center">VIDYAVARDHAKA COLLEGE OF ENGINEERING</h1>
	<hr width="800">
<div>
	<h2 align ="center">Notice:</h2>
<?php 
$host = "localhost";
$user = "vvce";
$pass = "electromagnetic";
$db = "test";
 
$conn = mysqli_connect($host,$user,$pass, $db);
if(!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "SELECT mssg FROM notice ORDER BY ID DESC LIMIT 1;";
$result = mysqli_query($conn,$sql);
 
//for single row
$singleRow = mysqli_fetch_row($result);
 
print_r($singleRow[0]);	
?>
</div>
</body>
</html>

