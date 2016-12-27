<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
//Page: set_cookie.php
//$_SERVER['HTTP_HOST'] = 'http://www.example.com ';
// localhost create problem on IE so this line
// to get the top level domain
$myDomain = ereg_replace('^[^.]*.([^.]*).(.*), '1.2', $_SERVER['HTTP_HOST']);
$setDomain = ($_SERVER['HTTP_HOST']) != "localhost" ? " .$myDomain" : false;
setcookie ("site", 'localhost', time()+3600*24*(2), '/', "$setDomain", 0 );
// You can change (2) to any negative value (-2) for deleting it. It is number of days for cookie to keep live. Any -ve number will tell browser that it is useless now.
?>
</body>
</html>
