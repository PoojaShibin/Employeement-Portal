<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    
    <title>Employee Leave Status</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <![endif]-->
<script language="javascript" type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print'
        ]
    } );
} );


</script>
<script src="check.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>

<body class="fix-header fix-sidebar">
<?php
session_start();
if(!isset($_SESSION['nID']))
{
	header('Location:index.php');
}
else
{
$code="";	
$a=$_SESSION["code"];
$con=mysqli_connect("127.0.0.1","root","#SBmmpl123$","media");

if(mysqli_connect_error())
{
	echo"failed to connect".mysqli_connect_error();
}
else
{
	mysqli_set_charset($con,'utf8');
	$in="";
	$opt="";
$de="";
$month="";
$year="";
$code="";
$name="";
$deptname="";
$desg="";
	
	$hr="";
$hod="";
	$sql = "SELECT * FROM emp_detail e inner join shift_time s on e.s_grade=s.s_grade where e.emp_code='$a'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
        $a= $row["eid"];
		$b=$row["emp_name"];
               $code=$row["emp_code"];
		$c=$row["emp_designation"];
		$d=$row["emp_off"];
		$de=$row["dept_name"];
		$f=$row["s_grade"];
		$j=$row["emp_code"];
		$k=$row["password"];
		$url=$row["image"];
		$did = $row["dept_id"]; 
		$in=$row["s_in"];
	
	if($url=="")
	{
		$url='images/faces/empty.jpg';
	}
	
		$sql1 = "SELECT * FROM `right` WHERE `eid`=$a";
$result1 = mysqli_query($con, $sql1);

if (mysqli_num_rows($result1) > 0) 
{
    
    while($row1 = mysqli_fetch_assoc($result1)) 
	{
      $hod=$row1["hod"];
	  $hr=$row1["hr"];
	}
}

		?>

        
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div  id="main-wrapper" style="background-image:url(images/auth/b1.jpg)">
        <!-- header header  -->
        <div class="header"  style="background-image:url(images/auth/b1.jpg)">
            <nav class="navbar top-navbar navbar-expand-md navbar-light" style="background-image:url(images/auth/b1.jpg)">
                <!-- Logo -->
                <div class="navbar-header" style="background-image:url(images/auth/b1.jpg)">
                    <a class="navbar-brand" href="#">
                        <!-- Logo icon -->
                        <b><h2 style="color:#FFF">Media Monitoring</h2></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse"  style="background-image:url(images/auth/b1.jpg)">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- Messages -->
                        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th-large"></i></a>
                            <div class="dropdown-menu animated zoomIn">
                                <ul class="mega-dropdown-menu row">


                                    <li class="col-lg-6  m-b-30">
                                        <h4 class="m-b-20">CONTACT US</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email"> </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">OUR ADDRESS</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li>HIG 01</li>
                                            <li>MAULSHRI VIHAR</li>
                                            <li>VIP ROAD,OPP. HOTEL BABAYLON INT.</li>
                                            <li>PURANA RAIPUR C.G.</li>
                                        </ul>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">OUR CONTACT NUMBER</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li>123</li>
                                            <li>456</li>
                                            <li>789</li>
                                            <li>102</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        
                        <!-- End Messages -->
                         <li class="nav-item m-l-12"  style="color:#FFF"><br /><label id="l1"><?php echo $row["emp_name"];?></label> </li>
                          <li class="nav-item m-l-10"  style="color:#FFF"><br /><label id="l3"><?php echo $row["emp_designation"];?></label></li>
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                      
                       
                       
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo $url;?>" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="profile.php"><i class="ti-user"></i> Profile</a></li>
                                    <li class="nav-label"><a href="login.php?job=2">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar"  style="background-image:url(images/auth/b1.jpg)">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar"   style="background-image:url(images/auth/b1.jpg)">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav"  style="background-image:url(images/auth/b1.jpg)">
                          <ul id="sidebarnav">
                        <li class="nav-devider"></li><br />
<br />


<?php if($hr==1)
{
	
	?>
        <li class="nav-label"><a href="data.php">Attendance</a></li>
        <li class="nav-label"><a href="wish.php?tto=&job=">Birthday Wish</a></li>
                        <li class="nav-label"><a href="profile.php">My profile</a></li>
 <li class="nav-label"><a href="right.php">Rights</a></li>
                        <li class="nav-label"><a href="hr4.php">Enter Employee record</a></li>
                         <li class="nav-label"><a href="emprecord.php">View Employee Record</a></li>

                        <li class="nav-label"><a href="hr2.php">View Leave Request</a></li>
                         <li class="nav-label"><a href="report.php">View Leave Record</a></li>
                       <li class="nav-label"><a href="login.php?job=2">Logout</a></li>
    
<?php
}
else
if($hod==1)
{
?>

      <li class="nav-label"><a href="data.php">Attendance</a></li>
       <li class="nav-label"><a href="wish.php?tto=&job=">Birthday Wish</a></li>
                        <li class="nav-label"><a href="leave.php">Apply Leave</a></li>
                        <li class="nav-label"><a href="empdata.php">View Leave Status</a></li>
                        <li class="nav-label"><a href="profile.php">My profile</a></li>
                      <li class="nav-label"><a href="hod2.php">View Leave Request</a></li>
                         <li class="nav-label"><a href="report.php">View Leave Record</a></li>
                         <li class="nav-label"><a href="login.php?job=2">Logout</a></li>
<?php
}
else
{ ?>
                           <li class="nav-label"><a href="data.php">Attendance</a></li> <li class="nav-label"><a href="wish.php?tto=&job=">Birthday Wish</a></li>
                                               <li class="nav-label"><a href="profile.php">My profile</a></li>
                          <li class="nav-label"><a href="login.php?job=2">Logout</a></li>
                       <?php }
					   ?>
                    
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper"  style="background-color:#39F">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Daily Attendance Report</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                     
                        <div class="card" >
 
<div class="card-body">
                                <div class="table-responsive m-t-40">
                            <table  class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
<tr>
<th colspan="5" align="center"><span style="color:#F00; font-size:18px;">Media Monitoring Wish You A Very Happy Birthday</span></th>
</tr>
                                            <tr>
                                            <th>Employee </th>
                                                <th>Employee Code</th>
                                                <th>Employee Name</th>
                                                <th>Designation</th>
                                              <th>Wish Them</th>  
                                            </tr>
                                        </thead>

  <tbody>
    
<?php
$day=date("Y-m-d");
$tto="";
$code1="";
$name="";
$de="";
$desg="";
$image="";
$sql = "SELECT * FROM emp_detail where DATE_FORMAT(dob, '%m-%d') = DATE_FORMAT('$day', '%m-%d')";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{

$code1=$row["emp_code"];
$name=$row["emp_name"];
$de=$row["dept_name"];
$desg=$row["emp_designation"];
$image=$row["image"];

?>                                            <tr>
                                            <td><img src="<?php echo $image;?>" width="150" height="150"/></td>
                                                <td style="color:#000"> <?php echo $code1;?></td>
                                                <td style="color:#000"> <?php echo $name;?></td>
                                               <td style="color:#000"> <?php echo $desg;?></td>
                                               
                                                 <td style="color:#000"><a href="wish.php?tto=<?php echo $code1;?>&job=" class="btn btn-info" style="padding:10px 35px 10px 35px">Wish them</a></td>
                                               </tr>
                                                
                                                <?php
												}
}
else
{
	$code1="No data ";
$name="No data ";
$de="No data ";
$desg="No data ";
$image="images/faces/empty.png";
?>
 <tr>
                                            <td><img src="<?php echo $image;?>" width="150" height="150"/></td>
                                                <td style="color:#000"> <?php echo $code1;?></td>
                                                <td style="color:#000"> <?php echo $name;?></td>
                                               <td colspan="2" style="color:#000"> <?php echo $desg;?></td></tr>

                                           
                                            </tr>
                                            <?php
}?>
                                        </tbody>

</table>
 <?php 
											$tto=$_REQUEST['tto'];
											$sql = "SELECT * FROM emp_detail where emp_code='$tto'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{

$aaa=$row["emp_name"];
	}
}
											
												?>
 
