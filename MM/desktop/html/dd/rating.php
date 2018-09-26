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
        <style>

.coupon {
    border: 5px dotted #bbb;
    width: 80%;
    border-radius: 15px;
    margin: 0 auto;
    max-width: 600px;
}


.promo {
    background: #ccc;
    padding: 3px;
}

.expire {
    color: red;
}
</style>
    </head>
    <body>

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
                        <li class="nav-item"><a  href="reg.php?job=" style="color:#F00">Register Complaints</a></li>
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
                        <li><a href="rating.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Rating</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Static Area =================-->
        <section class="static_area">
        <a href="index.php" class="btn btn-warning pull-right" style="position:fixed;">Back to Main Page</a> 
            <div class="container">
                <div class="static_inner">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="static_main_content">
                           <!-----====================================Ticket Generation===================------------------>
                           
                           
                           <div class="coupon">
                           <br />
<br />


  <div class="container">
    <h3>Rating</h3>
  </div><br />

  <div class="container" style="background-color:white">
    <h2><b>Issuse Solved</b></h2> <br />

   
   <?php
include 'connection.php';
$a="";
$a=$_REQUEST['tktid'];
$sql="Select * from tkt t inner join emp e on t.eid=e.eid where t.tid=$a";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{

?>

<h3>Ticket Number-<?php echo $row["tno"];?></h3><br />
    <p><b>Issuse-</b><?php echo $row["treason"];?></p><br />
    <p><b>Faced By-</b><?php echo $row["tname"];?></p><br>
<p><b>Department-</b><?php echo $row["tdept"];?></p><br>

<?php
	}
}?>
<form action="tkt.php?job=3 && tkt=<?php echo $a;?>" method="post">
<h4>Rating</h4>
<p><input type="radio" name="r" value="Fully Satisfied"/><b>Fully Satisfied</b>&nbsp;&nbsp;&nbsp;<input type="radio" name="r" value="Satisfied"/><b>Satisfied</b>&nbsp;&nbsp;&nbsp;<input type="radio" name="r" value="Not Satisfied"/><b>Not Satisfied</b></p>

  </div><br />
    <div class="container" style="background-color:white">
   <h5>Write Your Review....</h5>

<textarea rows="5" cols="75" name="review" required></textarea>

  </div><br />

  <div class="container">
   <center><input type="submit" value="Submit" class="btn btn-warning"/></center>
  </div><br />
<br />
</form>
</div>
                           
                           
                           
                            <!-----====================================Ticket Generation===================------------------>
                            </div>
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
