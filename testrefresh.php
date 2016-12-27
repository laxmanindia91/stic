<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title>Disable F5 Key In IE & Mozilla</title>

   <script language="JavaScript">
	function disableEnterKey(e)
	{
	     var key;
	 
	     if(window.event)
	          key = window.event.keyCode;     //IE
	     else
	          key = e.which;     //firefox
	 
	     if(key == 13)
	          return false;
	     else
	          return true;
	}
	</script>

</head>
<body>
<input type="text" name="mytext" onKeyPress="return disableEnterKey(event)">
</body>
</html>