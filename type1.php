<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Media Monitoring</title>
</head>

<body>
<table>
<tr>
<?php
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") 
{
	$hint= $q;
   //$hint=include 'uuuu.php?job=$q';
}
else
{
	$hint=include 'uuu.php';
}
 
     ?>

</body>
</html>