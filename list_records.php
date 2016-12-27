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

$sql="SELECT * FROM $tbl_name order by id";
$result=mysql_query($sql);
?>

<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>
<table width="400" border="1" cellspacing="0" cellpadding="3">
<tr>
<td colspan="4"><strong>List data from mysql </strong> </td>
</tr>

<tr>
<td align="center"><strong>id</strong></td>
<td align="center"><strong>username</strong></td>
<td align="center"><strong>password</strong></td>
<td>Action</td>
</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>

<tr>
<td><?php echo $rows['id']; ?></td>
<td><?php echo $rows['username']; ?></td>
<td><?php echo $rows['password']; ?></td>

<td align="center"><a href="update.php?id=<?php echo $rows['id']; ?>">update</a></td>
</tr>

<?php
}
?>

</table>
</td>
</tr>
</table>

<?php
mysql_close();
?>

 
</body>
</html>
