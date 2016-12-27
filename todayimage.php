<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>


<?php

$today=date();

// Find what today is? using date function
echo $today;

if($today==Monday){
echo "Today is Monday";
echo "<BR>";
echo "<img src='images/image1.gif'>";
}

elseif($today==Tuesday){
echo "Today is Tuesday";
echo "<BR>";
echo "<img src='images/image2.gif'>";
}

elseif($today==Wednesday){
echo "Today is Wednesday";
echo "<BR>";
echo "<img src='images/image3.gif'>";
}

elseif($today==Thursday){
echo "Today is Thursday";
echo "<BR>";
echo "<img src='images/image4.gif'>";
}

elseif($today==Friday){
echo "Today is Friday";
echo "<BR>";
echo "<img src='images/image5.gif'>";
}

elseif($today==Saturday){
echo "Today is Saturday";
echo "<BR>";
echo "<img src='images/image6.gif'>";
}

elseif($today==Sunday){
echo "Today is Sunday";
echo "<BR>";
echo "<img src='images/image7.gif'>";
}

?>

</body>
</html>
