<?php

error_reporting(E_ALL);

				ob_start();
				$ip = "127.0.0.1";
				$username ="root";
				$password ="";
				$dbname ="assignment";




				$dbc = mysqli_connect($ip, $username, $password, $dbname);

			
				  $uname= $_POST['uname'];
				 $passwd = $_POST['pass'];
				 $pas=md5($passwd);
		         $sql = "SELECT password,username from t_users";// for selecting after delete
				$result = mysqli_query($dbc,$sql);
                 while ($row = mysqli_fetch_assoc($result)) {
                	            
                	   
                	   	if ($row['username'] === $uname ) {
                	   		if ($row['password'] === $pas) {
								setcookie('name', $uname, time() + (86400 * 2), "/"); 
  								setcookie('pass', $pas, time() + (86400 * 2), "/"); 
								echo "go";
							//	header('Location: home.html');
                          exit;
                	   	}  
                	   		
}  

		}   	 ?>
