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
         <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <?php
	$a="";
	$a=$_REQUEST['id'];
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
                        <li><a href="reg.php?job="><i class="fa fa-angle-right" aria-hidden="true"></i>Register complaints</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>SEE All Complaints</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Static Area =================-->
        <section class="static_area">
       
        <a href="reg.php?job=<?php echo $a;?>" class="btn btn-success pull-right" style="position:fixed;">Back</a> 
            <div class="container">
                <div class="static_inner">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="static_main_content">
                            <center><h3>Token Details</h3></center><br>
<!-- <button id="exportButton" class="btn btn-sm btn-warning clearfix"><span class="fa fa-file-excel-o"></span> Export to Excel</button><br>-->
  <div class="table-responsive">  
                            <table width="100%" class="table table-hover table-dark"  id="myTable">
                            <tr>
                <th>Sno</th>
                <th>Problem_Faced_By</th>
                <th>Their_Department</th>
                <th>Problem</th>
                <th>Date_Of_Problem</th>
                <th>Ticket Generated</th>
                <th>Ticket Closed</th>
                <th>Ticket Closed By</th>
                <th>Rating</th>
                <th>Review</th>
         
                            <tr>
                            
                            
 <?php
 include 'connection.php';
 $r=0;
 $r1="";
 $r2="";
							
	$sql = "SELECT * FROM tkt order by tid desc ";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
		$r++;
		
		
		
		?>
                            <tr>
                            <td><?php echo $r;?></td>
                            <td><?php echo $row['tname'];?></td>
                            <td><?php echo $row['tdept'];?></td>
                            <td><?php echo $row['treason'];?></td>
                            <td><?php echo $row['date'];?></td>
                                            <?php
							if($row['tkt_gen']=='1')
		{?>
                            <td ><?php echo "Yes";?></td>
                            <?php
		}else{ ?>  <td style="background-color:#F00;color:#FFF; font-weight:bolder"><?php echo "No";?></td>
                            <?php
		}?>
                            <?php
							if($row['tkt_close']=='1')
		{?>
                            <td><?php echo "Yes";?></td>
                            <?php
		}else{ ?>  <td style="background-color:#F00;color:#FFF; font-weight:bolder"><?php echo "No";?></td>
                            <?php
		}?>
                            <td><?php echo $row["tkt_close_who"];?></td>
                            <td><?php echo $row['rating'];?></td>
                            <td><?php echo $row['review'];?></td>
                            <?php
	}
}
?>



                         
                            
                            </table>
                            </div>
                            <!-- you need to include the shieldui css and js assets in order for the components to work -->
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/jszip.min.js"></script>

<script type="text/javascript">
    jQuery(function ($) {
        $("#exportButton").click(function () {
            // parse the HTML table element having an id=exportTable
            var dataSource = shield.DataSource.create({
                data: "#exportTable",
                schema: {
                    type: "table",
                    fields: {
                        Ticket_No: { type: Number},
                        Problem_Faced_By: { type: String},
                        Their_Department: { type: String },
						Problem: { type: String},
                        Date_Of_Problem: { type: String }
                    }
                }
            });

            // when parsing is done, export the data to Excel
            dataSource.read().then(function (data) {
                new shield.exp.OOXMLWorkbook({
                    author: "ComplaintExcelSheet",
                    worksheets: [
                        {
                            name: "ComplaintExcelSheet Table",
                            rows: [
                                {
                                    cells: [
                                        {
                                            style: {
                                                bold: true
                                            },
                                            type: String,
                                            value: "Ticket_No"
                                        },
                                        {
                                            style: {
                                                bold: true
                                            },
                                            type: String,
                                            value: "Name"
                                        },
                                        {
                                            style: {
                                                bold: true
                                            },
                                            type: String,
                                            value: "Department"
                                        },
										{
                                            style: {
                                                bold: true
                                            },
                                            type: String,
                                            value: "Problem"
                                        },
										{
                                            style: {
                                                bold: true
                                            },
                                            type: String,
                                            value: "Date_Of_Problem"
                                        }
                                    ]
                                }
                            ].concat($.map(data, function(item) {
                                return {
                                    cells: [
                                        { type: Number, value: item.Ticket_No },
                                        { type: String, value: item.Problem_Faced_By },
                                        { type: String, value: item.Their_Department },
										{ type:String, value: item.Problem},
										{ type:String, value: item.Date_Of_Problem },
                                    ]
                                };
                            }))
                        }
                    ]
                }).saveAs({
                    fileName: "ComplaintExcelSheet"
                });
            });
        });
    });
</script>

<style>
    #exportButton {
        border-radius: 0;
    }
</style>
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