<div class="card-body">
                                <div class="table-responsive m-t-40">
                            <table  class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
<tr>
<th colspan="4" align="center"><span style="color:#F00; font-size:18px;">Wish them to make their Birthday More special</span></th>
</tr>
                                            <tr>
                                           
                                               <form action="wish.php?tto=<?php echo $tto;?>&job=<?php echo $a;?>" method="post">
                                               <th>Your Wish To</th>
                                                <th>Your Wishes</th>
                                                <th>Submit</th>
                                               
                                                
                                            </tr>
                                        </thead>

  <tbody>

                                            <tr>
                                            <td style="color:#000; font-size:24px"><?php echo $aaa;?></td>
                                           
                                            <?php if($aaa=="")
											{
												?>
                                                 <td><textarea rows="4" cols="170" name="wishes" disabled></textarea></td>
                                            <td style="color:#000"><input type="submit" name="wish" class="btn btn-warning" disabled style="color:#FFF;padding:25px 25px 25px 25px"/></td>
                                            <?php
											}
											else
											{
												?>
                                                 <td><textarea rows="4" cols="170" name="wishes"></textarea></td>
                                            <td style="color:#000"><input type="submit" name="wish" class="btn btn-warning" style="color:#FFF;padding:25px 25px 25px 25px"/></td>
                                                <?php
											}
											?>
                                                </form>
                                            </tr>
                                        </tbody>

