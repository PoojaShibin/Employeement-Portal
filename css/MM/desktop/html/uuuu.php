<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

   <?php
   $q=$_REQUEST['$q'];
$sql = "SELECT * FROM emp_detail where emp_code='$q'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{?>
                    <td>
                      Employee  Name</label></td>
                          <td><div class="col-sm-19">
                            <input type="text" class="form-control"  name="name" value="<?php echo $row["emp_name"];?> " required>

                          </div>
                       </td>
                       </tr>
                    <tr>
                    <td>
                        Employee Department</label></td>
                         <td><div class="col-sm-19">
                            <select class="form-control" id="val-skill" name="dept" required>
                                                    <option value="">Please select Department</option>
                                                    <option value="6">HR</option>
                                                    <option value="7">HOD</option>
                                                    <option value="1">IT Department</option>
                                                    <option value="2">Print Media</option>
                                                    <option value="3">Media Monitoring</option>
                                                    <option value="5">Social Media</option>
                                                    <option value="4">Reception</option>
                                                </select>

                          </div></td></tr>
                      <tr>
                    <td>
                    Employee Designation</label></td>
                         <td><div class="col-sm-19">
                             <input type="text" class="form-control" value="<?php echo $row["emp_designation"];?> " required name="des">

                          </div></td></tr>
                    <tr>
                    <td>
         
                     Employee Date Of Birth</label></td>
                         <td><div class="col-sm-19">
                             <input type="date" class="form-control" value="<?php echo $row["dob"];?> " required name="dob">

                          </div></td>
                          </tr>
                      <tr>
                    <td>
                   Employee Joining Date</label></td>
                         <td><div class="col-sm-19">
                             <input type="date" class="form-control" value="<?php echo $row["joindate"];?> " required name="doj">

                          </div></td></tr>
                          
                   <tr>
                    <td>
                  Shift Grade</label></td>
                         <td><div class="col-sm-19">
                            <select class="form-control" id="val-skill" name="shift" required>
                                                    <option value="">Please select Shift Time</option>
                                                    <option value="A">6:00-3:00</option>
                                                    <option value="B">3:00-12:00</option>
                                                    <option value="C">10:00-7:00</option>
                                                </select>
                          </div></td>
                          </tr>
                  <tr>
                    <td>
                       Employee Week Off Day</label></td>
                          <td><div class="col-sm-19">
                            <input type="text" class="form-control"  name="soff" value="<?php echo $row["emp_off"];?> " required>
                          </div></td></tr>
                 <tr>
                    <td>
                  Upload Image</label></td>
                          <td><div class="col-sm-19">
                             <input class="form-control" type="file" value="<?php echo $row["image"];?> " name="f"  required>
                          </div></td></tr>
                        <tr>
                    <td>
                     Password</label></td>
                          <td><div class="col-sm-19">
                             <input type="text" class="form-control"  name="pass" value="<?php echo $row["password"];?> " required>
                          </div></td></tr>
                        <tr>
                    <td>
                      Employee Contact No.</label></td>
                         <td> <div class="col-sm-19">
                             <input class="form-control" type="tel" value="<?php echo $row["phone"];?> " name="phone" id="example-tel-input" required>
                          </div></td></tr>
                        <tr>
                    <td>
                     Email</label></td>
                          <td><div class="col-sm-19">
                             <input type="email" class="form-control" id="exampleInputEmail1" name="mail" aria-describedby="emailHelp"  value="<?php echo $row["email"];?> "  required>
                          </div></td></tr>
                        
                          
                          <tr align="center">
                    <td rowspan="2">
                                                      <input type="submit" value="Update " style=""  class="btn btn-success" /></td>
                                                     
                                       </tr>
                                       </table>
                                       <?php }
}
										  
		?>
</body>
</html>