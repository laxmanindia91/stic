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

// get value of id that sent from address bar
$id=$_GET['id'];

// Retrieve data from database
$sql="SELECT * FROM $tbl_name WHERE id='$id'";
$result=mysql_query($sql);

$rows=mysql_fetch_array($result);
?>


<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<form name="form1" method="post" action="update_ac.php">
<td>
<table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>&nbsp;</td>
<td colspan="3"><strong>Update data in mysql</strong> </td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
</tr>
<tr>

<td align="center"><strong>username</strong></td>

<td align="center"><strong>password</strong></td>
</tr>
<tr>

<td align="center">
<input name="username" type="text" id="usr" value="<?php echo $rows['username']; ?>">
</td>
<td>
<input name="password" type="text" id="email" value="<?php echo $rows['password']; ?>" size="15">
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>
<input name="id" type="hidden" id="id" value="<?php echo $rows['id']; ?>">
</td>
<td align="center">
<input type="submit" name="Submit" value="Submit">
</td>
<td>&nbsp;</td>
</tr>
</table>
</td>
</form>
</tr>
</table>

<?php
// close connection
mysql_close();
?>
</body>
</html>
