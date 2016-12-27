<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$n=$_GET["name"];
$d=$_GET["date"];
$f=$_FILES["file"];
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 100000))
{
if ($_FILES["file"]["error"] > 0)
{
echo "File Error : " . $_FILES["file"]["error"] . "<br />";
}else {
echo "Name Entered: " . $_GET["name"]. "<br/>";
echo "Name Entered: " . $_GET["date"]. "<br/>";
echo "Upload File Name: " . $_FILES["file"]["name"] . "<br />";
echo "File Type: " . $_FILES["file"]["type"] . "<br />";
echo "File Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />"; 
echo "File Description:: ".$_POST['description']."<br />";

if (file_exists("images/".$_FILES["file"]["name"]))
{
echo "<b>".$_FILES["file"]["name"] . " already exists. </b>";
}else
{
move_uploaded_file($_FILES["file"]["tmp_name"],"images/". $_FILES["file"]["name"]);
echo "Stored in: " . "images/" . $_FILES["file"]["name"]."<br />";
?>
Uploaded File:<br>
<img src="images/<?php echo $_FILES["file"]["name"]; ?>" alt="Image path Invalid" >
<?php
}
}
}else
{
echo "Invalid file detail ::<br> file type ::".$_FILES["file"]["type"]." , file size::: ".$_FILES["file"]["size"];
}
?>
</body>
</html>
