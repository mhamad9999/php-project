
			<?php
header('Access-Control-Max-Age: 86400'); 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUTCH");
				$ip = "127.0.0.1";
				$username ="root";
				$password ="";
				$dbname ="assignment";
				$json = file_get_contents('php://input');
                $data = json_decode($json);	
				$datas= file_get_contents('php://input');
				$NAME=$_COOKIE['name'];

				// https://stackoverflow.com/questions/5696412/how-to-get-a-substring-between-two-strings-in-php
				$datas = strstr($datas, "ide="); 
				$datas = strstr($datas, "&value", true); 
				$val= file_get_contents('php://input');
				$val = strstr($val, "value="); 
				$val = strstr($val, "&col", true); 
				$col= file_get_contents('php://input')."tawaw";
				$col = strstr($col, "col="); 
				$col = strstr($col, "tawaw", true); 
				$value = explode("=", $val);
				$col = explode("=", $col);
				$datas = explode("=", $datas);


				$sql = "SELECT * FROM t_tasks WHERE  `t_tasks`.`username` ='".$NAME."' AND `t_tasks`.`id` =  ".$datas[1];
				$dbc = mysqli_connect($ip, $username, $password, $dbname);

			   $result = mysqli_query($dbc,$sql);
			  
			   if($row=mysqli_fetch_array($result)){
			   $num=$row["count"]+1;

				
			
				 



			// sql to update a record
				  //https://stackoverflow.com/questions/27302605/an-error-when-i-add-a-variable-to-a-string

                  $sql = " UPDATE t_tasks SET ".$col[1]." = '".$value[1]."' ,count= ".$num."  WHERE id=".$datas[1];


			if (mysqli_query($dbc, $sql)) {
				?>

  <h2>Record update successfully<h2>

  <?php
} else {
  echo "<h2>Error update record: </h2>" . mysqli_error($dbc);
}

mysqli_close($dbc);

}else{
	var_dump(http_response_code(501));
} 
					?>
			
			
	