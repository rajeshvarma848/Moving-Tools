<?php
$servername = "mysql.hostinger.in";
$username = "u179622989_varma";
$password = "varma4175";
$dbname = "u179622989_varma";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$user_name=$_GET["uname"];
$user_pass=$_GET["pass"];
$sql = "select pass from register where uname='$user_name'";
$result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        if($row["pass"]==$user_pass) {
			echo $row["pass"];
		}
		else
			echo "Please Register";
    }
}
else
	echo "Error";
mysqli_close($conn);
?>