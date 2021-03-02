<?php
echo "<table border ='1px'>";
echo "<thead>";  
echo "<tr>"; 
echo "<th><strong> ID </strong></th>"; 

echo "<th><strong> tag </strong></th>"; 
echo "</thead>";
	$ip = "127.0.0.1";
    $username ="root";
    $password ="";
    $dbname ="assignment";
    $NAME=$_COOKIE['name'];

    $dbc = mysqli_connect($ip, $username, $password, $dbname);
    
    $sql = "SELECT * FROM t_tasks WHERE  `t_tasks`.`username` ='".$NAME."'";
    $result = mysqli_query($dbc,$sql);

    $number=0;
    while ($row = mysqli_fetch_array($result)) {
      $number=$number+1;
      $id=$row['id'];
   
      $sqll = " SELECT * FROM `tags` WHERE `tags`.`id`=".$id;          
       $resultt = mysqli_query($dbc,$sqll);


   
 while ($roow = mysqli_fetch_array($resultt)) {


  
  $idd =  $roow["id"];
  $tagvaa =   $roow['tag_name']; 






  echo "<tr>"; 
  echo "<td> {$idd} </td>";

  echo "<td> {$tagvaa} </td>";

   echo "</tr>"; 

   }

  }
echo "</table>";


echo $number;
?>
