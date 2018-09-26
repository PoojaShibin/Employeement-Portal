<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Media Monitoring</title>
<style type="text/css">
h1{font-family: serif, "Bitstream Charter", tahoma; color:#1C6575;font-size:3em;border-bottom:1px solid #D6D6D6;}

h2{font-family: serif, "Bitstream Charter", tahoma; color:#1C6575;float:left;clear:both;width:250px;text-align:right}

input{border:1px solid #D6D6D6;background:url(DatePicker.gif) no-repeat right 3px; padding:2px;width:150px;margin:10px;float:left;}

div.dateTypes{margin:0 auto;width:600px;}
</style>
<link type="text/css" rel="stylesheet" href="../js/jquery-ui.css" >
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> 

<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 

 
   <script> 

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

</head>

<body>
<?php
$q = $_REQUEST["q"];


$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") 
{
   
   
   //full day leave
   if($q=="Full Day Leave")
   {
	  
	   

	   $hint=include 'l1.php';
   }
   else if($q=="Half Day Leave")
   {

	   $hint=include 'l2.php';
   }
    else if($q=="NH/FH Leave")
   {
	   

	   $hint=include 'l3.php';
   }
    else if($q=="OFF Duty Work")
   {

	   $hint=include 'l4.php';
   }
   
  
}
?>

</body>
</html>