<?php
	
	$servername = "mysql.hostinger.in";
	$username = "u179622989_varma";
	$password = "varma4175";
	$dbname = "u179622989_varma";

	$conn = mysqli_connect($servername, $username, $password, $dbname) or die(mysqli_error());
	if (!$conn)
	{
    die("Connection failed: " . mysqli_connect_error());
}
$fname=$_POST["fn"];
$lname=$_POST["ln"];
$uname=$_POST["un"];
$pass=$_POST["pass"];
$mno=$_POST["mn"];
$email=$_POST["email"];
$sql = "INSERT INTO adminreg(uname,pass,fname,lname,mno,email) VALUES ('$uname','$pass','$fname','$lname','$mno','$email')";

if (mysqli_query($conn , $sql)) 
{
    header("location:../logins.php?msg='Registraion Successful'");
}
else
{
    header("location:../registration.html");
}

mysqli_close($conn);
?>