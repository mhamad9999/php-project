<?php
header('Access-Control-Max-Age: 86400'); 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: DELETE");

				$ip = "127.0.0.1";
				$username ="root";
				$password ="";
				$dbname ="assignment";
				$json = file_get_contents('php://input');
                $data = json_decode($json);	
				$datas= file_get_contents('php://input');
				$spl = explode("=", $datas);
				$dt= $spl[1];
				$dbc = mysqli_connect($ip, $username, $password, $dbname);
				$NAME=$_COOKIE['name'];

				$sql = "SELECT * FROM t_tasks WHERE id=$dt AND  `t_tasks`.`username` ='".$NAME."'";
				$result = mysqli_query($dbc,$sql);
				$num=0;
				while ($row = mysqli_fetch_array($result)) {
					$num=$num+1;
				}
				if($num ==1){
				// sql to delete a record
					  $sql = "DELETE FROM t_tasks WHERE id=$dt AND  `t_tasks`.`username` ='".$NAME."'";
	
	
				if (mysqli_query($dbc, $sql)) {
	  echo "<h1>Record deleted successfully</h1>";
	  //header('Location: delete task .html');
	
	} else {
	  echo "Error deleting record: ";
	}
	
	//mysqli_close($dbc);
				// Converts it into a PHP object

	
			}else {
				var_dump(http_response_code(501));

			}
					?>