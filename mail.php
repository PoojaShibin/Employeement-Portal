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
$a='Ticket No $no has been generated for isssuse $byreason  on $tdate .After solving problem To close the ticket please click on the given link  <a href="http://127.0.0.1/Desktop/gt.php?tktid=7">Please Click on tle link to close the ticket for the issuse</a>';
$to='pooja.raj@sbdigicom.com';
$subject='TICKET GENERATED';
$message=$a;
$headers .= "MIME-Version: 1.0\r\n";
//Set the content-type to html
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

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