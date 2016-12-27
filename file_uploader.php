<?php
// Image submitted by form. Open it for reading (mode "r")
$fp = fopen($_FILES['file_name']['tmp_name'], "r");
	
// If successful, read from the file pointer using the size of the file (in bytes) as the length.	 
if ($fp) {
     $content = fread($fp, $_FILES['file_name']['size']);
     $content = addslashes($content);
	 $content=mysql_real_escape_string($_FILES['$content']);
	 $conn=mysql_connect("localhost","root","") or die(mysql_error());
	 mysql_select_db("sticdb")
     // Add slashes to the content so that it will escape special characters.
     // As pointed out, mysql_real_escape_string can be used here as well. Your choice.		 
    
		
     // Insert into the table "table" for column "image" with our binary string of data ("content")	
	//$sql="Insert into testimage(image) Values('{$content}');";
     mysql_query("Insert into testimage(image) Values('$content')") or die(mysql_query());
	
	 
	 fclose($fp);
	 mysql_close($conn);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<h2>Uploaded File Info:</h2>
<ul>
<li>Sent file: <?php echo $_FILES['file_name']['name'];  ?>
<li>File size: <?php echo $_FILES['file_name']['size'];  ?> bytes
<li>File type: <?php echo $_FILES['file_name']['type'];  ?>
</ul>
</body>
</html>
