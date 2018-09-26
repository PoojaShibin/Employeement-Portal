<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$job=$_REQUEST['job'];
$s=$_REQUEST['lv'];
$lid="";
$ltype="";
$lstart="";
$lend="";
$lday="";
$lreason="";
$b="";
$c="";
$d="";
$j="";
$bb="";
$email="";
$did="";
$hr="hr@ibc24.in";
$hod="";
$con=mysqli_connect("127.0.0.1","root","Raipur@123","media");

if(mysqli_connect_error())
{
	echo"failed to connect".mysqli_connect_error();
}
else
{

	$sql = "SELECT * FROM  leave_detail   lv  inner join emp_detail emp on  lv.eid=emp.eid inner join dept_detail dept on emp.dept_id=dept.dept_id  and lv.hod=1  and lv.hr=0 where lv.ll_id='$s'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
        $lid= $row["ll_id"];
		$ltype=$row["leave_type"];
		$lstart=$row["leave_from"];
		$lend=$row["leave_to"];
		$lday=$row["leave_days"];
		$lreason=$row["leave_reason"];
		$b=$row["emp_name"];
		$c=$row["emp_designation"];
		$d=$row["emp_off"];
		$j=$row["emp_code"];
        $bb=$row["dept_name"];
		$email=$row["email"];
		$did=$row["dept_id"];
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
}
$mmm=" Approved Leave To $b '$c' Of $bb of Media Monitoring Project  For $ltype of $lday days From $lstart  Due to '$lreason' with Leave Id = $lid";
// for approval
if($job == "a ")
{
	 
		$sql = "UPDATE `leave_detail` SET `hod`=1,`hr`=1 WHERE ll_id='$s'";
if ($con -> query($sql) === TRUE) {
 $tt=$email.','.$hod;
  $to=$tt;

$subject='Leave Approved';
$message=$mmm;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{
			
?>
    <script language="javascript">
	window.alert("Leave Granted");
	window.location='hr2.php';
	</script>
    
   
<?php
} 
else {
    ?>
     <script language="javascript">
	window.alert("Sorry Try Again");
	window.location='hr2.php';
	</script>
    <?php
	
}
}
else {
    ?>
     <script language="javascript">
	window.alert("Sorry Try Again");
	window.location='hr2.php';
	</script>
    <?php
	
}
}
else if($job=='b ')
{
	// for disapproval
		$sql = "UPDATE `leave_detail` SET `hod`=0  WHERE ll_id='$s'";
if ($con -> query($sql) === TRUE) {
$tt=$email.','.$hod;
  $to=$tt;
$subject='Leave Dispproved';
$message=$mmm;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{
			
?>
    <script language="javascript">
	window.alert("Leave Granted");
	window.location='hod2.php';
	</script>
    
   
<?php
} 
else {
    ?>
     <script language="javascript">
	window.alert("Sorry Try Again");
	window.location='hr2.php';
	</script>
    <?php
	
}
}
else {
    ?>
     <script language="javascript">
	window.alert("Sorry Try Again");
	window.location='hr2.php';
	</script>
    <?php
	
}
}

mysqli_close($con);
}


?>
</body>
</html>