<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$_SESSION['name'] = $name;
$_SESSION['city'] = $city;;

try
{
$conn = mysql_connect("localhost","root","") or die(mysql_error());

if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$sql = 'INSERT INTO persons(name,city) VALUES("' $name' ", "'$city'");';
//VALUES ("'" . $firstname . "',". "'" . $lastname . "',". "'" . $gender . "'," . "'" . $Console .")";
//$sql="INSERT INTO persons(". "name, city". " ) VALUES (" . "'" . $name . "',"  . "'" . $city . "',")";

mysql_select_db("sticdb") or die(mysql_error());
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not entered data: ' . mysql_error());
}
else {
		echo "Values entered.";
	 }
	 }
	 catch(Exception $exc)
	{
		exit("Connection failed: " . $exc->getMessage());
	}
?>
<?php
session_destroy();
?> 
</body>
</html>
