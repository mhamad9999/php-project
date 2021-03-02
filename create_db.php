


	<?php
				$ip = "127.0.0.1";
				$username ="root";
				$password ="";
				$dbname ="";




				$dbc = mysqli_connect($ip, $username, $password, $dbname);
				
					
					// sql to create table
				   //https://www.mysqltutorial.org/mysql-date/#:~:text=MySQL%20uses%20yyyy%2Dmm%2Ddd,date%20the%20way%20you%20want.

					$sql = " CREATE DATABASE IF NOT EXISTS assignment";

					if (mysqli_query($dbc, $sql)) {
					  echo "db assignment created successfully";
					} else {
					  echo "Error creating table: " . mysqli_error($dbc);
					} mysqli_close($dbc); 
					 header('Location: ./index'); exit;
 
					?>