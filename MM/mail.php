<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
//echo phpinfo();
// die();
$a=152;
//$mmm=' <a href="http://192.168.70.190/MM/gt.php?tktid='.$tid.'&&job=">Please Click on tle link to generate the ticket for the issuse</a> ';	
	

$to='pooja.raj@sbdigicom.com';
$subject='TICKET GENERATED';
$message='<a href="http://192.168.70.190/MM/gt.php?tktid='.$tid.'&&job=">Please Click on tle link to generate the ticket for the issuse</a> ';

if(mail($to,$subject,$message,$header))
{
	echo "mail send";
}
else
{
	echo "Mail Sending failed";
	
}
?>
</body>
</html>