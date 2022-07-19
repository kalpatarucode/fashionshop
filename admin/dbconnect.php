<?php
 $db = mysqli_connect("localhost", "root", "", "fashionshop");
  
 // Check connection
 if($db === false){
     die("ERROR: Could not connect. "
         . mysqli_connect_error());
 }

?>