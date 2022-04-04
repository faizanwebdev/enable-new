<?php
 $connect = mysqli_connect("localhost","root","","enable");

// Check connection
if (!$connect)
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
?>