</table>
</div>


</div>
<?php
 if(isset($_POST['wish']))
 {
	 $wish=$_POST['wishes'];
	 $by=$_REQUEST['job'];
	 $tto=$_REQUEST['tto'];
	 $sql = "INSERT INTO wish (tto,bby,wish,reply) VALUES ('$tto','$by',N'$wish','')";

if ($con->query($sql) === TRUE) {
   ?>
   <script>
   window.alert("Your wishes added.Thankyou for you Valueable Time");
   window.location="wish.php?tto=&job=";
   </script>
   <?php
} else {
	?>
     <script>
   window.alert("Sorry");
   window.location="wish.php?tto=&job=";
   </script>
   <?php 
}
 }
?>
<br/>
<br/>
<?php
$w1="";
$w2="";
$w3=0;
$w4="";
?>


 
<div class="card-body">
                                <div class="table-responsive m-t-40">
                            <table  class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
<tr>
<th colspan="5" align="center"><span style="color:#F00; font-size:18px;">Your Birthday Wishes</span></th>
</tr>
                                            <tr>
                                            <th>Sno.</th>
                                                <th>Wished By</th>
                                                <th>Wishes</th>
                                                <th>Reply Them</th>
                                                <th>Submit</th>
                                            </tr>
                                        </thead>

  <tbody>

                                           
                                           <?php
										   $check="";
$sql = "SELECT * FROM wish w inner join emp_detail e on w.bby=e.eid where tto='$code' ";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
		$w++;
                   
$w4=$w;
$w1=$row["emp_name"];
$w2=$row["wish"];  
$check=$row["r"];
?>                                                 <tr><td style="color:#000; font-size:24px"><?php echo $w4;?></td>
                                                <td style="color:#000; font-size:24px"> <?php echo $w1;?></td>
                                               <td style="color:#000; font-size:24px"> <?php echo $w2;?></td>
                                               <?php if($check==0)
											   { ?>
                                               <form action="" method="post"><td><textarea rows="1" cols="100" name="r" placeholder="Reply Here...."></textarea></td>
                                               <td><input type="submit" value="Reply" name="reply" class="btn btn-warning"/></td></form></tr>
                                               <?php
											   }
											   else
											   {
												   ?>
                                               <td><textarea rows="1" cols="100" name="r" placeholder="You already replied..." disabled></textarea></td>
                                               <td><input type="submit" value="Reply" name="reply" class="btn disabled"  style="color:#000"/></td></tr>
                                              <?php
											   }
											  }
}
////////////////////////////////////////// reply coding part ////////////////////////////////////////////////////////////////////
if(isset($_POST['reply']))
{
	$reply=$_POST['r'];
	 $sql = "update wish set reply=N'$reply',r=1  where tto='$code'";

if ($con->query($sql) === TRUE) {
   ?>
   <script>
   window.alert("Done");
   window.location="wish.php?tto=&job=";
   </script>
   <?php
} else {
	?>
     <script>
   window.alert("Sorry");
   window.location="wish.php?tto=&job=";
   </script>
   <?php 
}
}
/////////////////////////////////////////  reply coding part ends //////////////////////////////////////////////////////////////
	?>
                                            </tr>
                                        </tbody>

