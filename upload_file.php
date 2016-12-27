<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['submit']))
{
$name=$_POST['nameid'];
$date=$_POST['datepicker'];
//$image = addslashes(file_get_contents($_POST['imageid'])); //SQL Injection defence!
//$image_name = addslashes($_FILES['image']);
$imagefile=$_POST['imageid'];
//$fp = fopen( $imagefile, 'r' );
//$content = fread($fp, filesize($imagepath));

$conn=mysql_connect("localhost","root","") or die("Could not connect". mysql_error());

mysql_select_db("sticdb");

$sql="insert into TESTIMAGE values('$name','$date')";

$result=mysql_query('$sql');

if(!$result)
	{
		echo "Updation fails and check some errors";
	}
else
	{
	echo "Data upload successfully";
	}
}

?>
</body>
</html>
