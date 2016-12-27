<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php   
error_reporting(0);
//$fs=fopen("text1.txt", "r");
//$ft=fopen("text2.txt", "a");
$fs2=fopen("text1.txt","r");
$ft2=fopen("uplodads/text2.txt","a");


if ($fs2==NULL)
{
    echo "Can't Open Source File ...";
    exit(0);
}

if ($ft2==NULL)
{
    echo "Can't Open Destination File ...";
    fclose ($fs2);
    exit(1);
}

else
{
    //while ($ch=fgets($fs))
        //fputs($ft, $ch);
		copy('$fs2', '$ft2');

    fclose ($fs2);
    fclose ($ft2);
}

//echo "File Handling successfully ...";
echo "file copied successfully";
?>


</body>
</html>
