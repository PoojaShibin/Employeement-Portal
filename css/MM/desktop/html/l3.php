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
</style>
</head>

<body>
<?php
session_start();
$a=$_SESSION["code"]; include 'conn.php';


	
$sql = "SELECT * FROM emp_detail where emp_code='$a'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{ 
	$did = $row["dept_id"];
	
	
	
	

		?>                                    
                                                <form  action="sub.php?job=c" method="post">

                                              <div class="form-group row last">
                                            <label class="control-label text-right col-md-3">Leave Type</label>
                                            <div class="col-md-3">
                                              <input type="date" id="date" name="nf" list="thesedates">

<datalist id="thesedates">

    <option label="Groundhog Day">2014-02-02</option>

    <option label="Valentine's Day">2014-02-14</option>

    <option label="Flag Day">2014-06-14</option>

</datalist>
                                            </div>
                                            
                                        </div>
                                     
                                        <div class="form-group row">
                                         <label class="control-label text-right col-md-3">Total Days</label>
                                            <div class="col-md-3">
                                                <input type="text" value="1"  name="days" disabled class="form-control">
                                            </div>
                                            <label class="control-label text-right col-md-3">Week Off Day</label>
                                            <div class="col-md-3">
                                                <input type="text" value="<?php echo $row["emp_off"];?>" name="offday" disabled class="form-control">
                                            </div>
                                        </div>
                                        <center>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">REASON </label>
                                            <div class="col-md-9">
                                                        <textarea class="form-control"  name="reason" id="area" rows="5" id="comment" placeholder="reason"></textarea>
                                            </div>
                                        </div>
                                              
                                          <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="offset-sm-3 col-md-9">
                                                      <input type="submit"  style="width:150px"class="btn btn-success" />
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                       </div>
                                       </div>
                                       </center>
                                       </div>
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
