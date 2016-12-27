<?php
session_start();
$timeout = 1; // Set timeout minutes
$timeout = $timeout * 60; // Converts minutes to seconds
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv='refresh' content='15'; url='window.parent.location='http://localhost/stic/check_login.php''>
<title>Login Success</title>
</head>

<body>
<html>
<body>
Login Successful!
<br/>
<br/>
<hr/>
<br/>

<?php
if (isset($_SESSION['timeout'])) 
{
    $session_life = time() - $_SESSION['timeout'];
    if ($session_life > $timeout) 
    {
        session_destroy();
        header("Location: login.php?msg=timeout");
        exit(); // LOOK AT THIS LINE
        // echo '<script language="javascript">'; 
                    // echo 'window.location.replace("login.php");';
                    // echo '</script>';
    }
}
$_SESSION['timeout'] = time();
echo "Username:<b>" . $_SESSION['usr'] . "</b>";
echo "<br/>Username:<b>" . $_SESSION['pss'] . "</b>";
?>

<hr/>
<br/><br/><a href="main_login.php" onclick="<?php session_destroy();?>"/>Logout</a>
</body>
</html>
