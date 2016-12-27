<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
//$stat = stat('D:\WorkSpace\Reports Weekly\2014\Weekly Report-Dec-30-Jan-5.xlsx');
$filename='D:\WorkSpace\Reports Weekly\2014\Weekly Report-Dec-30-Jan-5.xlsx';
//echo 'Acces time: ' .$stat['fileatime'];
echo '<br />Access time: ' . fileatime($filename);
echo "<br/>Last modified: ".date("Y-m-d" . " h:i:s",filemtime($filename));
echo '<br />Modification time: ' .filemtime($filename);
//echo '<br />Device number: ' .$stat['dev'];
?> 
</body>
</html>
