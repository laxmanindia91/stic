<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$n=$_POST["nameid"];
$d=$_POST["datepicker"];
$f=$_FILES["file"];
$image =file_get_contents($_FILES['file']['tmp_name']) ; 
$conn=mysql_connect("localhost","root","") or die("Could not connect". mysql_error());

mysql_select_db("sticdb");


if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 100000))
{
if ($_FILES["file"]["error"] > 0)
{
echo "File Error : " . $_FILES["file"]["error"] . "<br />";
}else {
echo "Name Entered: " . $n . "<br/>";
echo "Given Date : " . $d . "<br/>";
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
$fp = fopen($image, "r");
$content = fread($fp, filesize($fp));
$content = addslashes($content);
fclose($fp);
$sql="insert into TESTIMAGE values('$n','$d','$content')";

$result=mysql_query('$sql');
mysql_close($conn);
echo "Data upload successfully...";

?>
</body>
</html>
