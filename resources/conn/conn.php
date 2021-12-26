<?php

$connection = mysqli_connect('localhost' , 'veda_moola' , 'aprilday23' , 'laravel');

$query = "SELECT * FROM posts";

    
$result = mysqli_query($connection, $query);
while( $row = mysqli_fetch_array($result)) {

 $i =0;
    

 if($i%2 == 0) {
     echo "<tr>";
 } ?>
 <td><?php echo $row['title']?></td> 
                         
                     
                         
 <td><?php echo $row['description']?></td>

 <td><button>Delete</button></td>

 <?php
 if($i%3 == 2) {
     echo "</tr>";
 }
  $i++;
 
   
 


} 



?>