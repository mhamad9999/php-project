

	<!-- #https://www.w3schools.com/php/func_filesystem_fgets.asp -->

				
					<?php

					$NAME=$_COOKIE['name'];
                    echo $_COOKIE['name'];

				$ip = "127.0.0.1";
				$username ="root";
				$password ="";
				$dbname ="assignment";

				$dbc = mysqli_connect($ip, $username, $password, $dbname);
				
				

		     //https://www.google.com/search?rlz=1C1CHBF_enIQ887IQ887&sxsrf=ALeKk00Q5Rf8yUtaC8JhVnYygVONlFgejQ%3A1605549727782&ei=n76yX_-mL46trgSmrpjoCA&q=how+to+fetch+multiple+column+from+database+in+php&oq=how+to+fetch+multiple+c+from+database+in+php&gs_lcp=CgZwc3ktYWIQARgBMgYIABAHEB4yBggAEAcQHjoHCAAQRxCwA1CaKVj5OGC9TmgBcAJ4AIABswGIAfwFkgEDMC41mAEAoAEBqgEHZ3dzLXdpesgBCMABAQ&sclient=psy-ab#kpvalbx=_FL-yX8LrH8bmrgTS5oHYCw19
				$sql = "SELECT * FROM t_tasks WHERE  `t_tasks`.`username` ='".$NAME."'";
               $result = mysqli_query($dbc,$sql);

               
               	echo "<table border ='1px'>";
               			echo "<thead>";  
       echo "<tr>"; 
           echo "<th><strong> ID </strong></th>"; 
           echo "<th><strong> Title </strong></th>"; 
           echo "<th><strong>Description </strong></th>"; 
           echo "<th><strong> Schedualed_date </strong></th>"; 
           echo "<th><strong> Due_date </strong></th>"; 
           echo "<th><strong> priority </strong></th>"; 
          
		echo "<tr>"; 
                while ($row = mysqli_fetch_array($result)) {

  
                 
                 $id =  $row[0];
                 $ttl =  $row[1];
				 $desc = $row[2];
				 $sch =  $row[3];
				 $due =  $row[4];
				 $pr =   $row[5];  
				$count=$row["count"];


		
              echo "</thead>";

				 echo "<tr>"; 
                 echo "<td> {$id} </td>";
				 echo "<td> {$ttl} </td>";
				 echo "<td> {$desc} </td>";
				 echo "<td> {$sch} </td>";
				 echo "<td> {$due} </td>";
				 echo "<td> {$pr} </td>";
				 echo "<td> {$count} </td>";

				  echo "</tr>"; 

				  }
 

			echo "</table>";

		
					?>
