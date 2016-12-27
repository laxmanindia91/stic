<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>
</head>

<body>

<form action="upload_file2.php" method="post" enctype="multipart/form-data">
<label for="name">Name:</label>
<input type="text" name="nameid" id="nameid"><br>
<label for="date">Date:</label>
<input type="text" name="datepicker" id="datepicker"><br>
<label for="image">Image:</label>
<input type="file" name="imageid" accept="image/jpeg/jpg/png/gif"><br>

<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
