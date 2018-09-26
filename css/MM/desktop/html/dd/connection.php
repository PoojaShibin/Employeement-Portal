<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
// Connects to my Database
global $con;
$con= mysqli_connect("127.0.0.1","root","") or die ("could not connect to mysql"); 
mysqli_select_db($con, "desktop") or die ("no database"); 
?> 
</body>
</html>