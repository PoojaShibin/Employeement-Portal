<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$job=$_REQUEST['job'];
$tkt=$_REQUEST['tkt'];
include 'connection.php';
function randomDigits($length){
$numbers = range(0,9);
shuffle($numbers);
$digits = "";
for($i = 0;$i < $length;$i++)
$digits .= $numbers[$i];
return $digits;
}
//////////////////////////////////////////////Ticket generation//////////////////////////////
if($job==1)
{
	$byy=$_REQUEST['by'];        
 $ii=randomDigits(5);


$no='TKT'.$ii;


$by="";
$bydept="";
$bydate="";
$byreason="";
$through="";
$mail="";
$throughtmail="";
$tdate=date("Y-m-d");

$sql="Select * from tkt t inner join emp e on t.eid=e.eid where t.tid=$tkt";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
$by=$row["name"];
$bydept=$row["tdept"];
$bydate=$row["date"];
$byreason=$row["treason"];
$mail=$row["email"];

	}
}

$sql="Select * from  emp where eid=$byy";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
$through=$row["name"];
$throughtmail=$row["email"];


	}
}

$m1="Your Complaint has been registered. And Your Ticket no. is $no";
$m2='A complain from $by of $bydept is Registered  on $bydate with ticket no $no for issuse ( $byreason ) and is looking forward by $through.To Check Complain list please click on given link <a href="http://127.0.0.1/Desktop/search.php?id=1">To Check List Of Complaints</a>';
$m3='Ticket No $no has been generated for isssuse $byreason  on $tdate .After solving problem To close the ticket please click on the given link <a href="http://192.168.70.156/resolve.php?tktid=$tkt">Please Click on tle link to close the ticket for the issuse</a>';







$sql = "UPDATE `tkt` SET `tno`='$no',`tkt_gen`=1,`tkt_close_who`='$through'  WHERE tid=$tkt";

if ($con->query($sql) === TRUE)
{
	
$to=$mail;
$subject='Ticket Generated';
$message=$m1;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{
}
else
{	
}
/*
$to='Kishore.Karmakar@ibc24.in';
$subject='Ticket Generated';
$message=$m2;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{
}
else
{	
}
*/	
$to=$throughtmail;
$subject='Ticket Generated';
$message=$m3;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{
}
else
{	
}

	 ?>
   <script type="text/javascript">
   window.alert("Ticket Generated Successfully!!");
   window.location="reg.php?job=";
   </script><?php 
}
else
{
	 ?>
   <script type="text/javascript">
    window.alert("Sorry Some Error Occured");
   window.alert("<?php  echo("Error description: " . mysqli_error($con));?>");
   window.location="reg.php?job=";
   </script><?php 
}
















}
///////////////////////////////////////////////Ticket generation ends/////////////////////////



//////////////////////////////////////////////Ticket Close starts///////////////////////////
else if($job==2)
{
	
$by="";
$bydept="";
$bydate="";
$byreason="";
$through="";
$mail="";
$no="";
$throughtmail="";
$tdate=date("Y-m-d");

$sql="Select * from tkt t inner join emp e on t.eid=e.eid where t.tid=$tkt";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
		$no=$row["tkt"];
$by=$row["name"];
$bydept=$row["tdept"];
$bydate=$row["date"];
$byreason=$row["treason"];
$mail=$row["email"];
$through=$row["tkt_close_who"];

	}
}



$m1='Your Complaint has been Resolved Please give your valuable rating for the issuse <a href="http://127.0.0.1/Desktop/rating.php?tktid=$tkt">Please Click on tle link to close the ticket for the issuse</a>';
$m2='Ticket No $no has been closed for isssuse $byreason  on $tdate by $through.To Check Complain list please click on given link <a href="http://127.0.0.1/Desktop/search.php?id=1">To Check List Of Complaints</a> ';
$m3='Ticket No $no has been closed for isssuse $byreason  on $tdate by $through.To Check Complain list please click on given link <a href="http://127.0.0.1/Desktop/search.php?id=1">To Check List Of Complaints</a>';








$sql = "UPDATE `tkt` SET `tkt_close`=1 WHERE tid=$tkt";

if ($con->query($sql) === TRUE)
{
	
$to=$mail;
$subject='Ticket Closed';
$message=$m1;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{
}
else
{	
}
/*
$to='Kishore.Karmakar@ibc24.in';
$subject='Ticket Closed';
$message=$m2;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{
}
else
{	
}
*/	
$to=$throughtmail;
$subject='Ticket Closed';
$message=$m3;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{
}
else
{	
}

	 ?>
   <script type="text/javascript">
   window.alert("Ticket Closed Successfully!!");
   window.location="reg.php?job=";
   </script><?php 
}
else
{
	 ?>
   <script type="text/javascript">
    window.alert("Sorry Some Error Occured");
   window.alert("<?php  echo("Error description: " . mysqli_error($con));?>");
   window.location="reg.php?job=";
   </script><?php 
}
}
/////////////////////////////////////////////Ticket Close ends//////////////////////////////



////////////////////////////////////////////////Rating start///////////////////////////////

else if($job==3)
{
	$r=$_POST['r'];
	$review=$_POST['review'];
	if($r=="")
	{
		$r='satisfied';
	}
$by="";
$bydept="";
$bydate="";
$byreason="";
$through="";
$mail="";
$no="";
$throughtmail="";
$tdate=date("Y-m-d");

$sql="Select * from tkt t inner join emp e on t.eid=e.eid where t.tid=$tkt";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
		$no=$row["tkt"];
$by=$row["name"];
$bydept=$row["tdept"];
$bydate=$row["date"];
$byreason=$row["treason"];
$mail=$row["email"];
$through=$row["tkt_close_who"];

	}
}


$m2='Ticket No $no  Review is $review and User is $r .To Check Complain list please click on given link <a href="http://127.0.0.1/Desktop/search.php?id=1">To Check List Of Complaints</a>';
$m3='Ticket No $no  Review is $review and User is $r.To Check Complain list please click on given link <a href="http://127.0.0.1/Desktop/search.php?id=1">To Check List Of Complaints</a>';








$sql = "UPDATE `tkt` SET `rating`='$r',`review`='$review'  WHERE tid=$tkt";

if ($con->query($sql) === TRUE)
{
	

/*
$to='Kishore.Karmakar@ibc24.in';
$subject='Ticket Closed Reviews';
$message=$m2;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{
}
else
{	
}
*/	
$to=$throughtmail;
$subject='Ticket Closed Reviews';
$message=$m3;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{
}
else
{	
}

	 ?>
   <script type="text/javascript">
   window.alert("Ticket Closed Successfully!!");
   window.location="reg.php?job=";
   </script><?php 
}
else
{
	 ?>
   <script type="text/javascript">
    window.alert("Sorry Some Error Occured");
   window.alert("<?php  echo("Error description: " . mysqli_error($con));?>");
   window.alert("<?php  echo("Error description: " . mysqli_error($con));?>");
   window.location="reg.php?job=";
   </script><?php 
}
}
////////////////////////////////////////////////rating ends///////////////////////////////
?>
</body>
</html>