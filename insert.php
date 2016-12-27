<?php
$n=$_POST['name'];
$c=$_POST['city'];
$conn = mysql_connect("localhost","root","") or die(mysql_error());
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  mysql_select_db("sticdb") or die(mysql_error());
  
mysql_query( $sql, $conn );
mysqli_query($con,"INSERT INTO Persons (name, city)
VALUES ($n, $c)");

mysqli_close($con);
echo "Data submit successfully";
?> 