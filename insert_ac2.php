<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="sticdb"; // Database name
$tbl_name="members"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form
$n=$_POST['name'];
$p=$_POST['pass'];

// Insert data into mysql
$sql="INSERT INTO $tbl_name(username, password) VALUES('$n', '$p')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='insert2.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?>

<?php
// close connection
mysql_close();
?>
</body>
</html>
