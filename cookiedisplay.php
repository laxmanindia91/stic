<html>
<body>

<?php
$uu=$_POST['usr'];
if (isset($_COOKIE["user"]))
  echo "Welcome " . $_COOKIE["user"] . "!<br>";
else
  echo "Welcome guest!<br>" . $uu;
   echo "form variables" . document.forms;
?>

</body>
</html>