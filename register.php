<?php
				$ip = "127.0.0.1";
				$username ="root";
				$password ="";
				$dbname ="assignment";

				$dbc = mysqli_connect($ip, $username, $password, $dbname);
				

				 $un = $_POST['un'];
				 $pass = $_POST['pass'];
				 $fn = $_POST['first_name'];
				 $ln = $_POST['last_name'];
				  $passs=md5($pass);
				
				$sql = "INSERT INTO t_users(username,password,firstname, lastname) values('".$un."','".$passs."','".$fn."','".$ln."')"; 


				if(mysqli_query($dbc, $sql)){
					$new=mysqli_insert_id($dbc);
					die ("New record added".$new);
				} else{
					
					echo "error:".mysqli_error($dbc);
				}
			?>
		