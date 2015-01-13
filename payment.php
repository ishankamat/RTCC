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
</style>


<script>
function funccctype()
{
if ( paymentinfo.ccnumber.value=="")
{
var image = "transparent.png";
document.getElementById('cctype').setAttribute('src',image) 


}

else if ( paymentinfo.ccnumber.value=="1234567890098765")
{
var image = "visa.gif";
document.getElementById('cctype').setAttribute('src',image) ;
document.getElementById('validtext').innerHTML="";
}

else if ( paymentinfo.ccnumber.value=="0987654321123456")

{
var image = "mastercard.gif";
document.getElementById('cctype').setAttribute('src',image) ;
document.getElementById('validtext').innerHTML="";

}

else if ( paymentinfo.ccnumber.value=="2139104105104105")

{
var image = "discover.gif";
document.getElementById('cctype').setAttribute('src',image) ;
document.getElementById('validtext').innerHTML="";

}

else if ( paymentinfo.ccnumber.value=="5864242134586424")

{
var image = "americanexp.gif";
document.getElementById('cctype').setAttribute('src',image) ;
document.getElementById('validtext').innerHTML="";

}

else
{

document.getElementById('validtext').innerHTML="The credit card number is not valid, please enter the number again.";
var image = "transparent.png";
document.getElementById('cctype').setAttribute('src',image); 

return false;
paymentinfo.ccnumber.value="";

}


}


</script>
<script>

function dCard()

{

 if (paymentinfo.paytype.value=="Card")
 
 {
 
 	if ( paymentinfo.ccnumber.value=="")
{
var image = "transparent.png";
document.getElementById('cctype').setAttribute('src',image) 


}

else if ( paymentinfo.ccnumber.value=="1234567890098765")
{
var image = "visa.gif";
document.getElementById('cctype').setAttribute('src',image) 
}

else if ( paymentinfo.ccnumber.value=="0987654321123456")

{
var image = "mastercard.gif";
document.getElementById('cctype').setAttribute('src',image) 
}

else if ( paymentinfo.ccnumber.value=="2139104105104105")

{
var image = "discover.gif";
document.getElementById('cctype').setAttribute('src',image) 
}

else if ( paymentinfo.ccnumber.value=="5864242134586424")

{
var image = "americanexp.gif";
document.getElementById('cctype').setAttribute('src',image) 
}

else
{

document.getElementById('validtext').innerHTML="The credit card number is not valid, please enter the number again.";
return false;
paymentinfo.ccnumber.value="";
}

 
 }
 


}

</script>

<script>

function d1Card()

{
alert("Your USC ID is: 304567891234 \n Discretionary Amount: $20");

paymentinfo.submit();

}

</script>

<script>
function validinfo()

{
	if(document.getElementById('ccname').value=="")
	{
		document.getElementById('validname').innerHTML="The name field cannot be left blank!";
		return false;
	}
	
	else if (isNaN(document.getElementById('ccname').value)!=true)
	{
		document.getElementById('validname').innerHTML="Please enter a valid name.";
		return false;
	}
	

	
	
	else
	{
	document.getElementById('validname').innerHTML="";

	}

}




</script>

<script>
function validinfostreet()

{
	if(document.getElementById('ccstreet').value=="")
	{
		document.getElementById('validstreet').innerHTML="Please enter your street address!";
		return false;
	}	

	
	
	else
	{
	document.getElementById('validstreet').innerHTML="";

	}

}
</script>

<script>
function validinfocity()

{
	if(document.getElementById('cccity').value=="")
	{
		document.getElementById('validcity').innerHTML="Please enter your city name!";
		return false;
	}	

	
	
	else
	{
	document.getElementById('validcity').innerHTML="";

	}

}
</script>

<script>
function validinfozip()

{
	if(document.getElementById('cczip').value=="")
	{
		document.getElementById('validzip').innerHTML="Please enter your zip code";
		return false;
	}	

	else if (isNaN(document.getElementById('cczip').value))
	
	{
		document.getElementById('validzip').innerHTML="Zip Code should be in a numeric format.";
		return false;

	}
	
	else
	{
	document.getElementById('validzip').innerHTML="";

	}

}
</script>

<script>
function validinfophone()

{
	if(document.getElementById('ccphone').value=="")
	{
		document.getElementById('validphone').innerHTML="Please enter your phone number.";
		return false;
	}	

	else if (isNaN(document.getElementById('ccphone').value))
	
	{
		document.getElementById('validphone').innerHTML="Phone number should be in a numeric format.";
		return false;

	}
	
	else
	{
	document.getElementById('validphone').innerHTML="";

	}

}
</script>

<script>

