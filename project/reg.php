<?php
$servername = "mysql.hostinger.in";
$username = "u179622989_varma";
$password = "varma4175";
$dbname = "u179622989_varma";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$uname=$_GET["uname"];
$pass=$_GET["pass"];
$mno=$_GET["mno"];

$sql = "INSERT INTO register (uname,pass,mno)
VALUES ('$uname','$pass','$mno')";

if (mysqli_query($conn , $sql)) {
    echo "Registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>