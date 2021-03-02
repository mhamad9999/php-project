


			<?php

					$ip = "127.0.0.1";
				$username ="root";
				$password ="";
				$dbname ="assignment";
				$NAME=$_COOKIE['name'];

				$dbc = mysqli_connect($ip, $username, $password, $dbname);
				
				

		 
				 
				  $tagva= $_POST['tagv'];
				  $tagid= $_POST['ide'];
				  $dbc = mysqli_connect($ip, $username, $password, $dbname);

				  $sql = "SELECT * FROM t_tasks WHERE  `t_tasks`.`username` ='".$NAME."' AND `t_tasks`.`id` = $tagid ";
				 $result = mysqli_query($dbc,$sql);
				 $num=0;
				 while ($row = mysqli_fetch_array($result)) {
				$num=$num+1;
				 }

   
			// sql to update a record
				  //https://stackoverflow.com/questions/27302605/an-error-when-i-add-a-variable-to-a-string
				  if($num==1){
			    $sql = "INSERT INTO tags(id,tag_name) values(".$tagid.",'".$tagva."')"; 
                


						  
					 if (mysqli_query($dbc, $sql)) {
						  echo "Record added successfully";
						} else {
						  echo "Error adding record: " . mysqli_error($dbc);
						}

						mysqli_close($dbc);
						
					
					}else{
						var_dump(http_response_code(501));
					}
     
					?>