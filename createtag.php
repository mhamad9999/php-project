

	<?php
				$ip = "127.0.0.1";
				$username ="root";
				$password ="";
				$dbname ="assignment";




				$dbc = mysqli_connect($ip, $username, $password, $dbname);
				
					
					// sql to create table
				   //https://www.mysqltutorial.org/mysql-date/#:~:text=MySQL%20uses%20yyyy%2Dmm%2Ddd,date%20the%20way%20you%20want.

				 





					$sql = "CREATE TABLE IF NOT EXISTS assignment.tags (
						`id` int(6) NOT NULL,
						`tag_name` varchar(50) NOT NULL
					  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
					  ";

					if (mysqli_query($dbc, $sql)) {
					  echo "tag created successfully";
					} else {
					  echo "Error creating tag: " . mysqli_error($dbc);
					} mysqli_close($dbc); 
						 header('Location: ./tags.php'); exit;

						

					?>