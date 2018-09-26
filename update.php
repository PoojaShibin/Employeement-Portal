<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Media Monitoring</title>
</head>

<body>
<?php
session_start();
$a=$_SESSION["code"];
$in=$_POST['sin'];
$out=$_POST['sout'];
$off=$_POST['soff'];
$p=$_POST['pass'];
$pp=$_POST['phone'];
$mm=$_POST['mail'];

include 'connection.php';
	
$sql = "SELECT * FROM emp_detail where emp_code='$a'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
        $gg= $row["emp_stime"];
	}
}
		
  	
	$sql = "UPDATE `shift_time` SET `s_in`='$in',`s_out`='$out' WHERE s_grade='$gg'";
if ($con -> query($sql) === TRUE) {

   $qz = "SELECT s_grade FROM shift_time where s_in='".$in."' and s_out='".$out."'" ; 
   
 
    $re = mysqli_query($con,$qz);
   if($r=mysqli_fetch_array($re))
   {
	   $change=$r["s_grade"];
   }
   else
   {
	   echo"invalid user";
   } 
	
	
	$sql = "UPDATE `emp_detail` SET`emp_off`='$off',`s_grade`='$change',`password`='$p',`phone`='$pp',`email`='$mm' WHERE emp_code='$a'";
if ($con -> query($sql) === TRUE) {
    ?>   <script language="javascript">
	window.alert("Record Updated successfully");
	window.location='profile.php';
	</script> <?php
} else {
   ?>   <script language="javascript">
	window.alert("Error in Updating");
	window.location='profile.php';
	</script> <?php
}
	
	
	
	
} else {
    ?>   <script language="javascript">
	window.alert("Error in Updating");
	window.location='profile.php';
	</script> <?php
}


?>
</body>
</html>