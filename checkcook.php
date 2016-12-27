<?php
$expire=time()+60*60*24*30;
setcookie("user", "cookieuser", $expire);

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form name="f1" method="post" action="cookiedisplay.php">
Username:
<input type="text" name="usr" size="20" id="usr"/>
<input type="submit" value="display"/>
</form>
</body>
</html>
