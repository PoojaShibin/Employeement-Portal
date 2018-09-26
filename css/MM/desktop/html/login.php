<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$job=$_REQUEST['job'];

if($job==1)
{
	$user=$_REQUEST['t1'];
$pass=$_REQUEST['t2'];
$con=mysqli_connect("127.0.0.1","root","Raipur@123","media");

if(mysqli_connect_error())
{
	echo"failed to connect".mysqli_connect_error();
}
else
{
$user=$_REQUEST['t1'];
$pass=$_REQUEST['t2'];	
 $qz = "SELECT emp_code FROM emp_detail where emp_code='".$user."' and password='".$pass."'" ; 
   
 
    $result = mysqli_query($con,$qz);
   if($row=mysqli_fetch_array($result))
   {
	   $sql = "SELECT * FROM emp_detail where  emp_code='".$user."'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
       $des= $row["dept_id"];
    }
}



if($des==6)
{
	header('Location:data.php'); 
	   session_start();
	   $_SESSION["code"] = $user;
	   $_SESSION["hr"]="active";
	   $_SESSION['nID'] = 1;
}
else if($des==7)
{
	header('Location:data.php'); 
	   session_start();
	   $_SESSION["code"] = $user;
	   $_SESSION["hod"]="active";
	   $_SESSION['nID'] = 1;
}

else if($des!=7 && $des!=7)
{
$_SESSION["user"]="active";
	   header('Location:data.php'); 
	   session_start();
	   $_SESSION["code"] = $user;
	   $_SESSION['nID'] = 1;
}
	   
   }
   else
   {?>
   <script type="text/javascript">
   window.alert("Wrong User Name or Password");
   </script>
   
   <?php
	   header('Location:index.php'); 
   }
    mysqli_close($con);
}
}
else if($job==2)
{
	session_start();
 session_unset();
session_destroy();
	    ?>
     <script language="javascript">
	 window.alert("ThankYou");
	 window.location="index.php";
     </script>
     <?php
}
	
    ?>
</body>
</html>
