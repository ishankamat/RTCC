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
a{color:white;}

.auto-style3 {
	color: black;
}

.auto-style4 {
	color: gray;
	font-size: small;
	font-weight: normal;
}

.auto-style5
{
	color:maroon
	
}

</style>

<script>

function myFunct()

{

var status =confirm("Do you want to place your order ?");
if (status == true)
  window.location = "confirm.php";
}


</script>

</head>

<body style="width:auto;margin-left:100px;margin-right:300px;background-image:url('subtle.jpg')">
<header id="panda-header"><center><img alt="" src="rtcc newest header1.png" width="auto"  /></center> <label style="text-align:center;float:right;margin-right:300px;color:white;font-weight:bold">Welcome, Ishan Kamat <a href="logout.php">[ Logout ]</a>&emsp;&emsp;<a href="closedoptions.html">[RTCC HOME]</a></label></header>
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
<table style="color:black" cellspacing="30"> <tr><td>Step 1: Create your meal</td><td> >> </td><td>Step 2: Payment Information</td><td> >> </td><td><strong>Step 3: Place Order</strong></td><td> >> </td><td>Step 4: Confirmation</td></tr></table>
<br /><br />

<?php
  // create short variable names
  
  $paytype = $_POST['paytype'];
  $ccnumber = $_POST['ccnumber'];
  $ccname = $_POST['ccname'];
  $ccstreet = $_POST['ccstreet'];
  $ccaptno = $_POST['ccaptno'];
  $cccity = $_POST['cccity'];
  $ccstate = $_POST['ccstate'];
  $ccmonth = $_POST['ccmonth'];
  $ccday = $_POST['ccday'];
  $ccyear = $_POST['ccyear'];
  $ccphone = $_POST['ccphone'];
  $ccemail = $_POST['ccemail'];
  $cczip = $_POST['cczip'];

  $order = $_POST['demoval3'];
  
  $saveprof = $_POST['saveprof'];
  
  
  echo "<table style='color:black;font-weight:bold;border-style:double;border-color:black;width:70%'>";
  
  	echo "<tr><td>Item</td><td>Price</td><td>Quantity</td><td></td></tr>";

$total=0;


if ($saveprof=="saveinfo" && $paytype!="UsCard")

{
echo "<h1>Your payment information has been saved to your profile successfully!</h1><br /><br />";

}


if ($paytype=="UsCard")

{

$ccnumber = "304567891234";
$ccname= " Ishan Kamat";
$ccstreet = "1234 W Adams";
$ccaptno = "101";
$cccity = "Los Angeles";
$ccstate= "CA";
$ccphone = "2139104105";
$ccemail="ikamat@usc.edu";
$cczip = "90007";

}

foreach ( $order as $value ) {

if ($value=="Orange Chicken")
{

$price = "4.95";
}

if ($value=="Black Pepper Chicken")
{

$price = "5.95";
}

if ($value=="SweetFire Chicken Breast")
{

$price = "4.95";
}

if ($value=="String Bean Chicken Breast")
{

$price = "6.95";
}


if ($value=="Kung Pao Chicken")
{

$price = "4.95";
}


if ($value=="Mushroom Chicken")
{

$price = "3.95";
}


if ($value=="Firecracker Chicken Breast")
{

$price = "5.95";
}


if ($value=="Grilled Teriyaki Chicken")
{

$price = "4.95";
}


if ($value=="Golden Schezuan Fish")
{

$price = "4.95";
}


if ($value=="Honey Walnut Shrimp")
{

$price = "5.95";
}


if ($value=="Eggplant Tofu")
{

$price = "4.95";
}

if ($value=="Mixed Veggies")
{

$price = "5.95";
}


if ($value=="Chow Mein")
{

$price = "4.95";
}


if ($value=="Fried Rice")
{

$price = "5.95";
}


if ($value=="White Steamed Rice")
{

$price = "4.95";
}


if ($value=="Brown Steamed Rice")
{

$price = "6.95";
}


$total += $price;


    echo "<tr><td>".$value."</td><td>$".$price."</td><td><select name='qty[]'> <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><td><a href='' style='color:maroon'>Delete</a></td></tr>";
    
    
}




echo "<tr><td colspan='3'>_______________________________________________</td></tr>";
    echo "<tr><td>Total:</td><td>$".$total."</td></tr>";

echo "</table>";


?>

<br /> <br class="auto-style3" /> <br class="auto-style3" />
<form action="confirm.php" method="post">
<table style="color:black;font-weight:bold">

<?php

foreach($order as $value1)
{

echo "<input type='hidden' name='demoval4[]' value='".$value1."'/> ";

}


?>


<tr><td class="auto-style3">Pickup Time:</td><td><select name="time"><option>10:00am</option><option>10:30am</option><option>11:00am</option><option>11:30am</option><option>12:00pm</option><option>12:30pm</option><option>1:00pm</option><option>1:30pm</option><option>2:00pm</option><option>2:30pm</option><option>3:00pm</option><option>3:30pm</option><option>4:00pm</option><option>4:30pm</option><option>5:00pm</option><option>5:30pm</option><option>6:00pm</option><option>6:30pm</option><option>7:00pm</option><option>7:30pm</option><option>8:00pm</option></select></td></tr>

<tr><td>Special Instructions:<span class="auto-style4">(optional)</span></td><td><textarea name="instr"></textarea></td></tr>
</table>

<br class="auto-style3" /> <br class="auto-style3" /> <br class="auto-style3" />

<table style="font-weight:bold;margin-left:250px;border-style:double;border-color:black" cellpadding="10" class="auto-style3">

<tr><td class="auto-style3">Payment Method:</td><td><?php echo $paytype ?> 
	</span> </td><td><a href="payment.php" class="auto-style5">Edit Payment Information</a></td></tr>

<tr><td class="auto-style3">Card Number:</td><td><?php echo $ccnumber ?></td></tr>

<tr><td><span class="auto-style3">Date of Expiry:</td><td><?php echo $ccmonth ?>/<?php echo $ccday ?>/<?php echo $ccyear ?></td></tr>

<tr><td><span class="auto-style3">Name:</td><td><?php echo $ccname ?></td></tr>

<tr><td><span class="auto-style3">Address:</td><td><?php echo $ccstreet ?>, <?php echo $ccaptno ?>, <?php echo $cccity ?>, <?php echo $ccstate ?>- <?php echo $cczip ?>, USA</td></tr>

<tr><td><span class="auto-style3">Phone Number:</td><td><?php echo $ccphone ?></td></tr>

<tr><td><span class="auto-style3">Email:</td><td><?php echo $ccemail ?></span></span></td></tr>




</table>

<br class="auto-style3" /><br class="auto-style3" /><br class="auto-style3" />

<table style="margin-left:50%"><tr><td><a href="payment.php"><img src="back.png" /></a></td><td><input type="submit" value="" class="imgClass" style="background-image:url('confirmorder.png');width:149px;height:34px;background-color:transparent;border-style:none" onclick="myFunct()"/></td></tr></table>

</form>

<br /><br /><br /><br /><br /><br /><br /><br />

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
