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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> 

<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 

  
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","php/type.php?q="+str,true);
  xmlhttp.send();
}
$(document).ready(function() {

// get the current date

var date = new Date();

var m = date.getMonth(), d = date.getDate(), y = date.getFullYear();


// Disable all dates till today

$('#datepicker2').datepicker({

minDate: new Date(y, m, d),

dateFormat: 'mm-dd-yy',

});
$('#datepicker3').datepicker({

minDate: new Date(y, m, d),

dateFormat: 'mm-dd-yy',

});

function enableFirday(date) {

var day = date.getDay();

return [(day == 5), ''];

}

});
</script>
<style type="text/css">
input[type=text]
{
	border:#03F solid 2px;
	border-radius:5px;
}
#opt
{
	border:#03F solid 2px;
	border-radius:5px;
}
#area
{
border:#03F solid 2px;
	border-radius:5px;
	height:150px;
}

h1{font-family: serif, "Bitstream Charter", tahoma; color:#1C6575;font-size:3em;border-bottom:1px solid #D6D6D6;}

h2{font-family: serif, "Bitstream Charter", tahoma; color:#1C6575;float:left;clear:both;width:250px;text-align:right}

input{border:1px solid #D6D6D6;background:url(DatePicker.gif) no-repeat right 3px; padding:2px;width:150px;margin:10px;float:left;}

div.dateTypes{margin:0 auto;width:600px;}
</style>
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
	$dept="";
$hr="";
$hod="";
$sql = "SELECT * FROM emp_detail e inner join dept_detail d on e.dept_id=d.dept_id where e.emp_code='$a'";
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
		$did = $row["dept_id"];
$dept=$row["dept_name"];
		
  
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
                        <b><h3 style="color:#FFF">Media Monitoring</h3></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse" style="background-image:url(images/auth/b1.jpg)">
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
                          <li class="nav-item m-l-10"><br /><label id="l3"><?php echo $row["emp_designation"];?></label></li>
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0"style="background-image:url(images/auth/b1.jpg)">

                        <!-- Search -->
                      
                       
                       
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
        <div class="left-sidebar" style="background-image:url(images/auth/b1.jpg)">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" style="background-image:url(images/auth/b1.jpg)">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav" style="background-image:url(images/auth/b1.jpg)">
                   <ul id="sidebarnav">
                        <li class="nav-devider"></li><br />
<br />


<?php if($hr==1)
{
	
	?>
      <li class="nav-label"><a href="data.php">Attendance</a></li>
                       <li class="nav-label"><a href="leave.php">Apply Leave</a></li>
                        <li class="nav-label"><a href="empdata.php">View Leave Status</a></li>
                        <li class="nav-label"><a href="profile.php">My profile</a></li>
                        <li class="nav-label"><a href="right.php">Rights</a></li>
                        <li class="nav-label"><a href="hr4.php">Enter Employee record</a></li>
                         <li class="nav-label"><a href="emprecord.php">View Employee Record</a></li>
                        <li class="nav-label"><a href="hrupdate.php?update=">Update Employee record</a></li>
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
        <div class="page-wrapper"   style="background-color:#39F">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
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
                <div class="row" >
                    <div class="col-12">
                        <div class="card" >
                            <div class="card-body">
                                <div class="table-responsive m-t-40">
                                   <!-- add form over here-->
                                   <div id="emp">
                <div class="col-lg-11" >
                        <div class="card card-outline-info"  style="background-color:#999;color:#FFF">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Leave Request</h4>
                            </div>
                            <div class="card-body m-t-20">
                                
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Employee Code</label>
                                            <div class="col-md-3">
                                                <input type="text" value="<?php echo $row["emp_code"];?>" disabled class="form-control">
                                                 </div>
                                                  <label class="control-label text-right col-md-3">Employee Name</label>
                                            <div class="col-md-3">
                                                <input type="text" value="<?php echo $row["emp_name"];?>" disabled class="form-control">
                                                 </div>
                                        </div>
                                  
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Employee Department</label>
                                            <div class="col-md-3">
                                                <input type="text" value="<?php echo $dept;?>" disabled class="form-control">
                                                 </div>
                                                  <label class="control-label text-right col-md-3">Employee Designation</label>
                                            <div class="col-md-3">
                                                <input type="text" value="<?php echo $row["emp_designation"];?>" disabled class="form-control">
                                                 </div>
                                        </div>
                                    
                                        
                                        
                                        
                                        <!----Leave part action----->
                                        
                                         <div class="form-group row last">
                                            <label class="control-label text-right col-md-3">Leave Type</label>
                                            &nbsp;&nbsp; <div class="col-md-3">
                                               <select class="form-control" id="opt" onChange="showUser(this.value)">
                                                <option name="0">Select Your Leave Type</option>
                                                <option name="Full Day Leave">Full Day Leave</option>
                                                <option name="Half day leave">Half Day Leave</option>
                                                <option name="NH/FH leave">NH/FH Leave</option>
                                                <option name="OFF Duty Work">OFF Duty Work</option>
                                                <option name="0"></option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div id="txtHint"></div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        <!---- Leave part ends--->
                                        
                            
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
    <script language="javascript">
function f1()
{
	document.getElementById("ff1").action="sub.php?job=full";
	document.getElementById("ff1").submit();
}
function f2()
{
	document.getElementById("ff1").action="sub.php?job=half";
	document.getElementById("ff1").submit();
}
function f3()
{
	document.getElementById("ff1").action="sub.php?job=nf";
	document.getElementById("ff1").submit();
}
function f4()
{
	document.getElementById("ff1").action="sub.php?job=off";
	document.getElementById("ff1").submit();
}
function f5()
{
	document.getElementById("ff1").action="sub.php?job=ll";
	document.getElementById("ff1").submit();
}

</script>
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
