<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
//set where you want to store files
//in this example we keep file in folder upload
//$HTTP_POST_FILES['ufile']['name']; = upload file name
//for example upload file name cartoon.gif . $path will be upload/cartoon.gif

$path= "uploads/".$HTTP_POST_FILES['ufile']['name'];
if($ufile !=none)
{
if(copy($HTTP_POST_FILES['ufile']['tmp_name'], $path))
{
echo "Successful<BR/>";

//$HTTP_POST_FILES['ufile']['name'] = file name
//$HTTP_POST_FILES['ufile']['size'] = file size
//$HTTP_POST_FILES['ufile']['type'] = type of file

echo "File Name :".$HTTP_POST_FILES['ufile']['name']."<BR/>";
echo "File Size :".$HTTP_POST_FILES['ufile']['size']."<BR/>";
echo "File Type :".$HTTP_POST_FILES['ufile']['type']."<BR/>";
echo "<img src=\"$path\" width=\"150\" height=\"150\">";
}
else
{
echo "Error";
}
}
?>
</body>
</html>
