<?php
$servername = "mysql.hostinger.in";
$username = "u179622989_varma";
$password = "varma4175";
$dbname = "u179622989_varma";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$lat=$_GET["lat"];
$lang=$_GET["lang"];
$type=$_GET["type"];
$prob=$_GET["prob"];
$mno=$_GET["mno"];

$sql = "INSERT INTO location (lat,lang,type,prob,mno) VALUES ('$lat','$lang','$type','$prob','$mno')";

if (mysqli_query($conn , $sql)) {
    echo "submitted";
}
else {
    echo "Error";
}
mysqli_close($conn);
?>