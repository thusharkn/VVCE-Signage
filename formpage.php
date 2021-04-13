
<!DOCTYPE html>
<html>
<head>	
<title>Enter Message</title>
 
<style>
	body{
		
	background-image: url("https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.F7WzLLh0cZQKXujhrs_1VwHaEK%26pid%3DApi&f=1");
	background-size: cover;
	background-repeat: no-repeat;
		font-family:Arial, Helvetica, sans-serif;
		font-size: 28px;
	}
	.container{margin: 2 auto;}
	h2{line-height:20px;font-size:28px;}
	textarea{display:block;width:500px;height: 500px;font-size: 20px;margin:25px 3;}
	button{background:green; border:2px blue;width:200px;height:45px;color:#ffffff;}

</style>
 
 
</head>	
<body>
<img width="150px" height="150px" align="left" src="https://vvce.ac.in/wp-content/uploads/2020/03/vvce-logo.png">
<img width="150px" height="150px" align="right" src="https://drive.google.com/file/d/1v-7mjjvuSOGOGdTP29YCuen-tsVKK88l/view">
<div class="container" align="center">
	<h2>Message Input page</h2>
	<hr color="green" size="3px" align="center" width="200px">
	<form action="" method="post">
		<textarea cols="40" placeholder="Enter your message here" rows="8" name="mssg" required></textarea>
		<br>
		<button type="submit" name="submit">Submit</button>
	</form>
	<br><br>
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
 
if(isset($_POST['submit']))
{
	$mssg	= $_POST['mssg'];
	$sql = "INSERT INTO notice (mssg) values ('".$mssg."')";
	
	$result = mysqli_query($conn, $sql);
	
	if($result)
	{
	header("Location: http://192.168.0.106/success.html");
	die();
	}
	else
	{
		echo "Unable to save post";
	}
	
}
	?>
</div>	
</body>
</html>
 
