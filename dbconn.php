<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php

$con = mysql_connect("localhost","root","") or die(mysql_error());
if (!$con)
  {
  die('Could not connect: ' . mysql_error($con));
  }

mysql_select_db("sticdb");
$sql="SELECT * FROM testajax";

$result = mysql_query($sql);

echo "<table border='1'>
<tr>
<th>Column Data </th>
<th>Column Data </th>
<th>Column Data </th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['col1'] . "</td>";
  echo "<td>" . $row['col2'] . "</td>";
  echo "<td>" . $row['col3'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?> 
</body>
</html>
