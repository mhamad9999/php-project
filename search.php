

		<?php


				$ip = "127.0.0.1";
				$username ="root";
				$password ="";
				$dbname ="assignment";




				$dbc = mysqli_connect($ip, $username, $password, $dbname);
				
					// sql to create table

					
					$NAME=$_COOKIE['name'];

				
				 $ttl = $_GET['Title'];
				 $desc = $_GET['Description'];
				 $sch = $_GET['Schedualed_date'];
				 $due = $_GET['Due_date'];
				 $pr = $_GET['priority'];
				 $tag = $_GET['tag'];
				 $sql = " SELECT   t_tasks.id , t_tasks.Title, t_tasks.Description, t_tasks.Schedualed_date, t_tasks.Due_date, t_tasks.priority ,tags.tag_name FROM tags INNER JOIN t_tasks ON tags.id = t_tasks.id WHERE (t_tasks.Title = '".$ttl."') 
				 OR (t_tasks.Description = '".$desc."') 
				 OR (t_tasks.Schedualed_date = '".$sch."') 
				 OR (t_tasks.Due_date = '".$due."')
				 OR (tags.tag_name = '".$tag."')
				 OR (t_tasks.priority = '".$pr."') 
				 AND (t_tasks.username = '".$NAME."')";  

						//https://www.codeproject.com/Questions/1233256/What-can-I-do-to-fix-warning-mysqli-fetch-array-ex
				 $result = mysqli_query($dbc,$sql) or die( mysqli_error($dbc));

               
               		echo "<table border ='1px'>";
               			echo "<thead>";  
       echo "<tr>"; 
           echo "<th><strong> ID </strong></th>"; 
           echo "<th><strong> Title </strong></th>"; 
           echo "<th><strong>Description </strong></th>"; 
           echo "<th><strong> Schedualed_date </strong></th>"; 
           echo "<th><strong> Due_date </strong></th>"; 
           echo "<th><strong> priority </strong></th>"; 
		   echo "<th><strong> tag </strong></th>"; 

        echo "<tr>"; 
                while ($row = mysqli_fetch_array($result)) {

  
                 
                 $id =  $row[0];
                 $ttl =  $row[1];
				 $desc = $row[2];
				 $sch =  $row[3];
				 $due =  $row[4];
				 $pr =   $row[5];  
				 $tg =   $row[6]; 


		
              echo "</thead>";

				 echo "<tr>"; 
                 echo "<td> {$id} </td>";
				 echo "<td> {$ttl} </td>";
				 echo "<td> {$desc} </td>";
				 echo "<td> {$sch} </td>";
				 echo "<td> {$due} </td>";
				 echo "<td> {$pr} </td>";
				 echo "<td> {$tg} </td>";

				  echo "</tr>"; 

				  }
 

			echo "</table>";

		?>

		
			 
</body>
</html>