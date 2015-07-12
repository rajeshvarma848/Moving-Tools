<?php
	$servername = "mysql.hostinger.in";
	$username = "u179622989_varma";
	$password = "varma4175";
	$dbname = "u179622989_varma";

	$conn = mysqli_connect($servername, $username, $password, $dbname) or die(mysqli_error());
	session_start();
	if(isset($_SESSION['user']))
	{
		echo "user ".$_SESSION['user']."  already logged in<br/>";
		echo "<br/>Click here<a href='logout.php'>LogOut</a><br>";
	}
	else
	{
		if( !empty($_POST['un']) && !empty($_POST['pass']))
		{
			$UserID =$_POST['un'];
			$PIN = $_POST['pass'];
			$sql = "SELECT uname,pass FROM adminreg WHERE uname='$UserID'";
			$result = mysqli_query($conn,$sql); 
			if( mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					if($row["pass"] == $PIN)
					{
						$_SESSION['sid']=session_id();
						header("location:../adminLogin.php");
					}
					else
					{
						header("location:../logins.php?msg='username or password incorrect'");
					}
				}
			}
			else
			{	
				header("location:../logins.php?msg='username or password incorrect'");
			}
		}
	}
	mysqli_close($conn);
?>