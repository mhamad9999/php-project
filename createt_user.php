

	<?php
				$ip = "127.0.0.1";
				$username ="root";
				$password ="";
				$dbname ="assignment";




				$dbc = mysqli_connect($ip, $username, $password, $dbname);
				
					
					// sql to create table
				   //https://www.mysqltutorial.org/mysql-date/#:~:text=MySQL%20uses%20yyyy%2Dmm%2Ddd,date%20the%20way%20you%20want.

					$sql = " CREATE TABLE IF NOT EXISTS assignment.t_users (
                        `id` int(11) NOT NULL AUTO_INCREMENT,
                        `username` varchar(30) NOT NULL UNIQUE,
                        `password` varchar(32) NOT NULL,
                        `firstname` varchar(50) NOT NULL,
                        `lastname` varchar(50) NOT NULL,
                        PRIMARY KEY (id)
                        
                      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
                      ";

					if (mysqli_query($dbc, $sql)) {
					  echo "Table t_users created successfully";
					} else {
					  echo "Error creating table: " . mysqli_error($dbc);
					} mysqli_close($dbc); 
					 header('Location: ./register'); exit;
 
					?>