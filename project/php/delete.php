<?php
$servername = "mysql.hostinger.in";
$username = "u179622989_varma";
$password = "varma4175";
$dbname = "u179622989_varma";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$del=$_POST["mn"];
$sql = "DELETE FROM location WHERE mno='".$del."'";
if(mysqli_query($conn, $sql)){
	header("location:../adminLogin.php");
}
mysqli_close($conn);
?>