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
        $a= $row["emp_id"];
		$b=$row["emp_name"];
		$c=$row["emp_designation"];
		$d=$row["emp_off"];
		$e=$row["dept_id"];
    	$bb=$row["dept_name"];
		$email=$row["email"];
		
    }
} else 
{
    echo "0 results";
}

//echo "<br>".$b."<br>".$c."<br>".$d."<br>".$e."<br>".$bb."<br>".$email."<br>".$a;
	
$s=$_POST['sdate'];

$reason=$_POST['reason'];
	$type="Half Day Leave";
$mmm="Respected  Sir  I $b   Designation $c ,Department is $bb of Media Monitoring Project  Requesting $type on $s due to '$reason'.Please Grant Me Leave with Leave Id = $leaveid";
	$pmm="Your Leave Request Has Been Registered Please look forward For Approval/Dissapproval mail. Your Leave Id  Is '$leaveid'";
if($e==6 || $e==7)
{
	

	//for hod and hr
	
$sql = "INSERT INTO `leave_detail`(`emp_id`, `leave_type`, `leave_from`, `leave_days`, `leave_reason`,`hod`,`ll_id`) VALUES ('$a','$type','$s','1','$reason',1,'$leaveid')";

if ($con->query($sql) === TRUE) {
		$to='poojaraj9421@gmail.com';
$subject='Leave Request';
$message=$pmm;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{

}
else 
{
}
		$to='pooja.raj@sbdigicom.com';
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
  
//echo $a."<br>".$type."<br>".$s."<br>".$reason."<br>".$leaveid;	
}

}











else
{
// for employee	
	
$sql = "INSERT INTO `leave_detail`(`emp_id`, `leave_type`, `leave_from`,`leave_days`,  `leave_reason`,`ll_id`) VALUES ('$a','$type','$s','1','$reason','$leaveid')";

if ($con->query($sql) === TRUE) 
{
		$to='poojaraj9421@gmail.com';
$subject='Leave Request';
$message=$pmm;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{

}
else 
{
}
		$to='pooja.raj@sbdigicom.com';
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
else
{
}
}













mysqli_close($con);
}

?>
</body>
</html>