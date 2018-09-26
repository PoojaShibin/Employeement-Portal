<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Media Monitoring</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/elegant-icon/style.css" rel="stylesheet">
        <link href="vendors/themify-icon/themify-icons.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">

        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
<?php
$job="";
$id=$_REQUEST['job'];

?>
        <!--================Search Area =================-->
        <section class="search_area">
            <div class="search_inner">
                <input type="text" placeholder="Enter Your Search...">
                <i class="ti-close"></i>
            </div>
        </section>
        <!--================End Search Area =================-->

        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><p style="color:#F00;font-size:3vw">Media Monitoring</p></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="index.php" style="color:#F00">Home</a></li>
                         <li class="nav-item active"><a class="nav-link" href="link.php" style="color:#F00">Links</a></li>
                        <li class="nav-item"><a class="nav-link" href="emp.php" style="color:#F00">Employee Contacts</a></li>
                        <li class="nav-item"><a  href="reg.php?job=$id" style="color:#F00">Register Complaints</a></li>
                    </ul>
                  
                </div>
            </nav>
        </header>
        <!--================End Header Menu Area =================-->

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_text_inner">
                    <h4>The ultimate guide of Media Monitoring</h4>
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Register  Complaints</a></li>
               
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Static Area =================-->
        <section class="static_area">
        <a href="regsolve.php?job=4" class="btn btn-danger pull-right" style="position:fixed;">Log Out</a> <br>

  
            <div class="container">
                <div class="static_inner">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="static_main_content">
                           

                           <!-- Login and Change Password Form-->
                           
<!--Modal: Login / Change Password Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-2 light-blue darken-3" role="tablist"  style="background-color:#611004f5;color:#FFF">
                    <li class="nav-item"  style="background-color:#611004f5;color:#FFF">
                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i> Login</a>
                    </li>
                    <li class="nav-item"  style="background-color:#611004f5;color:#FFF">
                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i> Change Password</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7-->
                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                        <!--Body-->
                        
                        <div class="modal-body mb-1">
                        <form action="regsolve.php?job=1&&tktid=" method="post">
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="email" id="t1" name="t1" class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="t2" name="t2" class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
                            </div>
                            <div class="text-center mt-2">
                                <button type="submit" class="btn btn-info">Log in <i class="fa fa-sign-in ml-1"></i></button>
                            </div>
                            </form>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-center text-md-right mt-1">
                                <p>Want To Change Password? <span style="color:#C03">Change Password</span></p>
                             
                            </div>
                            <button type="button" class="btn btn-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                    <!--/.Panel 7-->

                    <!--Panel 8-->
                    <div class="tab-pane fade" id="panel8" role="tabpanel">

                        <!--Body-->
                        <div class="modal-body">
                            <div class="md-form form-sm mb-5">
                            <form action="regsolve.php?job=2" method="post">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="email"  name="t1" class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
                            </div>

                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" name="t2" class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput13">Old password</label>
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fa fa-lock prefix"></i>

                                <input type="password"   name="t3" class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput14">New password</label>
                            </div>

                            <div class="text-center form-sm mt-2">
                                <button class="btn btn-info">Update <i class="fa fa-sign-in ml-1"></i></button>
                            </div>
</form>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-right">
                                <p class="pt-1">Now You can Log In With New Password <span style="color:#C03">Log In</span></p>
                            </div>
                            <button type="button" class="btn btn-danger-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!--/.Panel 8-->
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Login / Change Password Form-->

<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    
        <div class="modal-content">
            <div class="modal-header text-center" style="background-color:#0b248aa6">
                <h4 class="modal-title w-100 font-weight-bold">Write to us</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
            <?php 
             $ii=randomDigits(5);

function randomDigits($length){
$numbers = range(0,9);
shuffle($numbers);
$digits = "";
for($i = 0;$i < $length;$i++)
$digits .= $numbers[$i];
return $digits;
}?>
            <form action="regsolve.php?job=3 && id=<?php echo $id;?> " method="post">
            <?php
			$a=$_REQUEST['job'];
			$name="";
			$dept="";
						include 'connection.php';
					$sql = "SELECT * FROM emp where eid=$a";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
		$name=$row["name"];
		$dept=$row["department"];
	}
}
			?>
                <div class="md-form mb-5">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="pf" value="<?php echo $name;?>"  name="t1" class="form-control validate" required>
                    <label data-error="wrong" data-success="right" for="form34">Problem Faced By</label>
                </div>
                
                 <div class="md-form mb-5">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="date" id="pf"  name="date"  value="<?php echo date("Y-m-d");?>" class="form-control validate" required>
                    <label data-error="wrong" data-success="right" for="form34">Problem Faced On</label>
                </div>

                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                      <input type="text" id="pf" value="<?php echo $dept;?>"  name="dept" class="form-control validate" required>
                  
               
	
                    <label data-error="wrong" data-success="right" for="form29">Department</label>
                </div>

                <div class="md-form mb-5">
                    <i class="fa fa-tag prefix grey-text"></i>
                    <textarea cols="65" rows="3" name="t3" class="form-control validate" required></textarea>
                    <label data-error="wrong" data-success="right" for="form32">Problem</label>
                </div>
         

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-info">Submit <i class="fa fa-paper-plane-o ml-1"></i></button>
            </div>
            </form>
        </div>
    </div>
</div>


    <center>     
    <?php
	if($id=="")
	{?>
		<table>
<tr>
<td>
<div class="text-center">
    <a href="" class="btn btn-warning btn-rounded my-3" data-toggle="modal" data-target="#modalLRForm">LogIn/Change Password</a>
</div>
 </td>
<td>
<div class="text-center"><br />
    <a href="" class="btn btn-warning btn-rounded mb-4" data-toggle="modal" data-target="#modalLRForm">Register Complaint</a>
    </div>
    </td>
	<?php }
	else
	{ ?>
				<table>
<tr>
<td>
<div class="text-center">
    <a href="" onClick="alert('You already Login Please Continue!');" class="btn btn-warning btn-rounded mb-4" >LogIn/Change Password</a>
</div>
 </td>
<td>
<div class="text-center">
    <a href="" class="btn btn-warning btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm">Register Complaint</a>
    </div>
    </td>
    

	<?php 
	session_start();
	if(isset($_SESSION['nID']))
	{
		?>
        <td>
    <div class="text-center">
     <a href="search.php?id=<?php echo $id;?>" class="btn btn-warning btn-rounded mb-4" >See All Tokens</a>
</div></td>
<?php
	}
	
	}
	?>
          </tr>
</table>  
     </center>                       </div>
                        </div>          
                    </div>
                 </div>
            </div>
        </section>
        <!--================End Static Area =================-->

       <!--================Footer Area =================-->
        <footer class="footer_area">
     
            <div class="copy_right_area">
                <div class="container">
                    <div class="float-md-left">
                        <h5>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with  by Pooja</h5>
                    </div>
                    
                </div>
     
        </footer>
        <!--================End Footer Area =================-->




        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/counterup/apear.js"></script>
        <script src="vendors/counterup/countto.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/parallaxer/jquery.parallax-1.1.3.js"></script>
        <!--Tweets-->
        <script src="vendors/tweet/tweetie.min.js"></script>
        <script src="vendors/tweet/script.js"></script>

        <script src="js/theme.js"></script>
    </body>
</html>
