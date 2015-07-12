<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container-fluid">
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
					<a class="navbar-brand" href="index.html">We Help You :)</a>
				</div>
				<div class="collapse navbar-collapse" id="example-navbar-collapse">
					<ul class="nav navbar-nav">
					<li><a href="index.html">Home</a></li>
					<li><a href="help.html">Help</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
							<li><a href="registration.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="well col-md-offset-7" align="center">
			<form class="form-sign-in" name='frm' action="php/login.php" method='post'>
				<h1 class="form-signin-heading" >LOG-IN</h1>
				<div class="form-group">
					<input  class="form-control" type="text" name="un" placeholder="User Name"/></br>
				</div>
				<div class="form-group">
					<input class="form-control" type="password" name="pass" name="password" placeholder="password"/></br>
				</div>
				<div class="form-group">
					<input type="submit"  class="btn btn-info btn-lg"name="submit" value="LogIn" /><br>
				</div>
				<?php
					if(isset($_GET['msg']))
					{
						$mes = $_GET['msg'];
						echo '<p style="color:red">';
						echo $mes;
						echo '</p>';
					}
				?>
				<a href="registration.html"> not a user? click me to register </a>
			</form>
		</div>
		</div>
	</body>
</html>