<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$a="";
$b="";
$c="";
$d="";
$e="";
$bb="";
$email="";
$mmm="";
$date="0000-00-00";
$hod="";
$hr="";
	$ii=randomDigits(3);

function randomDigits($length)
{
$numbers = range(0,9);
shuffle($numbers);
$digits = "";
for($i = 0;$i < $length;$i++)
$digits .= $numbers[$i];
return $digits;
}



$leaveid="LID00$ii";
$job=$_REQUEST['job'];
//var $a,$b,$c,$d,$e;
session_start();
$cod=$_SESSION["code"];
$con=mysqli_connect("127.0.0.1","root","Raipur@123","media");

if(mysqli_connect_error())
{
	echo"failed to connect".mysqli_connect_error();
}
else
{


	
$sql = "SELECT * FROM emp_detail emp inner join dept_detail dept on emp.dept_id=dept.dept_id and  emp_code='$cod'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
                $a= $row["eid"];
		$b=$row["emp_name"];
		$c=$row["emp_designation"];
		$d=$row["emp_off"];
		$e=$row["dept_id"];
    	        $bb=$row["dept_name"];
		$email=$row["email"];
if($row["dept_id"]==4 || $row["dept_id"]== 8 || $row["dept_id"]==3)
{
$hod='sharadindu.shekhar@ibc24.in';
$hr='hr@ibc24.in';
}
else if($row["dept_id"]==1)
{
$hod='Kishore.Karmakar@ibc24.in';
$hr='hr@ibc24.in';
}

		
    }
} else 
{
    echo "0 results";
}



	if($job=='a')
	{
//$ss=$_POST['sdate'];
//$ee=$_POST['endate'];
$s=$_POST['sdate'];
$e=$_POST['endate'];
$date1=date_create($s);
$date2=date_create($e);
$diff=date_diff($date1,$date2);
$dayy=$diff->format("%a");
$day=$dayy+1;

//$day=$_POST['days'];
$reason=$_POST['reason'];
$type="Full Day Leave";
$mmm="Respected  Sir  I $b   Designation $c ,Department is $bb of Media Monitoring Project  Requesting $type from $s to $e  of $day day due to '$reason'.Please Grant Me Leave with Leave Id = $leaveid";
$pmm="Your Leave Request Has Been Registered Please look forward For Approval/Dissapproval mail. Your Leave Id  Is '$leaveid'";
if($e==6 || $e==7)
{
	

	//for hod and hr

	
$sql = "INSERT INTO `leave_detail`( `emp_id`, `leave_type`, `leave_from`, `leave_to`, `leave_days`, `leave_reason`,`hod`,`ll_id`) VALUES ('$a','$type','$s','$e','$day','$reason',1,'$leaveid')";

if ($con->query($sql) === TRUE) 
{
$to=$email;
$subject='Leave Request';
$message=$pmm;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{

}
else 
{
}
$to=$hr;
$subject='Leave Request';
$message=$mmm;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{
			
?>
    <script language="javascript">
	window.alert("New record created successfully");
	window.alert("<?php echo $leaveid;?>");
	window.location='empdata.php';
	</script>
    
   
<?php
} 
else {
    ?>
     <script language="javascript">
	window.alert("Sorry Try Again");
	window.location='leave.php';
	</script>
    <?php
	
}
}
else {
    ?>
     <script language="javascript">
	window.alert("Sorry Try Again");
	window.location='leave.php';
	</script>
    <?php
	
}

}
else
{
// for employee
$sql = "INSERT INTO `leave_detail`( `emp_id`, `leave_type`, `leave_from`, `leave_to`, `leave_days`, `leave_reason`,`ll_id`) VALUES ('$a','$type','$s','$e','$day','$reason','$leaveid')";

if ($con->query($sql) === TRUE)
{
$to=$email;
$subject='Leave Request';
$message=$pmm;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{

}
else 
{
}
$to=$hod;
$subject='Leave Request';
$message=$mmm;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{
			
?>
    <script language="javascript">
	window.alert("New record created successfully");
	window.alert("<?php echo $leaveid;?>");
	window.location='empdata.php';
	</script>
    
   
<?php 
}
else 
{
    ?>
     <script language="javascript">
	window.alert("Sorry Try Again");
	window.location='leave.php';
	</script>
    <?php
	
}
}
else 
{
    ?>
     <script language="javascript">
	window.alert("Sorry Try Again");
	window.location='leave.php';
	</script>
    <?php
	
}

	}}
	////////////////////////////////////////////////////////////////////part a completed//////////////////////////////////////////////////
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	else if($job=='b')
	{
		echo $a;
	
$s=$_POST['sdate'];

$reason=$_POST['reason'];
	$type="Half Day Leave";
$mmm="Respected  Sir  I $b   Designation $c ,Department is $bb of Media Monitoring Project  Requesting $type on $s due to '$reason'.Please Grant Me Leave with Leave Id = $leaveid";
	$pmm="Your Leave Request Has Been Registered Please look forward For Approval/Dissapproval mail. Your Leave Id  Is '$leaveid'";
if($e==6 || $e==7)
{
	

	//for hod and hr
	
$sql = "INSERT INTO `leave_detail`(`emp_id`, `leave_type`, `leave_from`,`leave_to`, `leave_days`, `leave_reason`,`hod`,`ll_id`) VALUES ('$a','$type','$s','$date','1','$reason',1,'$leaveid')";

if ($con->query($sql) === TRUE) {
		$to=$email;
$subject='Leave Request';
$message=$pmm;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{

}
else 
{
}
		$to=$hr;
$subject='Leave Request';
$message=$mmm;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{

} 
else
{
}
			
?>
    <script language="javascript">
	window.alert("New record created successfully");
	window.alert("<?php echo $leaveid;?>");
	window.location='empdata.php';
	</script>
    
   
<?php
}
else {
  
	
}

}
else
{
// for employee	
	
$sql = "INSERT INTO `leave_detail`(`emp_id`, `leave_type`, `leave_from`,`leave_to`, `leave_days`, `leave_reason`,`hod`,`ll_id`) VALUES ('$a','$type','$s','$date','1','$reason',1,'$leaveid')";

if ($con->query($sql) === TRUE) {
		$to=$email;
$subject='Leave Request';
$message=$pmm;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{

}
else 
{
}
		$to=$hod;
$subject='Leave Request';
$message=$mmm;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{

} 
else
{
}
			
?>
    <script language="javascript">
	window.alert("New record created successfully");
	window.alert("<?php echo $leaveid;?>");
	window.location='empdata.php';
	</script>
    
   
<?php
}
else {
 
	
}
}
   }
   ////////////////////////////////////////////part b completed/////////////////////////////////////////////////////////////
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   else if($job=='c')
	{
	
$s=$_POST['nf'];
$reason=$_POST['reason'];
	$type="NH/FH  Duty";

$mmm="Respected  Sir  I $b   Designation $c ,Department is $bb of Media Monitoring Project  Requesting $type on $s due to '$reason'.Please Grant Me Leave with Leave Id = $leaveid";
$pmm="Your Leave Request Has Been Registered Please look forward For Approval/Dissapproval mail. Your Leave Id  Is '$leaveid'";

		
if($e==6 || $e==7)
{
	

	//for hod and hr
	

$sql = "INSERT INTO `leave_detail`( `emp_id`, `leave_type`, `leave_from`,`leave_to`,`leave_days`,  `leave_reason`,`hod`,`ll_id`) VALUES ('$a','$type','$s','$date','1','$reason',1,'$leaveid')";

if ($con->query($sql) === TRUE) {
		$to=$email;
$subject='Leave Request';
$message=$pmm;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{

}
else 
{
}
		$to=$hr;
$subject='Leave Request';
$message=$mmm;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{

} 
else
{
}
			
?>
    <script language="javascript">
	window.alert("New record created successfully");
	window.alert("<?php echo $leaveid;?>");
	window.location='empdata.php';
	</script>
    
   
<?php
}
else {
 
	
}
}
else
{
// for employee	
	
	
$sql = "INSERT INTO `leave_detail`( `emp_id`, `leave_type`, `leave_from`,`leave_to`,`leave_days`,  `leave_reason`,`hod`,`ll_id`) VALUES ('$a','$type','$s','$date','1','$reason',1,'$leaveid')";

if ($con->query($sql) === TRUE) {
		$to=$email;
$subject='Leave Request';
$message=$pmm;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{

}
else 
{
}
		$to=$hod;
$subject='Leave Request';
$message=$mmm;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{

} 
else
{
}
			
?>
    <script language="javascript">
	window.alert("New record created successfully");
	window.alert("<?php echo $leaveid;?>");
	window.location='empdata.php';
	</script>
    
   
<?php
}
else {
  
	
}
}
   }
   ///////////////////////////////////////////////////////part c completed////////////////////////////
   
   
   
   
   
   
   
   
   
   
   
