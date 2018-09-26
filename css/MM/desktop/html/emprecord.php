<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Media Monitoring</title>
</head>

<body>
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
$hr="";
$hod="";          

                             $cod=$_SESSION["code"];
	
$a=$_SESSION["code"];include 'connection.php';
	

	
	$sql = "SELECT * FROM emp_detail where emp_code='$cod'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
        $a= $row["eid"];
		$url=$row["image"];
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
                <div class="navbar-header" style="background-image:url(images/auth/b1.jpg)">      <a class="navbar-brand" href="#">
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
                    <?php
					}
} 

	
	?>
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
                    <h3 class="text-primary">Leave  Report</h3> </div>
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
                   <div class="col-15">
                     
                        <div class="card" >
                       
                            <div class="card-body">
                                <div class="table-responsive m-t-40">
                                    <table class="display nowrap table table-hover table-striped table-bordered" id="example" cellspacing="0" width="100%">
                                        <thead>
<tr>
                                                <th>Employee Code</th>
                                                <th>Employee Name</th>
                                                <th>Employee Department</th>
                                                <th>Employee Designation</th>
                                                <th>Week Off</th>
                                                <th>Shift Grade</th>
                                                <th>Password</th>
                                                <th>DOB</th>
                                                <th>Join date</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Image</th>
                                                <th>Update</th>
						<th>Delete</th>

                                            </tr>
                                        </thead>
                                         <tbody>
                                        <?php
$sql = "SELECT *  FROM emp_detail emp  inner join dept_detail dept on emp.dept_id=dept.dept_id  inner join shift_time shift  on emp.s_grade= shift.s_grade  where emp_del=0";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
        $a= $row["eid"];
		$b=$row["emp_name"];
		$c=$row["emp_designation"];
		$d=$row["emp_off"];
		$e=$row["dept_name"];
		$f=$row["s_grade"];
		$j=$row["emp_code"];
		$s = $row["password"]; 
		$ee = $row["image"]; 
		$days = $row["joindate"]; 
		$lid = $row["dob"]; 
		$type = $row["phone"];
		$url=$row["email"];
		
		?>
                                       
                                         <td style="color:#000"><?php echo $j;?></td>
                                          <td style="color:#000"><?php echo $b;?></td>
                                           <td style="color:#000"><?php echo $e;?></td>
                                            <td style="color:#000"><?php echo $c;?></td>
                                             <td style="color:#000"><?php echo $d;?></td>
                                              <td style="color:#000"><?php echo $f;?></td>
                                               <td style="color:#000"><?php echo $s;?></td>
                                               <td style="color:#000"><?php echo date("d-m-Y", strtotime($lid)); ?></td>
                                                 <td style="color:#000"><?php echo date("d-m-Y", strtotime($days));?></td>
                                                <td style="color:#000"><?php echo $type;?></td>
                                                   <td style="color:#000"><?php echo $url;?></td>
                                                    <td><img src="<?php echo $ee;?>" width="100" height="100"/></td>
                                                    <td><a href="hrupdate.php?update=<?php echo $a;?>"><input type="button" class="btn btn-warning" style="padding:5px 10px 5px 10px" value="Update"/></a></td>
 <td><a href="hr6.php?job=<?php echo $j;?>"><input type="button" class="btn btn-danger" style="padding:5px 10px 5px 10px" value="Delete"/></a></td>

                                   </tr>
                              <?php
	}
}?>
                                        
                                        
                                        </tbody>

									   
										
                                                                               <tbody>
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


    ?>
</body>

</html>


</body>
</html>