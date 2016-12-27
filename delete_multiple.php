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

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

?>

<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td><form name="form1" method="post" action="">
<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td bgcolor="#FFFFFF">&nbsp;</td>
<td colspan="4" bgcolor="#FFFFFF"><strong>Delete multiple rows in mysql</strong> </td>
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF">#</td>
<td align="center" bgcolor="#FFFFFF"><strong>Id</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Username</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Password</strong></td>

</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>

<tr>
<td align="center" bgcolor="#FFFFFF"><input name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $rows['id']; ?>"></td>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['username']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['password']; ?></td>

</tr>

<?php
}
?>

<tr>
<td colspan="5" align="center" bgcolor="#FFFFFF"><input name="delete" type="submit" id="delete" value="Delete"></td>
</tr>

<?php

// Check if delete button active, start this
if($delete){
for($i=0;$i<$count;$i++){
$del_id = $checkbox[$i];
$sql = "DELETE FROM $tbl_name WHERE id='$del_id'";
$result = mysql_query($sql);
}

// if successful redirect to delete_multiple.php
if($result){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=delete_multiple.php\">";
}
}
mysql_close();
?>

</table>
</form>
</td>
</tr>
</table>
</body>
</html>
