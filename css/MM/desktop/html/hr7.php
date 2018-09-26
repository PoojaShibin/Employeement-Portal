<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$job=$_REQUEST['job'];
$con=mysqli_connect("127.0.0.1","root","Raipur@123","media");

if(mysqli_connect_error())
{
	echo"failed to connect".mysqli_connect_error();
}
else
{

	
	
	
	$sql = "UPDATE `emp_detail` SET `emp_del`= 1 WHERE eid=$job";
if ($con -> query($sql) === TRUE) {
    ?>   <script language="javascript">
	window.alert("Record Deleted successfully");
	window.location='emprecord.php';
	</script> <?php
} else {
   ?>   <script language="javascript">
	window.alert("Error in Deleting");
	window.location='emprecord.php';
	</script> <?php
}
mysqli_close($con);
}


?>

</body>
</html>