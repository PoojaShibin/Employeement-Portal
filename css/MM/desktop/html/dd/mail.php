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
$to='pooja.raj@sbdigicom.com';
$subject='TICKET GENERATED';
$message=' send from localhost';
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{
	echo "Mail Send";
}
else
{
	echo "Mail Sending failed";
	
}
?>
</body>
</html>