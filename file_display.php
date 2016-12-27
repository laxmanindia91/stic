<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table border="1" cellspacing="0" cellpadding="0">
<tr>
<td>ID</td><td>Name</td><td>Date</td><td>Image</td>
</tr>
<?php
 //include "file_constants.php";
 // just so we know it is broken
 //error_reporting(E_ALL);
 // some basic sanity checks
 	
     //connect to the db
     $link = mysql_connect("localhost", "root", "") or die("Could not connect: " . mysql_error());

     // select our database
     mysql_select_db("sticdb") or die(mysql_error());

     // get the image from the db
	 //$sql = "SELECT id,name,date,image FROM testimage;";
	 $sql2="SELECT TESTIMAGE.name,MEMBERS.id FROM TESTIMAGE INNER JOIN members ON testimage.id=members.id ORDER BY members.username;";
     
     // the result of the query
     $result = mysql_query($sql2) or die("Invalid query: " . mysql_error());

     // set the header for the image
     //header("Content-type: image/jpeg");
     while($row = mysql_fetch_array($result)){
	 
			echo "<tr>";
        				echo "<td>" . $row['id'] . "</td>";
        				echo "<td>" . $row['name'] . "</td>";
    					//echo "<td>" . $row['id'] . "</td>";
						
						//echo "<td>" . base64_encode($row['image']) . "</td>";
						//echo "<td>";
						//echo '<img src="data:image/jpg/png/gif;base64,' . base64_encode( $row['image'] ) . '" />';
						//echo "</td>";
						

			echo "</tr>";
			}					


     // close the db link
     mysql_close($link);
?>
</table>
</body>
</html>
