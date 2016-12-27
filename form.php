<html>
<head>
<script type="text/javascript">
function validate(){
var filevalue=document.getElementById("file").value;
var description=document.getElementById("description").value;
if(filevalue=="" || filevalue.length<1){
alert("Select File.");
document.getElementById("file").focus();
return false;
}
if(description=="" || description.length<1){
alert("File Description must not be blank.");
document.getElementById("description").focus();
return false;
}

return true; 
}
</script> 
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
<body >
<h2 align="center" >File Upload</h2>
<!--<form action="file_upload.php" method="post"-->
<form action="file_upload2.php" method="post"
enctype="multipart/form-data" onSubmit="return validate()" >
<table align="center" >
<tr>
<td><label for="name">Name:</label></td>
<td><input type="text" name="nameid" id="nameid"></td>
</tr>
<tr>
<td><label for="date">Date:</label></td>
<td><input type="text" name="datepicker" id="datepicker"><br></td>
</tr>
<tr>
<td><label for="file">File:</label></td>
<td><input type="file" name="file" id="file" /></td>
</tr>
<tr>
<td><label >File Description:</label></td>
<td><input type="text" name="description" id="description" /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit" value="Submit" /></td>
</tr>
<table>
</form>
</body>
</html>