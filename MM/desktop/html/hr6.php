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
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
$a=$_SESSION["code"];
 include 'connection.php';

$hr="";
$hod="";
	

	$sql = "SELECT * FROM emp_detail emp  inner join dept_detail dept on emp.dept_id=dept.dept_id  inner join shift_time shift on emp.s_grade=shift.s_grade and emp_code='$a'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
        $a= $row["eid"];
		$b1=$row["emp_name"];
		$c1=$row["emp_designation"];
		$d=$row["emp_off"];
		$e=$row["dept_id"];
		$f=$row["s_grade"];
		$j=$row["emp_code"];
		$k=$row["password"];
		$url1=$row["image"];
		$join=$row["joindate"];
		$dob=$row["dob"];
		$bb=$row["dept_name"];
	    $in=$row["s_in"];
		$out=$row["s_out"];
		$phone=$row["phone"];
		$mail=$row["email"];
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
                    <a class="navbar-brand" href="index.php">
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
                         <li class="nav-item m-l-12"  style="color:#FFF"><br /><label id="l1"><?php echo $b1;?></label> </li>
                          <li class="nav-item m-l-10"  style="color:#FFF"><br /><label id="l3"><?php echo $c1;?></label></li>
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                      
                       
                       
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo $url1;?>" alt="user" class="profile-pic" /></a>
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
                       <li class="nav-label"><a href="data.php">Attendance</a></li>
                        <li class="nav-label"><a href="leave.php">Apply Leave</a></li>
                        <li class="nav-label"><a href="empdata.php">View Leave Status</a></li>
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
                    <h3 class="text-primary">User Profile
                   
                    </h3> </div>
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
                        <div class="card">
                            <div class="card-body">
                                <!-- Row -->
                <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Employee Information</h4>
                  <form class="form-sample" action="hr4.php" method="post">
                    <p class="card-description">
                      
                       <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                           <label class="col-sm-3 col-form-label">Personal info</label>
                        </div>
                      </div>
                         <?php
					  $job=$_REQUEST["job"];
					  
	$sql = "SELECT * FROM emp_detail emp  inner join dept_detail dept on emp.dept_id=dept.dept_id  inner join shift_time shift on emp.s_grade=shift.s_grade and emp_code='$job'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
        $a= $row["eid"];
		$b=$row["emp_name"];
		$c=$row["emp_designation"];
		$d=$row["emp_off"];
		$e=$row["dept_id"];
		$f=$row["s_grade"];
		$j=$row["emp_code"];
		$k=$row["password"];
		$url=$row["image"];
		$join=$row["joindate"];
		$dob=$row["dob"];
		$bb=$row["dept_name"];
	    $in=$row["s_in"];
		$out=$row["s_out"];
		$phone=$row["phone"];
		$mail=$row["email"];
	                 ?>
                      <div class="col-md-6">
                         <span><img src="<?php echo $url;?>"   style="position:absolute;left:400px;top:-85px;" height="150"/></span>
                        </div>
                      </div>
                    </div>
                      
                   
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                           <label class="col-sm-3 col-form-label">Employee Code</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo $j;?>" disabled />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Employee  Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo $b;?>" disabled/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Employee Department</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" value="<?php echo $bb;?>" disabled/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Employee Designation</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" value="<?php echo $c;?>" disabled/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Employee Date Of Birth</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" value="<?php echo $dob;?>" disabled/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Employee Joining Date</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" value="<?php echo $join;?>" disabled/>
                          </div>
                        </div>
                      </div>
                    </div>
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Shift In Time</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control"  name="sin" value="<?php echo $in;?>"  disabled/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Shift Out Time</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" name="sout"  value="<?php echo $out;?>"  disabled/>
                          </div>
                        </div>
                      </div>
                    </div><br>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Employee Week Off Day</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control"  name="soff" value="<?php echo $d;?>"  disabled/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Password</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control"  name="pass" value="<?php echo $k;?>"  disabled/>
                          </div>
                          </div>
                          </div>
                          </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Employee Contact No.</label>
                          <div class="col-sm-9">
                             <input class="form-control" type="tel" value="<?php echo $phone;?>" name="phone" id="example-tel-input"  disabled/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                             <input type="email" class="form-control" id="exampleInputEmail1" name="mail" aria-describedby="emailHelp"  value="<?php echo $mail;?>"   disabled/>
                          </div>
                          </div>
                          </div>
                          
                          
                         
                                       <?php
	}
}
?>
                                    
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"></label>
                          <div class="col-sm-9">
                             <a href="hr7.php?job=<?php echo $a;?>"style="width:350px;position:relative;left:450px;"  class="btn btn-danger">Delete</a>
                          </div>
                          </div>
                          </div>
                          
                          
                      
                                    
                          
                </div>
                
                   
                  </form>
                </div>
              </div>
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

?>
</body>

</html>
