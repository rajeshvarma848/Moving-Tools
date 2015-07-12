<?php
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
				echo "Showing Requests..";
				while($row = mysqli_fetch_assoc($result)) {
					$loc=$row["lat"].",".$row["lang"];
					echo "".$row["type"]." ".$row["prob"]." ".$row["mno"]."";
				}	
		
			}
			else
				echo "No Records Found";
			mysqli_close($conn);
			?>