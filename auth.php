<?php
error_reporting(0); 
error_reporting(E_ALL);

				ob_start();
				$ip = "127.0.0.1";
				$username ="root";
				$password ="";
				$dbname ="assignment";




				$dbc = mysqli_connect($ip, $username, $password, $dbname);
                $sql='SELECT * FROM `t_users` WHERE `t_users`.`username` =\''.$_COOKIE['name'].'\';';
				$result = mysqli_query($dbc, $sql);
				$row =$result->fetch_assoc();
				if(mysqli_num_rows ( $result ) == 1){
                    echo "ok";
                	}
			
				
                	
                	   		
 	 ?>
