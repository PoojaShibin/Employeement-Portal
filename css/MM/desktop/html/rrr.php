<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 

$a=$_POST['eid'];
$b=$_POST['opt'];

$con=mysqli_connect("127.0.0.1","root","Raipur@123","media");

if(mysqli_connect_error())
{
	echo"failed to connect".mysqli_connect_error();
}
else
{
if($b=='hr'||$b=='hod')
{
$sql = "INSERT INTO `right`( `eid`, `$b`,`att`) VALUES ($a,1,1)";

if ($con->query($sql) === TRUE) {
   ?>
          <script language="javascript">
	window.alert("Permission Granted successfully");
	window.location='right.php';
	</script>
        <?php
} else {
    ?>
          <script language="javascript">
	window.alert("Error in Giving Permission");
	window.location='right.php';
	</script>
       <?php
}

}
else
{	
$sql = "INSERT INTO `right`( `eid`, `$b`) VALUES ($a,1)";

if ($con->query($sql) === TRUE) {
   ?>
          <script language="javascript">
	window.alert("Permission Granted successfully");
	window.location='right.php';
	</script>
        <?php
} else {
    ?>
          <script language="javascript">
	window.alert("Error in Giving Permission");
	window.location='right.php';
	</script>
       <?php
}
	
}
mysqli_close($con);
}



?>
</body>
</html>