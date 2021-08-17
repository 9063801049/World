<?php
$k=$_POST['id'];
$k=trim($k);
$conn=mysqli_connect("fdb32.awardspace.net","3865939_db","Nani@116","3865939_db");
$sql="select * from covidcases1 where Country='{$k}'";
$res=mysqli_query($conn,$sql);
while($rows=mysqli_fetch_array($res)){

?>
        <tr>
                <td><?php echo $rows['Country']; ?></td>
                <td><?php echo $rows['Total_Cases']; ?></td>
                <td><?php echo $rows['Active_Cases']; ?></td>
                <td><?php echo $rows['Deceased']; ?></td>
                <td><?php echo $rows['Recovered']; ?></td>
         </tr>
         
 <?php
 }
 echo $sql
 ?>
 
