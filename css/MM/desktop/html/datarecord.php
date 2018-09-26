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
$con=mysqli_connect("127.0.0.1","root","Raipur@123","media");

if(mysqli_connect_error())
{
	echo"failed to connect".mysqli_connect_error();
}
else
{
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
  
<?php
$p=$_REQUEST['job'];
if($p==1)
{
$opt=$_POST['opt'];
$month=$_POST['month'];
$year=$_POST['year'];

$sql = "SELECT * FROM emp_detail e inner join shift_time s on e.s_grade=s.s_grade where e.emp_code='$opt'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
$code=$row["emp_code"];
$name=$row["emp_name"];
$de=$row["dept_name"];
$desg=$row["emp_designation"];
}
}

//////////////////////////////////////////////////////api code/////////////////////////////////
$maps_url='http://192.168.25.2/employee/api/employee?paycode='.$opt.'&month='.$month.'&year='.$year.'';
//$maps_url='http://192.168.25.2/employee/api/employee?paycode=MM000131&month=06&year=2018';
$maps_json=file_get_contents($maps_url);
$maps_array=json_decode($maps_json,true);
//echo $code;
}
else if($p==2)
{
$month=$_POST['month'];
$year=$_POST['year'];

$name=$b;
$desg=$c;

//////////////////////////////////////////////////////api code/////////////////////////////////
$maps_url='http://192.168.25.2/employee/api/employee?paycode='.$code.'&month='.$month.'&year='.$year.'';
//$maps_url='http://192.168.25.2/employee/api/employee?paycode=MM000131&month=06&year=2018';
$maps_json=file_get_contents($maps_url);
$maps_array=json_decode($maps_json,true);
//echo $code;
}
$right="";
$sql = "SELECT * FROM `right` WHERE `eid`=$a";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{

$right=$row["att"];
}
}
if($right==1)
{
	
	?>
    <div class="card-body">
                                 <table cellspacing="0" width="100%">
                               <tr>
                               <form name="form1" method="post" action="datarecord.php?job=1" >
                                <td><label>Select Employee</label></td>
                               <td> <select id="opt" name="opt" class="select-table-filter" data-table="order-table" type="search" style="height:45px;">
                                                 <option name="0">Select Employee</option>
<?php
$sql = "SELECT * FROM emp_detail";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{?>

                                                <option value="<?php echo $row["emp_code"];?>"><?php echo $row["emp_name"];?></option>
                                               <?php
}
}?>
                                                </select></td>
                                                
                                <td><label> Month:</label></td>
                               <td> <select id="opt" name="month" class="select-table-filter" data-table="order-table"  style="height:45px;">
                                               <option value=''>--Select Month--</option>
                                                <option value='01' <?php $m= date('m'); if ($m == '01') echo "selected='selected'";?>>Janaury</option>
                                                <option value='02' <?php $m= date('m'); if ($m == '02') echo "selected='selected'";?>>February</option>
                                                <option value='03' <?php $m= date('m'); if ($m == '03' )echo "selected='selected'";?>>March</option>
                                                <option value='04' <?php $m= date('m'); if ($m == '04' )echo "selected='selected'";?>>April</option>
                                                <option value='05' <?php $m= date('m'); if ($m == '05' )echo "selected='selected'";?>>May</option>
                                                <option value='06' <?php $m= date('m'); if ($m == '06' )echo "selected='selected'";?>>June</option>
                                                <option value='07' <?php $m= date('m'); if ($m == '07' )echo "selected='selected'";?>>July</option>
                                                <option value='08' <?php $m= date('m'); if ($m == '08' )echo "selected='selected'";?>>August</option>
                                                <option value='09' <?php $m= date('m'); if ($m == '09' )echo "selected='selected'";?>>September</option>
                                                <option value='10' <?php $m= date('m'); if ($m == '10' )echo "selected='selected'";?>>October</option>
                                                <option value='11' <?php $m= date('m'); if ($m == '11' )echo "selected='selected'";?>>November</option>
                                                <option value='12' <?php $m= date('m'); if ($m == '12' )echo "selected='selected'";?>>December</option>
                                                <option name="0"></option>
                                                </select></td>
                                <td><label>   Year :</label></td>
                               <td><select id="year" name="year"></select><script>var year = 2018;