function validinfoemail()
{
var x=document.forms["paymentinfo"]["ccemail"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  document.getElementById('validemail').innerHTML="Please enter your email address in the correct format.";
		return false;
  }
  
  else
  {
  document.getElementById('validemail').innerHTML="";

  }
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
<table style="color:black" cellspacing="30"> <tr><td>Step 1: Create your meal</td><td> >> </td><td><b>Step 2: Payment Information</b></td><td> >> </td><td>Step 3: Place Order</td><td> >> </td><td>Step 4: Confirmation</td></tr></table>
<br /><br class="auto-style3" />
<form name="paymentinfo" action="placeorder.php" method="post">

<?php 

$menu = $_POST['menu'];

foreach($menu as $value)
{

echo "<input type='hidden' name='demoval3[]' value='".$value."'/> ";

}



?>


<table style="color:white" cellspacing="30"><tr><td class="auto-style3"><strong>Select a type of payment:</strong></td><td> <input type="radio" name="paytype" value="Card" /> 
	<span class="auto-style3"> 
	<strong>Credit Card/ Debit Card</strong> </span> </td><td><input type="radio" name="paytype" value="UsCard" onclick="d1Card()" /> 
	<span class="auto-style3"> 
	<strong>UsCard</strong> </span> </td></tr> </table>
<br class="auto-style3" /> 

<table style="color:white" cellspacing="25">
<tr><td>&nbsp;<span class="auto-style3"><strong>Name:</strong></span></td><td><input type="text" name="ccname" id="ccname" onblur="return validinfo()" /></td><td id="validname" style="color:red;font-size:small"></td></tr>
<tr><td>&nbsp;<span class="auto-style3"><strong>Street Address:</strong></span></td><td><input type="text" name="ccstreet" id="ccstreet" onblur="return validinfostreet()" /></td><td id="validstreet" style="color:red;font-size:small"></td></tr>
<tr><td>&nbsp;<span class="auto-style3"><strong>Apartment/Suite Number:</strong></span></td><td><input type="text" name="ccaptno" id="ccaptno" /></td></tr>
<tr><td>&nbsp;<span class="auto-style3"><strong>City:</strong></span></td><td><input type="text" name="cccity" id="cccity" onblur="return validinfocity()" /></td><td id="validcity" style="color:red;font-size:small"></td></tr>
<tr><td class="auto-style3"><strong>&nbsp;State:</strong></td><td><select name="ccstate">
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select><span class="auto-style3">				
</td></tr>
<tr><td><span class="auto-style3"><strong>&nbsp;Zip Code:</strong></span></td><td><input type="text" name="cczip" id="cczip" onblur="return validinfozip()" /></td><td id="validzip" style="color:red;font-size:small"></td></tr>
<tr><td class="auto-style3"><strong>&nbsp;Phone Number:</strong></td><td><input type="text" name="ccphone" id="ccphone" onblur="return validinfophone()" /></td><td id="validphone" style="color:red;font-size:small"></td></tr>
<tr><td class="auto-style3"><strong>&nbsp;Email:</strong></td><td><input type="email" name="ccemail" id="ccemail" onblur="return validinfoemail()" /></td><td id="validemail" style="color:red;font-size:small"></td></tr>
    <tr><td>&nbsp;<span class="auto-style3"><strong>Credit Card Number:</strong></span></td><td><input type="text" name="ccnumber" onblur="return funccctype()"  /></td><td>
	<span class="auto-style3"><img id="cctype" src="transparent.png" /></span></td><td id="validtext" style="color:red;font-size:small"></td></tr>

<tr><td class="auto-style3"><strong>&nbsp;Expiry Date:</strong></td><td><select name="ccmonth">
	<option value="1">January
	<option value="2">February
	<option value="3">March
	<option value="4">April
	<option value="5">May
	<option value="6">June
	<option value="7">July
	<option value="8">August
	<option value="9">September
	<option value="10">October
	<option value="11">November
	<option value="12">December
</select></td><td><select name="ccday">
	<option value="1">1
	<option value="2">2
	<option value="3">3
	<option value="4">4
	<option value="5">5
	<option value="6">6
	<option value="7">7
	<option value="8">8
	<option value="9">9
	<option value="10">10
	<option value="11">11
	<option value="12">12
	<option value="13">13
	<option value="14">14
	<option value="15">15
	<option value="16">16
	<option value="17">17
	<option value="18">18
	<option value="19">19
	<option value="20">20
	<option value="21">21
	<option value="22">22
	<option value="23">23
	<option value="24">24
	<option value="25">25
	<option value="26">26
	<option value="27">27
	<option value="28">28
	<option value="29">29
	<option value="30">30
	<option value="31">31
</select></td><td>    <select id="ccyear" name="ccyear">

    <option value="2035">2035</option>
    <option value="2034">2034</option>
    <option value="2021">2033</option>
    <option value="2020">2032</option>
    <option value="2021">2031</option>
    <option value="2020">2030</option>
    <option value="2021">2029</option>
    <option value="2020">2028</option>
    <option value="2021">2027</option>
    <option value="2020">2026</option>
    <option value="2021">2025</option>
    <option value="2020">2024</option>
    <option value="2021">2023</option>
    <option value="2020">2022</option>
	<option value="2021">2021</option>
    <option value="2020">2020</option>
    <option value="2019">2019</option>
    <option value="2018">2018</option>
    <option value="2017">2017</option>
    <option value="2016">2016</option>
    <option value="2015">2015</option>
    <option value="2014" selected="selected">2014</option>
    <option value="2013">2013</option>
    <option value="2012">2012</option>
    <option value="2011">2011</option>
    <option value="2010">2010</option>
    <option value="2009">2009</option>
    <option value="2008">2008</option>
    <option value="2007">2007</option>
    <option value="2006">2006</option>
    <option value="2005">2005</option>
    <option value="2004">2004</option>
    <option value="2003">2003</option>
    <option value="2002">2002</option>
    <option value="2001">2001</option>
    <option value="2000">2000</option>
    <option value="1999">1999</option>
    <option value="1998">1998</option>
    <option value="1997">1997</option>
    <option value="1996">1996</option>
    <option value="1995">1995</option>
    <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    </select></td></tr>
    <tr><td class="auto-style3"><strong>&nbsp;CVV:</strong></td><td><input type="text" name="cccvv" maxlength="4" size="4" /></td></tr>
    <tr><td class="auto-style3"><input type="checkbox" value="saveinfo" name="saveprof" /><strong>Save payment information.</strong></td></tr>
</table>

<table style="margin-left:350px"> <tr><td style="width:200px"><a href="createmeal.php"><img src="previous.png" /></a></td><td style="width:100px"><input type="submit" value="" class="imgClass" style="background-image:url('next.png');width:74px;height:33px;background-color:transparent;border-style:none" /></td></tr></table>
</form>
<br /><br /><br /><br />
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