</table>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card-body">
                                <div class="table-responsive m-t-40">
                            <table  class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
<tr>
<th colspan="5" align="center"><span style="color:#F00; font-size:18px;">You Wished</span></th>
</tr>
                                            <tr>
                                            <th>Sno.</th>
                                                <th>Wished To</th>
                                                <th>Wishes</th>
                                                <th>Reply </th>
                                               
                                            </tr>
                                        </thead>

  <tbody>

                                           
                                           <?php
										  
$sql = "SELECT * FROM wish w inner join emp_detail e on w.bby=e.eid where bby=$a";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
		$w++;
          $m="";          
$w4=$w;
$bb=$row["tto"];
$w1=$row["wish"];
$w2=$row["reply"]; 

 
$sql1 = "SELECT * FROM `emp_detail` WHERE `emp_code`='$bb'";
$result1 = mysqli_query($con, $sql1);

if (mysqli_num_rows($result1) > 0) 
{
    
    while($row1 = mysqli_fetch_assoc($result1)) 
	{
		$m=$row1["emp_name"];
	}
}
	
	
?>                                                 <tr><td style="color:#000; font-size:24px"><?php echo $w4;?></td>
                                                <td style="color:#000; font-size:24px"> <?php echo $m;?></td>
                                               <td style="color:#000; font-size:24px"> <?php echo $w1;?></td>
                                               <td style="color:#000; font-size:24px"><?php echo $w2;?></td>
                                               </tr>
                                              <?php
											  }
}


	?>
                                            </tr>
                                        </tbody>

</table>
                                </div>
                            </div>
                        </div>
                <?php        //////////////////////////////////  Upcoming Birthdays/////////////////////////////////////////////  ?>
                 <div class="card-body">
                                <div class="table-responsive m-t-40">
                            <table  class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
<tr>
<th colspan="5" align="center"><span style="color:#F00; font-size:18px;">UpComing Birthday</span></th>
</tr>
                                            <tr>
                                                <th>Sno.</th>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <Th>Date</Th>
                                               
                                               
                                            </tr>
                                        </thead>

  <tbody>

                                           
                                           <?php
									  
$sql = "SELECT * FROM emp_detail where DATE_FORMAT(dob, '%m-%d') >= DATE_FORMAT('$day', '%m-%d') ORDER BY DATE_FORMAT(dob, '%m-%d')  ASC";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) 
{
    $u=0;	
    while($row = mysqli_fetch_assoc($result)) 
	{
		$u++;
          $m="";          
$w4=$u;
$bb=$row["emp_name"];
$w1=$row["dob"];
$w2=$row["image"]; 


	
?>                                             <tr><td style="color:#000; font-size:24px"><?php echo $w4;?></td>
                                               <td style="color:#000; font-size:24px"> <?php echo $bb;?></td>
                                               <td style="color:#000; font-size:24px"><img src="<?php echo $w2;?>" width="100" height="100"/></td>
                                               <td style="color:#000; font-size:24px"><?php echo date("d-M", strtotime($w1));?></td>
                                               </tr>
                                              <?php
											  }
}


	?>
                                            </tr>
                                        </tbody>

</table>
                                </div>
                            </div>
                        </div>
                        
                        
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            
            <!-- End footer -->

        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>


    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>
    <?php 

    }
} else 
{
    echo "0 results";
}

mysqli_close($con);
}
}


?>
</body>

</html>