var till = 2200;
var options = "";
for(var y=year; y<=till; y++){
  options += "<option>"+ y +"</option>";
}
document.getElementById("year").innerHTML = options;</script></td>
                               <td><input type="submit" value="Submit" class="bg bg-warning"  name="head" class="form-control" style="width:150px ;height:50px; padding:5px 10px 5px 10px; border:none;"/></td>
                               </tr>
                               </form>
                               </table>
                                
                                <?php
}
else {?>

 <table cellspacing="0" width="100%">
<tbody>
                               <tr>
                               <form name="form1" method="post" action="datarecord.php?job=2" >
                                 <td><label> Month:</label></td>
                               <td> <select id="opt" name="month" class="select-table-filter" data-table="order-table"  style="height:45px;">
                                               <option value=''>--Select Month--</option>
                                                <option value='01'>Janaury</option>
                                                <option value='02'>February</option>
                                                <option value='03'>March</option>
                                                <option value='04'>April</option>
                                                <option value='05'>May</option>
                                                <option value='06'>June</option>
                                                <option value='07'>July</option>
                                                <option value='08'>August</option>
                                                <option value='09'>September</option>
                                                <option value='10'>October</option>
                                                <option value='11'>November</option>
                                                <option value='12'>December</option>
                                                <option name="0"></option>
                                                </select></td>
                                <td><label>   Year :</label></td>
                               <td><select id="year" name="year"></select><script>var year = 2018;
var till = 2200;
var options = "";
for(var y=year; y<=till; y++){
  options += "<option>"+ y +"</option>";
}
document.getElementById("year").innerHTML = options;</script></td>
                               <td><input type="submit" value=" Submit" class="bg bg-warning"  name="user" class="form-control" style="width:150px ;height:50px; padding:5px 10px 5px 10px; border:none;"/></td>
                               </tr>
</tbody>
                               </form>
                               </table>
                               
								
								
								
								<?php
								
}         ?>  
<br/>
<br/>

<div class="card-body">
<table  class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
  <thead>

                                            <tr>
                                                <th>Employee Code</th>
                                                <th>Employee Name</th>
                                                <th>Designation</th>
                                                <th>Month</th>
                                                <th>Year</th>
                                            </tr>
                                        </thead>

  <tbody>

                                            <tr>
                                                <td style="color:#000"> <?php echo $code;?></td>
                                                <td style="color:#000"> <?php echo $name;?></td>
                                               <td style="color:#000"> <?php echo $desg;?></td>
                                                <td style="color:#000"> <?php echo $month;?></td>
                                               <td style="color:#000"> <?php echo $year;?></td>
                                            </tr>
                                        </tbody>

</table>
</div>

<br/>
<br/>

<div class="card-body">
                                <div class="table-responsive m-t-40">
                                     <table id="dvData" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
        <tr>
                <td colspan="6" align="right">
                    <input id="btnExport" class="btn btn-success" type="button" value="Export to excel">
                </td>
</tr>                                            <tr>
                                                <th>Date</th>
                                                <th>In Time</th>
                                                
                                                <th>Out Time</th>
                                                <th>Hours Worked</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
for($i=0;$i<30;$i++)
{
	
	$t1 = strtotime($in);
	echo '<tr>';


   echo "<td style='color:#000'> ".$maps_array[$i]['date1']."</td>";
   echo "<td style='color:#000'>".$maps_array[$i]['intime']."</td>";
   echo"<td style='color:#000'>".$maps_array[$i]['outtime']."</td>";
   
   $t5=$maps_array[$i]['intime'];
   $t6=strtotime($t5);
   $t7=$maps_array[$i]['outtime'];
 
 $t8=strtotime($t7);
if($t5=="" || $t8=="")
{
$t10=0.0;
}
else
{
  $h = ($t8 - $t6)/3600;   //$hours = 1.7
//If you want a more fine-grained time difference, you can flesh it out...

$t9= floor($h) . ':' . ( ($h-floor($h)) * 60 );
$t10= gmdate("H:i", $t8 - $t6);
if($t9<=strtotime('0:0'))
{
	$selectedTime = $t9;
$t9=date('h:i',strtotime($selectedTime . ' +1440 minutes'));
	
}
}
   echo"<td style='color:#000'>".$t10."</td>";
   echo '</tr>';
}
?>
                                        </tbody>
                                       <tfoot>
                                           <tr>
                                                <th>Date</th>
                                                <th>In Time</th>
                                                <th>Out Time</th>
                                               <th>Hours Worked</th>
                                            </tr>
                                        </tfoot>
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

<script>
$("#btnExport").click(function (e) {
    //alert('hello');
    //getting values of current time for generating the file name
    var dt = new Date();
    var day = dt.getDate();
    var month = dt.getMonth() + 1;
    var year = dt.getFullYear();
    var hour = dt.getHours();
    var mins = dt.getMinutes();
    var postfix = day + "." + month + "." + year + "_" + hour + "." + mins;
    //creating a temporary HTML link element (they support setting file names)
    var a = document.createElement('a');
    //getting data from our div that contains the HTML table
    var data_type = 'data:application/vnd.ms-excel;charset=utf-8';
    
    var table_html = $('#dvData')[0].outerHTML;
//    table_html = table_html.replace(/ /g, '%20');
    table_html = table_html.replace(/<tfoot[\s\S.]*tfoot>/gmi, '');
    
    var css_html = '<style>td {border: 0.5pt solid #c0c0c0} .tRight { text-align:right} .tLeft { text-align:left} </style>';
//    css_html = css_html.replace(/ /g, '%20');
    
    a.href = data_type + ',' + encodeURIComponent('<html><head>' + css_html + '</' + 'head><body>' + table_html + '</body></html>');
    
    //setting the file name
    a.download = 'exported_table_' + postfix + '.xls';
    //triggering the function
    //alert('koookook');
    a.click();
    //just in case, prevent default behaviour
    e.preventDefault();
});
</script>
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
