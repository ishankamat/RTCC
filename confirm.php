<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>

<!DOCTYPE html>
<html>

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Online Ordering system for RTCC</title>
<link rel="icon" href="file:///H:/CSCI%20588%20-%20Specification%20of%20Design%20and%20User%20InterfaceSoftware/Project/favicon.ico" />
<style type="text/css">
.auto-style2 {
	font-family: Vijaya;
}

#footer {
    background: url('footer-bg.png') repeat-x center bottom;
    height: 50px;
    padding-top: 14px;
    position: fixed;
    left: 0px;
    bottom: 0px;
    width: 100%;
    z-index: 98;
}

header {
    background: url('header-bg2.png') repeat-x scroll center top transparent;
    height: 150px;
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    z-index: 99;
}


.auto-style3 {
	color: black;
	font-size: medium;
	font-family:Georgia, "Times New Roman", Times, serif;
}


</style>



</head>

<body style="width:auto;margin-left:100px;margin-right:300px;background-image:url('subtle.jpg')">
<header id="panda-header"><center><img alt="" src="rtcc newest header1.png" width="auto"  /></center> <label style="text-align:center;float:right;margin-right:300px;color:white;font-weight:bold">Welcome, Ishan Kamat &emsp;&emsp; [ <a href="logout.php" style="color:white">Logout</a> ]</label></header>
<br /><br /><br /><br /><br /><br /><br />

<div>
<div style="width:20%;float:left">
<table>
<tr><td style="border-style:solid;border-color:white"><img src="pe black.png" style="width:100px;height:100px"/></td></tr>
<tr><td style="border-style:solid;border-color:white"><img src="thehabit.png" style="width:100px;height:100px" /></td></tr>
<tr><td style="border-style:solid;border-color:white"><img src="cbtl1.png" style="width:100px;height:100px" /></td></tr>
<tr><td style="border-style:solid;border-color:white"><img src="verde13.png" style="width:100px;height:100px" /></td></tr>
<tr><td style="border-style:solid;border-color:white"><img src="cpk small3.png" style="width:100px;height:100px" /></td></tr></table>
</div>

<div>
<table style="color:black" cellspacing="30"> <tr><td>Step 1: Create your meal</td><td> >> </td><td>Step 2: Payment Information</td><td> >> </td><td>Step 3: Place Order</td><td> >> </td><td><strong>Step 4: Confirmation</strong></td></tr></table>
<br /><br />

<?php

$time = $_POST['time'];

$instr = $_POST['instr'];

$demoval4 = $_POST['demoval4'];

?>

<br />
<center><table><tr><td><img src="Success order.png" style="width:25px;height:25px" alt="Order Successfully placed"/></td>
	<td class="auto-style3"><strong>Your order has been successfully placed!</strong></td></tr>
	
	<tr><td></td><td class="auto-style3"><strong>You can pick up your order at <span style="color:maroon"><?php echo $time ?></span></strong></td></tr>
	<tr><td></td><td class="auto-style3">Your order id is: <span id="receiptno" style="color:maroon;font-weight:bold"><?php echo rand(10000,99999) ?></span></td></tr></table></center>

<br /> <br />


<?php

echo "<center>You ordered: <b><table style='text-align:center'>";
	
	foreach($demoval4 as $value)
	
	{
	
	echo "<tr><td style='color:maroon'>";
	
	echo $value."</td></tr>";
	
	}
	
	echo " </table></b></center>";

if ($instr!="")

{

	echo "<br /><center>Special Instructions: <b style='color:maroon'>".$instr.".</b></center>";

}

?>


</div>


</div>


<footer id="footer" style="margin-top:100px">
	<br />
	<span class="auto-style2">
	<table style="margin-left:300px;width:60%;margin-right:300px;text-align:center"><tr style="color:white;font-weight:bold">
		<td class="auto-style8"><a href="http://hospitality.usc.edu/Dietitian/AskDietitian.aspx" style="color:white;text-decoration:none">Dietician</a></td><td class="auto-style8"><a href="http://wellness.usc.edu/" style="color:white;text-decoration:none" >Wellness</a></td>
		<td class="auto-style8"><a href="http://hospitality.usc.edu/Hours/Default.aspx" style="color:white;text-decoration:none">Hours</a></td><td class="auto-style8"><a href="http://hospitality.usc.edu/Map.aspx" style="color:white;text-decoration:none">Map</a></td></tr></table></span></footer>


</body>



</html>



</body>

</html>
