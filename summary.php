

<?php  
$ip = "127.0.0.1";
				$username ="root";
				$password ="";
				$dbname ="assignment";
                    $NAME=$_COOKIE['name'];

 $dbc = mysqli_connect($ip, $username, $password, $dbname); 
$sql = " SELECT Title, count FROM t_tasks WHERE  `t_tasks`.`username` ='".$NAME."' ORDER BY  `t_tasks`.`count` DESC  limit 5 " ;  
 $result_ex = mysqli_query($dbc, $sql);  

 $sqll = " SELECT * FROM t_tasks WHERE  `t_tasks`.`username` ='".$NAME."' "; 
 $result_id = mysqli_query($dbc, $sqll); 
 ?>

 <h1><?php echo $NAME;?></h1>
  <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                               <th class="text-center"><strong> tages per Task </strong></th>  
                             

                               
                          </tr>  
                          <?php
 while($anjam = mysqli_fetch_assoc($result_id))  {
     $ip = "127.0.0.1";
     $username ="root";
     $password ="";
     $dbname ="assignment";
     $dbcc = mysqli_connect($ip, $username, $password, $dbname); 

     $sqlll = "SELECT * FROM `tags` WHERE `tags`.`id`=".$anjam['id']; 
     $resul_num = mysqli_query($dbcc, $sqlll); 
     $number=0;  
     while($roww = mysqli_fetch_assoc($resul_num)) 
    
{
   $number=  $number+1; }
  
                             
                          ?>  
                          <tr>  
                          <td class="text-center"><?php echo $anjam['Title'];?></td>
                          <td class="text-center"><?php echo $number;?></td>

                          </tr>  
                          
                   
                     <?php

 }

 ?>    </table>  

                              
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                               <th class="text-center"><strong> Title </strong></th>  
                               <th class="text-center"><strong> Nums Of Edited </strong></th>  


                               
                          </tr>  
                          <?php  
                        
                               while($row = mysqli_fetch_assoc($result_ex))  
                               {  
                          ?>  
                          <tr>  
                          <td class="text-center"><?php echo $row['Title'];?></td>
                          <td class="text-center"><?php echo $row['count'];?></td>

                          </tr>  
                          <?php  
                               }  
                           
                          ?>  
                     </table>  
                     <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                               <th class="text-center"><strong> Title </strong></th>  
                             
                               <th class="text-center"><strong> Expired Task </strong></th>  

                               
                          </tr>
                     <?php
 $sqll = "SELECT * FROM `t_tasks`  WHERE `t_tasks`.`username` ='".$NAME."' ORDER BY `t_tasks`.`Due_date` ASC limit 5 " ;  
 $resul_count = mysqli_query($dbc, $sqll);  
 while($row = mysqli_fetch_assoc($resul_count))  
 {  
?>  
<tr>  
<td class="text-center"><?php echo $row['Title'];?></td>
<td class="text-center"><?php echo $row['Due_date'];?></td>

</tr>  
<?php  
 }  

?>  


             </table>      </div>  
        
           <br />  


				
				