else if($job=='d')
	{
	
$s=$_POST['sdate'];

$reason=$_POST['reason'];
	$type="OFF Duty";
$mmm="Respected  Sir  I $b   Designation $c ,Department is $bb of Media Monitoring Project  Requesting $type on $s due to '$reason'.Please Grant Me Off Duty Work Permission with Leave Id = $leaveid";

$pmm="Your Leave Request Has Been Registered Please look forward For Approval/Dissapproval mail. Your Off Duty Work Request  Id  Is '$leaveid'";

			
if($e==6 || $e==7)
{
	

	//for hod and hr
	
	
$sql = "INSERT INTO `leave_detail`( `emp_id`, `leave_type`, `leave_from`,`leave_to`,`leave_days`, `leave_reason`,`hod`,`ll_id`) VALUES ('$a','$type','$s','$date','1','$reason',1,'$leaveid')";

if ($con->query($sql) === TRUE) {
		$to=$email;
$subject='Off Duty Work Resqust';
$message=$pmm;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{

}
else 
{
}
$to=$hr;
$subject='Off Duty Work Request';
$message=$mmm;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{

} 
else
{
}
			
?>
    <script language="javascript">
	window.alert("New record created successfully");
	window.alert("<?php echo $leaveid;?>");
	window.location='empdata.php';
	</script>
    
   
<?php
}
else {
   
}
}
else
{
// for employee	
	
	
$sql ="INSERT INTO `leave_detail`( `emp_id`, `leave_type`, `leave_from`,`leave_to`,`leave_days`, `leave_reason`,`hod`,`ll_id`) VALUES ('$a','$type','$s','$date','1','$reason',1,'$leaveid')";

if ($con->query($sql) === TRUE) {
	$to=$email;
$subject='Off Duty Work Resqust';
$message=$pmm;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{

}
else 
{
}
$to=$hod;
$subject='Off Duty Work Request';
$message=$mmm;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{

} 
else
{
}
			
?>
    <script language="javascript">
	window.alert("New record created successfully");
	window.alert("<?php echo $leaveid;?>");
	window.location='empdata.php';
	</script>
    
   
<?php
}
else {
   
	
}

}

   }















mysqli_close($con);
}




?>
</body>
</html>