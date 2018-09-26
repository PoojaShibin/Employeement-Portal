<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Untitled Document</title>
</head>

<body>
<?php
$user=$_REQUEST['t1'];
$pass=$_REQUEST['t2']; 
$con=mysqli_connect("127.0.0.1","root","Raipur@123","media");

if(mysqli_connect_error())
{
	echo"failed to connect".mysqli_connect_error();
}
else
{

 $qz = "SELECT emp_code FROM emp_detail where emp_code='".$user."' and emp_name='".$pass."'" ; 
   
 
    $result = mysqli_query($con,$qz);
   if($row=mysqli_fetch_array($result))
   {
	   include'data.php';
	  ?>
      <!--<script type="text/javascript">
	  window.location.replace("http://127.0.0.1/emp/");
	  </script>-->
      <?php 
   }
   else
   {?>
   
  <!-- <script type="text/javascript">
   window.alert("Wrong User Name or Password");
   window.location.replace("data.php");
   </script>-->
   
   <?php
 include'index.php';
   }
   mysqli_close($con);
}

    ?>
</body>
</html>