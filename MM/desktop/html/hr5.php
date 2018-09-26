<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Media Monitoring</title>
</head>

<body>
<?php
$a=$_POST['code'];
$b=$_POST['name'];
$c=$_POST['dept'];
$d=$_POST['des'];
$e=$_POST['dob'];
$f=$_POST['doj'];
$g=$_POST['shift'];
$h=$_POST['soff'];
$i=$_POST['pass'];
$jk=$_POST['phone'];
$k=$_POST['mail'];
$j="+91-".$jk;
if($g==""|| $h==""|| $jk==""|| $k=="")
{
	$g='C';
	$h='SUNDAY';
	$k='xxx@gmail.com';
}
if(!file_exists($_FILES['f']['tmp_name']) || !is_uploaded_file($_FILES['f']['tmp_name'])) {
   include 'connection.php';


	$sql="INSERT INTO `emp_detail`( `emp_code`, `emp_name`, `dept_id`, `emp_designation`, `emp_off`, `s_grade`,  `password`, `image`, `joindate`, `dob`, `phone`, `email`) VALUES ('$a','$b','$c','$d','$h','$g','$i','images/faces/empty.png','$f','$e','$j','$k')";


	
	if(mysqli_query($con,$sql))
	{
		?>
          <script language="javascript">
	window.alert("New record inserted successfully");
	window.location='hr6.php?job=<?php echo $a;?>';
	</script>
        <?php
	}
	else
{
	?>
      <script language="javascript">
	window.alert("Error In inserting");
	window.location='hr4.php';
	</script>
    <?php
}

}
else 
{
//echo $a."<br />".$b."<br />".$c."<br />".$d."<br />".$e."<br />".$f."<br />".$g."<br />".$h."<br />".$i."<br />".$j."<br />".$k."<br />";
$allowedExts=array("gif","jpeg","jpg","png");
$temp=explode(".",$_FILES["f"]["name"]);
$extension=end($temp);


if((($_FILES["f"]["type"]=="image/gif")||
($_FILES["f"]["type"]=="image/jpeg")||
($_FILES["f"]["type"]=="image/jpg")||
($_FILES["f"]["type"]=="image/pjpeg")||
($_FILES["f"]["type"]=="image/png")||
($_FILES["f"]["type"]=="image/x-png")&&($_FILES["f"]["size"]<2000000)
&& in_array($extension,$allowedExts)))
   {
if($_FILES["f"]["error"]>0)
{
	echo"Error".$_FILES["f"]["error"];
}
else
{
	
	move_uploaded_file ($_FILES["f"]["tmp_name"],"images/faces/".$_FILES["f"]["name"]);
	$img="images/faces/".$_FILES["f"]["name"];
		
include 'connection.php';


	$sql="INSERT INTO `emp_detail`( `emp_code`, `emp_name`, `dept_id`, `emp_designation`, `emp_off`, `s_grade`,  `password`, `image`, `joindate`, `dob`, `phone`, `email`) VALUES ('$a','$b','$c','$d','$h','$g','$i','images/faces/".$_FILES['f']['name']."','$f','$e','$j','$k')";


	
	if(mysqli_query($con,$sql))
	{
		?>
          <script language="javascript">
	window.alert("New record inserted successfully");
	window.location='hr6.php?job=<?php echo $a;?>';
	</script>
        <?php
	}
	else
{
	?>
      <script language="javascript">
	window.alert("Error In inserting");
	window.location='hr4.php';
	</script>
    <?php
}
	
}
   }
}
   
  
?>
</body>
</html>