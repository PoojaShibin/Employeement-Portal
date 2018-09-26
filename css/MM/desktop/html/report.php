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
    <link href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap.no-icons.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("example23");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
		//tr[i].style.background-color="#4387f0";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function myFunction1() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("opt");
  filter = input.value.toUpperCase();
  table = document.getElementById("example23");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[5];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
		//tr[i].style.background-color="#4387f0";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

</script>
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
										$cod=$_SESSION["code"];
 include 'connection.php';
$hr="";
$hod="";
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
                <div class="navbar-header" style="background-image:url(images/auth/b1.jpg)">
                    <a class="navbar-brand" href="#">
                        <!-- Logo icon -->
                        <b><h3 style="color:#FFF">Media Monitoring</h3></b>
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
                    <h3 class="text-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Leave Report</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                 <table cellspacing="0" width="100%">
                               <tr>
                               <form action="r.php" method="post" style="height:70px; ">
                                <td><label>Select Leave Type</label></td>
                               <td> <select id="opt" name="opt" onChange="myFunction1()" class="select-table-filter" data-table="order-table" type="search" style="height:45px;">
                                                <option name="0">Select Your Leave Type</option>
                                                <option name="Full Day Leave">Full Day Leave</option>
                                                <option name="Half day leave">Half Day Leave</option>
                                                <option name="NH/FH  Duty"> NH/FH  Duty</option>
                                                <option name="OFF Duty ">OFF Duty</option>
                                                <option name="0"></option>
                                                </select></td>
                                                
                                                 <td><label> Date From:</label></td>
                               <td><input type="date" id="from" name="from" onChange="myFunction2()" style="height:35px;"/></td>
                                <td><label>   Date To :</label></td>
                               <td><input type="date" id="to" name="to" onChange="myFunction3()" style="height:35px;"/></td>
                               <td><input type="submit" value=" Filter" class="bg bg-warning"  class="form-control" style="width:150px ;height:50px; padding:5px 10px 5px 10px; border:none;"/></td>
                               </tr>
                               </form>
                               </table>
                                </div>
                            </div>
                        </div>
                        
                <!-- End PAge Content -->

            </div>
            <!-- End Container fluid  -->
            <!-- Container fluid  -->
                        <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                   <div class="col-12">
                     
                        <div class="card" >
                       
                            <div class="card-body">
                                <div class="table-responsive m-t-40">
                                    <table class="display nowrap table table-hover table-striped table-bordered" id="example23" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Leave Id</th>
                                                <th>Employee Id</th>
                                                <th>Employee Name</th>
                                                <th>Employee Department</th>
                                                <th>Employee Designation</th>
                                                <th>Leave Type</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Total days</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                        <?php
$sql = "SELECT * FROM leave_detail lv inner join emp_detail emp on lv.emp_id=emp.eid inner join dept_detail dept on emp.dept_id= dept.dept_id and lv.hod=1 and lv.hr=1";
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
		$s = $row["leave_from"]; 
		$ee = $row["leave_to"]; 
		$days = $row["leave_days"]; 
		$lid = $row["ll_id"]; 
		$type = $row["leave_type"];
		$url=$row["image"];
		
		?>
                                       <td style="color:#000"><?php echo $lid;?></td>
                                         <td style="color:#000"><?php echo $j;?></td>
                                          <td style="color:#000"><?php echo $b;?></td>
                                           <td style="color:#000"><?php echo $e;?></td>
                                            <td style="color:#000"><?php echo $c;?></td>
                                            <td style="color:#000"><?php echo $type;?></td>
                                              <td style="color:#000"><?php echo date("d-m-Y", strtotime($s));?></td>
                                               <td style="color:#000"><?php echo date("d-m-Y", strtotime($ee));?></td>
                                                <td style="color:#000"><?php echo $days;?></td>
                                   </tr>
                              <?php
	}
}?>
                                        
                                        </tr>
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
} else 
{
    echo "0 results";
}



}

?>
</body>

</html>
