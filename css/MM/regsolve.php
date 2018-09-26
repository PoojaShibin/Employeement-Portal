<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include 'connection.php';
$job=$_REQUEST['job'];
$id="";
if($job==1)
{
	///////////////////////////////////////////////////////////////////////////////////////////////
$tkt=$_REQUEST['tktid'];
$user=$_POST['t1'];
$pass=$_POST['t2'];	
if($tkt=="")
{
 $qz = "SELECT * FROM emp where email='".$user."' and password='".$pass."'" ; 

 $result = mysqli_query($con,$qz);
if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
		//echo $row['email'];
		//echo "<br>".$row['password'];
		session_start();
      $_SESSION['nID'] = 1;
      $id=$row['eid'];?>
	    <script type="text/javascript">
   window.alert("Login successFull Now You can Register Your Complaint");
   window.location="reg.php?job=<?php echo $id;?>";
   </script><?php
    }
}
else
{
	//echo "sorry";?>
	 <script type="text/javascript">
   window.alert("Wrong User Name or Password");
    window.location="reg.php?job=";
   </script>
   <?php
}
}
else
{
 $qz = "SELECT * FROM emp where email='".$user."' and password='".$pass."'" ; 

 $result = mysqli_query($con,$qz);
if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
		//echo $row['email'];
		//echo "<br>".$row['password'];
		session_start();
      $_SESSION['nID'] = 1;
      $id=$row['eid'];?>
	    <script type="text/javascript">
   window.alert("Login successFull ");
   window.location="gt.php?tktid=<?php echo $tkt;?> && job=<?php echo $id;?>";
   </script><?php
    }
}
else
{
	//echo "sorry";?>
	 <script type="text/javascript">
   window.alert("Wrong User Name or Password");
    window.location="index.php";
   </script>
   <?php
}	
}
//////////////////////////////////////////////////////////////////////////////////////////
}
else if($job==2)
{
	//////////////////////////////////////////////////////////////////////////////////////
		///////////////////////////////////////////////////////////////////////////////////////////////
$user=$_POST['t1'];
$pass=$_POST['t2'];	
$new=$_POST['t3'];
$sql = "UPDATE `emp` SET `password`='$new'  WHERE `email`='$user'";

if ($con->query($sql) === TRUE) {
?><script type="text/javascript">
   window.alert("Password Change Now Login");
   window.location="reg.php?job=";
   </script><?php 
} else {
	?>
   <script type="text/javascript">
   window.alert("Error in changing password");
   window.location="reg.php?job=";
   </script><?php 
}
 /*$qz = "UPDATE `emp` SET `password`='$new'  WHERE `email`='$user'" ; 

 $result = mysqli_query($con,$qz);
if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
		echo $row['email'];
		echo "<br>".$row['password'];
		echo "<br>".$new;
		/*
       $_SESSION['nID'] = 1;?>
	    
    }
}
else
{
	echo "sorry";
	?>
	 <script type="text/javascript">
   window.alert("Wrong User Name or Password");
    window.location="reg.php";
   </script>
   <?php
}*/
	//////////////////////////////////////////////////////////////////////////////////////
}
else if($job==3)
{
	$id=$_REQUEST['id'];
	$bydept=$_POST['dept'];
	$by=$_POST['t1'];
        $reason=$_POST['t3'];
	$date=$_POST['date'];
$a="";
$b="";
$c="";
$d="";
$e="";
$f="";
$g="";
$mssg="";
$mmm="";
$tid="";
//echo $id."<br>".$bydept."<br>".$by."<br>".$reason."<br>".$date."<br>";
$sql = "SELECT * FROM emp where eid=$id ";
$result1 = mysqli_query($con, $sql);

if (mysqli_num_rows($result1) > 0) 
{
    
    while($row1 = mysqli_fetch_assoc($result1)) 
	{
       $a=$row1['eid'];
	   $b=$row1['name'];
	   $c=$row1['department'];
	   $d=$row1['designation'];
	   $e=$row1['contact'];
	   $f=$row1['email'];
	 
    }
} else 
{
    echo "0 results";
}



//$nnn="A complaint has been registered in Media Monitoring by $by from $bydept on $date .The complaint is forwarded to IT Team members";
//echo $a."<br>".$by."<br>".$bydept."<br>".$reason."<br>".$f."<br>".$date."<br>";
$sql3 = "INSERT INTO `tkt`( `eid`, `tname`, `tdept`,  `treason`, `date`) VALUES ($a,'$by','$bydept','$reason','$date')";
$tid="";
if ($con->query($sql3) === TRUE)
{
	
	
$sql2 = "SELECT * FROM tkt order by tid desc limit 1";
$resultt = mysqli_query($con, $sql2);

if (mysqli_num_rows($resultt) > 0) 
{
    
    while($roww = mysqli_fetch_assoc($resultt)) 
	{
       $tid=$roww["tid"];
	 
    }
} else 
{
    echo "0 results";
}
//$mmm=' <a href="http://192.168.70.190/MM/gt.php?tktid='.$tid.'&&job=">Please Click on tle link to generate the ticket for the issuse</a> ';	
	
//$to='it@sbdigicom.com';
$to='pooja.raj@sbdigicom.com';
$subject='Complaint Registered';
$message='<a href="http://192.168.70.190/gt.php?tktid='.$tid.'&&job=">Please Click on tle link to generate the ticket for the issuse</a> ';


$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{
}
else
{	
}

//$to='Kishore.Karmakar@ibc24.in';
$to='pooja.raj@sbdigicom.com';
$subject='Complaint Registered';
$message='A complaint has been registered in Media Monitoring by $by from '.$bydept.' on '.$date .'The complaint is forwarded to IT Team members';
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{
}
else
{	
}

	 ?>
   <script type="text/javascript">
   window.alert("Complaint Register Successfully!!");
   window.location="reg.php?job=";
   </script><?php 
}
else
{
	 ?>
   <script type="text/javascript">
   window.alert("Sorry Some Error Occured");
window.alert("<?php  echo("Error description: " . mysqli_error($con));?>");
   window.location="reg.php?job=";
   </script><?php 
}
}
?>
</body>
</html>