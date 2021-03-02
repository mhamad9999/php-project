

	<?php
				$ip = "127.0.0.1";
				$username ="root";
				$password ="";
				$dbname ="assignment";




				$dbc = mysqli_connect($ip, $username, $password, $dbname);
				
					
					// sql to create table
				   //https://www.mysqltutorial.org/mysql-date/#:~:text=MySQL%20uses%20yyyy%2Dmm%2Ddd,date%20the%20way%20you%20want.

					$sql = " CREATE TABLE IF NOT EXISTS assignment.t_tasks (
					id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
					Title VARCHAR(30) NOT NULL, 
					Description VARCHAR(256) NOT NULL,
					Schedualed_date Date NOT NULL,
					Due_date Date NOT NULL,
					Priority VARCHAR(5) NOT NULL,
					username VARCHAR(30) NOT NULL,
					count int(6) NOT NULl DEFAULT 0

					)";

					if (mysqli_query($dbc, $sql)) {
					  echo "Table t_tasks created successfully";
					} else {
					  echo "Error creating table: " . mysqli_error($dbc);
					} mysqli_close($dbc); 
					 header('Location: ./create'); exit;
 
					?>