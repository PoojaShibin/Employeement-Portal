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
	//$tkt=$_REQUEST['nn'];
	//$name=$_POST['name'];
	//$date=$_POST['date'];
	$bydept=$_POST['dept'];
	//$reason=$_POST['t3'];
	$by=$_POST['t1'];
//$bydept=$_POST['t2'];	
$reason=$_POST['t3'];
//$result=$_POST['group20'];
$date=$_POST['date'];
	//echo $id;
	//echo ."<br>".$tkt;
	//echo $id."<br>".$by."<br>".$date."<br>".$bydept."<br>".$reason;
$a="";
$b="";
$c="";
$d="";
$e="";
$f="";
$g="";
$mssg="";
$mmm="";

$sql = "SELECT * FROM emp where eid=$id ";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
       $a=$row['eid'];
	   $b=$row['name'];
	   $c=$row['department'];
	   $d=$row['designation'];
	   $e=$row['contact'];
	   $f=$row['email'];
	 
    }
} else 
{
    echo "0 results";
}



//$mssg="Ticket No.".$tkt."  Is GeneratedPlease Check the IssuseProblem facing By:".$by."Department:".$bydept."Problem:".$reason."On:".$date."";

$nnn="A complaint has been registered in Media Monitoring by $by from $bydept on $date .The complaint is forwarded to IT Team members";
//echo $mssg;
//echo $a."<br>".$by."<br>".$bydept."<br>".$reason."<br>".$result."<br>".$date;

$sql = "INSERT INTO `tkt`( `eid`, `tname`, `tdept`,  `treason`, `date`) VALUES ($a,'$by','$bydept','$reason','$date')";

if ($con->query($sql) === TRUE)
{
	
	$tid="";
$sqll = "SELECT * FROM tkt order by tid limit 1";
$resultt = mysqli_query($con, $sqll);

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
$mmm='<a href="http://192.168.70.156/gt.php?tktid=$tid && job=">Please Click on tle link to generate the ticket for the issuse</a>';	
	
$to='it@sbdigicom.com';
$subject='Complaint Registered';
$message=$mmm;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{
}
else
{	
}
/*
$to='Kishore.Karmakar@ibc24.in';
$subject='Complaint Registered';
$message=$nnn;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{
}
else
{	
}
*/
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
   window.location="reg.php?job=";
   </script><?php 
}
//echo $ii;
}
else if($job==4)
{
	session_start();
 session_unset();
session_destroy();
	    ?>
     <script language="javascript">
	 window.alert("Logout Successful");
	 window.location="reg.php?job=";
     </script>
     <?php
} 
else if($job==5)
{
	$a="";
	$g="";
$b="";
$c="";
$d="";
$e="";
$f="";
	$tkt=$_REQUEST['t'];
if(!empty($_POST['t1'])) {  
foreach($_POST["t1"] as $aa)
{
	if($a=="")
	{
       $a=$aa;
	}
	else
	{
		$a=$a.",".$aa;
	}
}
}
else{
	$a="";
}

//echo $a;
$sql = "SELECT * FROM tkt where tno=$tkt ";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
       $g=$row['tno'];
	   $b=$row['tname'];
	   $c=$row['tdept'];
	   $d=$row['treason'];
	   $e=$row['date'];
	 
    }
} else 
{
    echo "0 results";
}
$f="Ticket No.".$g."  Is GeneratedPlease  Check the Issuse     Problem facing By:".$b."Department:".$c." Problem:".$d." On:".$e."";
$to='pooja.raj@sbdigicom.com';
$subject='ISSUSE IN MEDIA MONITORING';
$message=$f;
$header='From:poojaraj9421@gmail.com';

if(mail($to,$subject,$message,$header))
{
			
 ?>
   <script type="text/javascript">
   window.alert("Mail has been sent successfully");
   window.location="reg.php?job=";
   </script><?php 

}
else
{
				
 ?>
   <script type="text/javascript">
   window.alert("Sorry Some Error Occured");
   window.location="reg.php?job=";
   </script><?php 
	
}
}
?>
</body>
</html>