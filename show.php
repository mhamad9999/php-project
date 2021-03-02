


<?php  

//https://www.webslesson.info/2016/04/fetch-data-from-two-or-more-table-join-using-php-and-mysql.html


$ip = "127.0.0.1";
				$username ="root";
				$password ="";
				$dbname ="assignment";

                    $NAME=$_COOKIE['name'];

 $dbc = mysqli_connect($ip, $username, $password, $dbname); 
$sql = " SELECT  tags.tag_name, t_tasks.Title, t_tasks.Description, t_tasks.Schedualed_date, t_tasks.Due_date, t_tasks.priority FROM tags INNER JOIN t_tasks ON tags.id = t_tasks.id WHERE  `t_tasks`.`username` ='".$NAME."'" ;  

 $result = mysqli_query($dbc, $sql);  
 ?><div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                               <th><strong> Title </strong></th>   
                               <th><strong> Description </strong></th> 
                               <th><strong> Schedualed_date </strong></th>  
                               <th><strong> Due_date </strong></th>  
                               <th><strong> priority </strong></th>
                               <th><strong> Tag </strong></th> 
                          </tr>  
                          <?php  
                        
                               while($row = mysqli_fetch_assoc($result))  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $row['Title'];?></td>  
                               <td><?php echo $row['Description']; ?></td>
                               <td><?php echo $row['Schedualed_date'];?></td>  
                               <td><?php echo $row['Due_date']; ?></td>  
                               <td><?php echo $row['priority']; ?></td>
                               <td><?php echo $row['tag_name']; ?></td>
                          </tr>  
                          <?php  
                               }  
                           
                          ?>  
                     </table>  
                </div>  
          

				
				