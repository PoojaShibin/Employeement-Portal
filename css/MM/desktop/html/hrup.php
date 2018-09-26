<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con=mysqli_connect("127.0.0.1","root","Raipur@123","media");

if(mysqli_connect_error())
{
	echo"failed to connect".mysqli_connect_error();
}
else
{

$a=$_POST['code'];
$b=$_POST['name'];
$c=$_POST['dept'];
$d=$_POST['des'];
$e=$_POST['dob'];
$f=$_POST['doj'];
$g=$_POST['shift'];
$h=$_POST['soff'];
$i=$_POST['pass'];
$j=$_POST['phone'];
$k=$_POST['mail'];

//echo $a."<br>".$b."<br>".$c."<br>".$d."<br>".$e."<br>".$f."<br>".$g."<br>".$h."<br>".$i."<br>".$j."<br>".$k."<br>".$img;
$sql = "UPDATE `emp_detail` SET `emp_name`='$b',`dept_id`=$c,`emp_designation`='$d',`emp_off`='$h',`s_grade`='$g',`password`='$i',`joindate`='$f',`dob`='$e',`phone`='$j',`email`='$k' WHERE `emp_code`='$a'";

if ($con->query($sql) === TRUE) {
   ?>
          <script language="javascript">
	window.alert("Updated successfully");
	window.location='hr6.php?job=<?php echo $a;?>';
	</script>
        <?php
} else {
    ?>
          <script language="javascript">
	window.alert("Error in Updating");
window.alert("<?php echo("Error description: " . mysqli_error($con));?>");
	window.location='hrupdate.php?job=';
	</script>
       <?php
}
	

mysqli_close($con);
}
?>
</body>
</html>