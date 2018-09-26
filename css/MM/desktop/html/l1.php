<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
input[type=text]
{
	border:#03F solid 2px;
	border-radius:5px;
}
input[type=date]
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
<link type="text/css" rel="stylesheet" href="../js/jquery-ui.css" >


</head>


<?php 
session_start();
$a=$_SESSION["code"];
include 'conn.php';



	
$sql = "SELECT * FROM emp_detail where emp_code='$a'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{ 
	$did = $row["dept_id"];
	
	
	
	

		?>
       
        
        <form action="sub.php?job=a" method="post">
        
        
        
        <div class="form-group row">
                                            
                                            <label class="control-label text-right col-md-3">Leave From</label>
                                             <div class="col-md-3">
                                              <input type="date"  name="sdate"  min="<?php  echo date("Y-m-d");?>" class="form-control" placeholder="dd/mm/yyyy">
                                            </div>
                                          
                                                <label class="control-label text-right col-md-3">Leave To</label>
                                            <div class="col-md-3">
                                                <input type="date"  name="endate" min="<?php  echo date("Y-m-d");?>" class="form-control" placeholder="dd/mm/yyyy">
                                            </div>
                                               </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                     
                                            <label class="control-label text-right col-md-3">Week Off Day</label>
                                            <div class="col-md-9">
                                                <input type="text" value="<?php echo $row["emp_off"];?>" name="offday" disabled class="form-control">
                                            </div>
                                        </div>
                                       <center>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">REASON &nbsp;&nbsp; </label> 
                                            <div class="col-md-9">
                                             <textarea  class="form-control"  name="reason" id="area" rows="5" id="comment" placeholder="reason"></textarea>
                                                 
                                            </div>
                   </div>
                  


                                           
                                          <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="offset-sm-3 col-md-9">
                                                      <input type="submit" style="width:150px" class="btn btn-success" />
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                       </div>
                                       </div>
                                       </div>
                                        </center>
                                       </form>
                                        
                                        
                                       
                                          <?php 

    }
} else 
{
    echo "0 results";
}




?>
  
                                        
</body>
</html>