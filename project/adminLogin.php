<!DOCTYPE html>
<html lang="en">
<head>
  <title>We Help You</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
	<div class="container-fluid" style="margin:0px auto;">
	<div class="jumbotron" align="center" style="background-color:skyblue;">
		<h1>We Help You</h1>
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="adminLogin.php">We Help You</a>
			</div>
			<div class="collapse navbar-collapse" id="example-navbar-collapse">
				<ul class="nav navbar-nav">
				<li><a href="adminLogin.php">Home</a></li>
				
				</ul>
				<ul class="nav navbar-nav navbar-right">
						<li><a href="php/logout.php"><span class="glyphicon glyphicon-log-out"></span>LogOut</a></li>
				</ul>
			</div>
		</nav>
	</div>
	</div>
</head>
<body style="background-color:#fff">
	<div class="row container-fluid" height="100%">
		<div class="col-lg-3" align="center">
			<p><b>Showing Requests</b></p>
			<?php
			session_start();
			if($_SESSION['sid']!=session_id())
			{
				header("location:../index.html");
			}
			$servername = "mysql.hostinger.in";
			$username = "u179622989_varma";
			$password = "varma4175";
			$dbname = "u179622989_varma";

			$conn = mysqli_connect($servername, $username, $password, $dbname);

			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$sql = "select lat,lang,type,prob,mno from location";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				echo "<div class='container'><div class='table-responsive'><table class='table'><tr><th>Type Of Vehicle</th><th>Problem</th><th>Mobile Number</th><th>View</th><th>Action</th></tr>";
				$var=1;
				while($row = mysqli_fetch_assoc($result)) {
					$loc=$row["lat"].",".$row["lang"];
					echo "<form name='frm' method='post' action='php/delete.php'><tr><td>".$row["type"]."</td><td>".$row["prob"]."</td><td>".$row["mno"]."</td><td><a href='loc.php?msg=$loc' target='_blank'>Get The Location</a></td><td><input type='hidden' name='mn' value='".$row['mno']."'/><input class='btn btn-info btn-danger' type='submit'  value='Cancel'/></tr></form>";
					$var+=1;
				}	
				echo "</table></div></div>";
			}
			else
				echo "No Records Found";
			mysqli_close($conn);
			?>
		</div>
	</div>
</body>