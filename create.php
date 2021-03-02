
		<?php


				$ip = "127.0.0.1";
				$username ="root";
				$password ="";
				$dbname ="assignment";
				$NAME=$_COOKIE['name'];




				$dbc = mysqli_connect($ip, $username, $password, $dbname);
				
					// sql to create table

					

				
				 $ttl = $_POST['Title'];
				 $desc = $_POST['Description'];
				 $sch = $_POST['Schedualed_date'];
				 $due = $_POST['Due_date'];
				 $pr = $_POST['priority'];
				 
				
				$sql = "INSERT INTO t_tasks(Title, Description, Schedualed_date, Due_date, Priority,username) values('".$ttl."','".$desc."','".$sch."','".$due."','".$pr."','".$NAME."')"; 

				if(mysqli_query($dbc, $sql)){

					die ("New record added");
				} 
					
					echo "error:".mysqli_error($dbc);
				
			 ?>
