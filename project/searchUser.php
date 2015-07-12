<?php
	$servername = "mysql.hostinger.in";
	$username = "u179622989_varma";
	$password = "varma4175";
	$dbname = "u179622989_varma";

	$conn = mysqli_connect($servername, $username, $password, $dbname) or die(mysqli_error());
	
	$mno = $_GET['mno'];
	$sql = "SELECT lat,lang FROM location WHERE mno='$mno'";
	$result = mysqli_query($conn,$sql); 
	if( mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo "".$row["lat"].",".$row["lang"]."";
		}
	}
	else
		echo "error";
	mysqli_close($conn);
?>