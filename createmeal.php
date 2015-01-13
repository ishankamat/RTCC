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


.auto-style4 {
	text-align: center;
}
.auto-style5 {
	font-family:Georgia, "Times New Roman", Times, serif;
}


.auto-style7 {
	font-family:Arial, Helvetica, sans-serif;
	font-size: large;
}
.auto-style8 {
	font-size: large;
}


span.tooltip {outline:none; } span.tooltip strong {line-height:30px;} span.tooltip:hover {text-decoration:none;} span.tooltip span { z-index:10;display:none; padding:14px 20px; margin-top:60px; margin-left:-160px; width:400px; line-height:16px; } span.tooltip:hover span{ display:inline; position:absolute; border:2px solid #FFF; color:#EEE; background:#000 url(bg_light.jpg) repeat-x 0 0; } .callout {z-index:20;position:absolute;border:0;top:-14px;left:120px;} /*CSS3 extras*/ span.tooltip span { border-radius:2px; -moz-border-radius: 2px; -webkit-border-radius: 2px; -moz-box-shadow: 0px 0px 8px 4px #666; -webkit-box-shadow: 0px 0px 8px 4px #666; box-shadow: 0px 0px 8px 4px #666; opacity: 1; }

span.tooltip1 {outline:none; } span.tooltip1 strong {line-height:30px;} span.tooltip1:hover {text-decoration:none;} span.tooltip1 span { z-index:10;display:none; padding:14px 20px; margin-top:60px; margin-left:-160px; width:400px; line-height:16px; } span.tooltip1:hover span{ display:inline; position:absolute; border:2px solid #FFF; color:#EEE; background:#000 url(drop-down-bg.jpg) repeat-x 0 0; } .callout {z-index:20;position:absolute;border:0;top:-14px;left:120px;} /*CSS3 extras*/ span.tooltip1 span { border-radius:2px; -moz-border-radius: 2px; -webkit-border-radius: 2px; -moz-box-shadow: 0px 0px 8px 4px #666; -webkit-box-shadow: 0px 0px 8px 4px #666; box-shadow: 0px 0px 8px 4px #666; opacity: 1; }


.auto-style9 {
	font-size: medium;
}
.auto-style10 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: medium;
}


.auto-style13 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: large;
	text-align: center;
	color: maroon;
}


</style>


</head>

<body style="width:auto;margin-left:100px;margin-right:300px;background-image:url('subtle.jpg')">
<header id="panda-header"><center><img alt="" src="rtcc newest header1.png" width="auto"  /></center> <label style="text-align:center;float:right;margin-right:300px;color:white;font-weight:bold">Welcome, Ishan Kamat &emsp;&emsp; [ <a href="logout.php" style="color:white">Logout</a> ] &emsp;&emsp;&emsp;&emsp; [ <a href="closedoptions.html" style="color:white">RTCC Home</a> ]</label></header>
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
<table style="color:black" cellspacing="30"> <tr><td><strong>Step 1: Create your meal</strong></td><td> >> </td><td>Step 2: Payment Information</td><td> >> </td><td>Step 3: Place Order</td><td> >> </td><td>Step 4: Confirmation</td></tr></table>
<br /><br />



<form method="post" action="payment.php">

<table style="color:black;width:60%" class="auto-style9">
<tr><td><strong>&emsp;&emsp;&emsp;Menu</strong></td><td><strong>Price</strong></td><td><strong>Calories</strong></td></tr>
<tr><td colspan="2" class="auto-style13"><strong>Chicken Entrees</strong></td></tr>
<tr><td class="auto-style9">
	<strong>
<input type="checkbox" name="menu[]" value="Orange Chicken" class="auto-style10" /></strong><span class="auto-style5"><strong><span class="auto-style8"> 
	</span>
	<span class="auto-style9"> <span class="tooltip">Orange Chicken<span style="color:black"> <img class="callout" src="callout_white.gif" /><img src="orange chicken.png" style="width:100px;height:100px;float:right"/>Orange Chicken is a dish inspired by the Hunan Province in South Central China. It is prepared with crispy boneless chicken bites, tossed in the wok with our secret sweet and spicy orange sauce. Panda's very own Executive Chef Andy brought this entree to life and it quickly became Panda's most beloved dish.  </span></span></input>
	</span>
	</strong></span>
</td><td class="auto-style7">$4.95</td><td class="auto-style7"><span class="tooltip1">420<span style="color:black"> <img class="callout" src="callout_white.gif" /> <strong style="font-size:x-large">Orange Chicken </strong><br /> <img src="orangechickennutri.png" />  </span></span></td></tr>
<tr>
<td class="auto-style9">
<strong>
<input type="checkbox" name="menu[]" value="Black Pepper Chicken" class="auto-style10" /></strong><span class="auto-style5"><strong><span class="auto-style8"> 
</span>
<span class="auto-style9"> <span class="tooltip">Black Pepper Chicken<span style="color:black"> <img class="callout" src="callout_white.gif" /><img src="blackpepper.png" style="width:100px;height:100px;float:right"/>Black Pepper Chicken is a traditional dish inspired by the Hunan Province in South Central China. It is prepared with marinated diced chicken, chopped celery, sliced onions and fresh ground black pepper, tossed in the wok with a mild ginger soy sauce.   </span></span></input>
</span>
</strong></span>
</td><td class="auto-style7">$5.95</td><td class="auto-style7"><span class="tooltip1">200<span style="color:black"> <img class="callout" src="callout_white.gif" /> <strong style="font-size:x-large">Black Pepper Chicken </strong><br /> <img src="blackpeppernutri.png" />  </span></span></td></tr>
<tr><td class="auto-style9">
	<strong>
<input type="checkbox" name="menu[]" value="SweetFire Chicken Breast" class="auto-style10" /></strong><span class="auto-style5"><strong><span class="auto-style8"> 
	</span>
	<span class="auto-style9"> <span class="tooltip">SweetFire Chicken Breast <span style="color:black"> <img class="callout" src="callout_white.gif" /><img src="sweetfire.png" style="width:100px;height:100px;float:right"/>SweetFire Chicken Breast features crispy, white-meat chicken bites tossed in the wok with red bell peppers, diced onions and juicy pineapple with a zesty, sweet chili sauce inspired by the flavors of Thailand.   </span></span></input>
	</span>
	</strong></span>
</td><td class="auto-style7">$4.95</td><td class="auto-style7"><span class="tooltip1">440<span style="color:black"> <img class="callout" src="callout_white.gif" /> <strong style="font-size:x-large">SweetFire Chicken Breast </strong><br /> <img src="sweetfirenutri.png" />  </span></span></td></tr>
<tr>
<td class="auto-style9">
<strong>
<input type="checkbox" name="menu[]" value="String Bean Chicken Breast" class="auto-style10" /></strong><span class="auto-style5"><strong><span class="auto-style8"> 
</span>
<span class="auto-style9"> <span class="tooltip">String Bean Chicken Breast <span style="color:black"> <img class="callout" src="callout_white.gif" /><img src="stringbean.png" style="width:100px;height:100px;float:right"/>String Bean Chicken Breast is a Cantonese dish inspired by the Guangdong Province on the Southern Coast of China. It is prepared with marinated chicken breast, fresh-cut string beans and sliced onions, tossed in the wok with a mild ginger soy sauce.   </span></span></input>
</span>
</strong></span>
</td><td class="auto-style7">$6.95</td><td class="auto-style7"><span class="tooltip1">160<span style="color:black"> <img class="callout" src="callout_white.gif" /> <strong style="font-size:x-large">String Bean Chicken Breast </strong><br /> <img src="stringbeannutri.png" />  </span></span></td></tr>
<tr>
<td class="auto-style9" style="height: 26px">
<strong>
<input type="checkbox" name="menu[]" value="Kung Pao Chicken" class="auto-style10" /></strong><span class="auto-style5"><strong><span class="auto-style8"> 
</span>
<span class="auto-style9"> <span class="tooltip">Kung Pao Chicken<span style="color:black"> <img class="callout" src="callout_white.gif" /><img src="kungpao.png" style="width:100px;height:100px;float:right"/>Kung Pao Chicken is a spicy stir-fry dish inspired by the Sichuan Province in Central China. It is prepared with marinated diced chicken, crunchy peanuts, diced red bell peppers and sliced zucchini, all tossed in the wok with fresh green onions.   </span></span></input>
</span>
</strong></span>
</td><td class="auto-style7" style="height: 26px">$4.95</td><td class="auto-style7"><span class="tooltip1">240<span style="color:black"> <img class="callout" src="callout_white.gif" /> <strong style="font-size:x-large">Kung Pao </strong><br /> <img src="stringbeannutri.png" />  </span></span></td></tr>
<tr>
<td class="auto-style9">
<strong>
<input type="checkbox" name="menu[]" value="Mushroom Chicken" class="auto-style10" /></strong><span class="auto-style5"><strong><span class="auto-style8"> 
</span>
<span class="auto-style9"> <span class="tooltip">Mushroom Chicken<span style="color:black"> <img class="callout" src="callout_white.gif" /><img src="mushroom.png" style="width:100px;height:100px;float:right"/>Mushroom Chicken is a Cantonese dish inspired by the Guangdong Province on the Southern Coast of China. It is prepared with marinated diced chicken, sliced zucchini and button mushrooms, all tossed in the wok with a mild ginger soy sauce.    </span></span></input>
</span>
</strong></span>
</td><td class="auto-style7">$3.95</td><td class="auto-style7"><span class="tooltip1">180<span style="color:black"> <img class="callout" src="callout_white.gif" /> <strong style="font-size:x-large">Mushroom Chicken </strong><br /> <img src="stringbeannutri.png" />  </span></span></td></tr>
<tr>
<td class="auto-style9">
<strong>
<input type="checkbox" name="menu[]" value="Firecracker Chicken Breast" class="auto-style10" /></strong><span class="auto-style5"><strong><span class="auto-style8"> 
</span>
<span class="auto-style9"> <span class="tooltip">Firecracker Chicken Breast <span style="color:black"> <img class="callout" src="callout_white.gif" /><img src="firecracker.png" style="width:100px;height:100px;float:right"/>Firecracker Chicken Breast is a classic dish inspired by the Sichuan province. It starts with marinated, all-white meat chicken breast, sweet red and yellow bell peppers, and crisp onions tossed in a sizzling hot wok with the perfect amount of spicy black bean sauce.   </span></span></input>
</span>
</strong></span>
</td><td class="auto-style7">$5.95</td><td class="auto-style7"><span class="tooltip1">240<span style="color:black"> <img class="callout" src="callout_white.gif" /> <strong style="font-size:x-large">Firecracker Chicken Breast </strong><br /> <img src="stringbeannutri.png" />  </span></span></td></tr>
<tr>
<td class="auto-style9">
<strong>
<input type="checkbox" name="menu[]" value="Grilled Teriyaki Chicken" class="auto-style10" /></strong><span class="auto-style5"><strong><span class="auto-style8"> 
</span>
<span class="auto-style9"> <span class="tooltip">Grilled Teriyaki Chicken <span style="color:black"> <img class="callout" src="callout_white.gif" /><img src="teriyaki.png" style="width:100px;height:100px;float:right"/>Grilled Teriyaki Chicken features marinated chicken filets that are grilled to perfection then sliced to order and served with our sweet and savory sauce. Availability of Grilled Teriyaki Chicken may vary by location.  View our Nutritional and Allergen PDF for details.   </span></span></input>
</span>
</strong></span>
</td><td class="auto-style7">$4.95</td><td class="auto-style7"><span class="tooltip1">300<span style="color:black"> <img class="callout" src="callout_white.gif" /> <strong style="font-size:x-large">Grilled Teriyaki Chicken </strong><br /> <img src="stringbeannutri.png" />  </span></span></td></tr>

<tr><td colspan="2" class="auto-style13" style="height: 6px"><strong>Seafood Entrees</strong></td></tr>
<tr><td>
	<strong>
<input type="checkbox" name="menu[]" value="Golden Schezuan Fish" class="auto-style10" /></strong><span class="auto-style5"><strong>
	<span class="tooltip">Golden Schezuan Fish <span style="color:black"> <img class="callout" src="callout_white.gif" /><img src="golden.png" style="width:100px;height:100px;float:right"/>Szechuan Cod is a dish inspired by the Sichuan Province in Central China which features a lightly battered, wild North Pacific cod fillet tossed in a sizzling wok with crisp sugar peas, sweet red bell peppers, and a zesty sauce.    </span>
	</span></span><span class="auto-style8"></input>
	</span>
	</strong>
	</span>
</td><td class="auto-style7">$4.95</td><td class="auto-style7"><span class="tooltip1">320<span style="color:black"> <img class="callout" src="callout_white.gif" /> <strong style="font-size:x-large">Golden Schezuan Fish </strong><br /> <img src="stringbeannutri.png" />  </span></span></td></tr>
<tr>
<td>
<strong>
<input type="checkbox" name="menu[]" value="Honey Walnut Shrimp" class="auto-style10" /></strong><span class="auto-style5"><strong><span class="auto-style8"> </span>
<span class="tooltip">Honey Walnut Shrimp <span style="color:black"> <img class="callout" src="callout_white.gif" /><img src="honey.png" style="width:100px;height:100px;float:right"/>Honey Walnut Shrimp is a dish inspired by the shores of Shanghai. It features fresh tempura shrimp wok-tossed in a gourmet honey sauce and topped with glazed walnuts. It's a mouthwatering combination of sweet and crispy.    </span>
</span></span><span class="auto-style8"></input>
</span>
</strong>
</span>
</td><td class="auto-style7">$5.95</td><td class="auto-style7"><span class="tooltip1">370<span style="color:black"> <img class="callout" src="callout_white.gif" /> <strong style="font-size:x-large">Honey Walnut Shrimp </strong><br /> <img src="stringbeannutri.png" />  </span></span></td></tr>

<tr><td colspan="2" class="auto-style13"><strong>Regional Entrees</strong></td></tr>
<tr><td>
	<strong>
<input type="checkbox" name="menu[]" value="Eggplant Tofu" class="auto-style10" /></strong><span class="auto-style5"><strong> <span class="tooltip">Eggplant Tofu <span style="color:black"> <img class="callout" src="callout_white.gif" /><img src="eggplant.png" style="width:100px;height:100px;float:right"/>Eggplant Tofu is a dish inspired by the Sichuan Province in Central China prepared with lightly browned tofu, fresh eggplant and diced red bell peppers, tossed in the wok with a sweet and spicy sauce.    </span>
	</span></span></input>
	</strong>
	</span>
</td><td class="auto-style7">$4.95</td><td class="auto-style7"><span class="tooltip1">310<span style="color:black"> <img class="callout" src="callout_white.gif" /> <strong style="font-size:x-large">Eggplant Tofu </strong><br /> <img src="stringbeannutri.png" />  </span></span></td></tr>
<tr>
<td>
<strong>
<input type="checkbox" name="menu[]" value="Mixed Veggies" class="auto-style10" /></strong><span class="auto-style5"><strong> <span class="tooltip">Mixed Veggies <span style="color:black"> <img class="callout" src="callout_white.gif" /><img src="veggies.png" style="width:100px;height:100px;float:right"/>Mixed Veggies is a stir-fry combination of fresh broccoli, zucchini, carrots, string beans and cabbage.    </span>
</span></span></input>
</strong>
</span>
</td><td class="auto-style7">$5.95</td><td class="auto-style7"><span class="tooltip1">35<span style="color:black"> <img class="callout" src="callout_white.gif" /> <strong style="font-size:x-large">Mixed Veggies </strong><br /> <img src="stringbeannutri.png" />  </span></span></td></tr>

<tr><td colspan="2" class="auto-style13" style="height: 6px"><strong>Sides</strong></td></tr>
<tr><td>
	<strong>
<input type="checkbox" name="menu[]" value="Chow Mein" class="auto-style10" /></strong><span class="auto-style5"><strong><span class="auto-style8"> </span>
	<span class="tooltip">Chow mein <span style="color:black"> <img class="callout" src="callout_white.gif" /><img src="chowmein.png" style="width:100px;height:100px;float:right"/>Chow Mein is prepared with our noodles, tossed in the wok with shredded onions, crisp celery and fresh cabbage.    </span>
	</span></span><span class="auto-style8"></input>
	</span>
	</strong>
	</span>
</td><td class="auto-style7">$4.95</td><td class="auto-style7"><span class="tooltip1">490<span style="color:black"> <img class="callout" src="callout_white.gif" /> <strong style="font-size:x-large">Chow Mein </strong><br /> <img src="stringbeannutri.png" />  </span></span></td></tr>
<tr>
<td>
<strong>
<input type="checkbox" name="menu[]" value="Fried Rice" class="auto-style10" /></strong><span class="auto-style5"><strong><span class="auto-style8"> </span>
<span class="tooltip">Fried Rice <span style="color:black"> <img class="callout" src="callout_white.gif" /><img src="friedrice.png" style="width:100px;height:100px;float:right"/>Fried Rice is prepared with steamed white rice that is tossed in the wok with soy sauce, scrambled eggs, green peas, carrots and chopped green onions.    </span>
</span></span><span class="auto-style8"></input>
</span>
</strong>
</span>
</td><td class="auto-style7">$5.95</td><td class="auto-style7"><span class="tooltip1">470<span style="color:black"> <img class="callout" src="callout_white.gif" /> <strong style="font-size:x-large">Fried Rice </strong><br /> <img src="stringbeannutri.png" />  </span></span></td></tr>
<tr><td>
	<strong>
<input type="checkbox" name="menu[]" value="White Steamed Rice" class="auto-style10" /></strong><span class="auto-style5"><strong><span class="auto-style8"> </span>
	<span class="tooltip">White Steamed Rice <span style="color:black"> <img class="callout" src="callout_white.gif" /><img src="whiterice.png" style="width:100px;height:100px;float:right"/>White Steamed Rice is prepared by steaming white rice to perfection.    </span>
	</span></span><span class="auto-style8"></input>
	</span>
	</strong>
	</span>
</td><td class="auto-style7">$4.95</td><td class="auto-style7"><span class="tooltip1">380<span style="color:black"> <img class="callout" src="callout_white.gif" /> <strong style="font-size:x-large">White Steamed Rice </strong><br /> <img src="stringbeannutri.png" />  </span></span></td></tr>
<tr>
<td>
<strong>
<input type="checkbox" name="menu[]" value="Brown Steamed Rice" class="auto-style10" /></strong><span class="auto-style5"><strong><span class="auto-style8"> </span>
<span class="tooltip">Brown Steamed Rice <span style="color:black"> <img class="callout" src="callout_white.gif" /><img src="brownrice.png" style="width:100px;height:100px;float:right"/>Brown Steamed Rice is prepared by steaming brown rice to perfection.    </span>
</span></span><span class="auto-style8"></input>
</span>
</strong>
</span>
</td><td class="auto-style7">$6.95</td><td class="auto-style7"><span class="tooltip1">420<span style="color:black"> <img class="callout" src="callout_white.gif" /> <strong style="font-size:x-large">Brown Steamed Rice </strong><br /> <img src="stringbeannutri.png" />  </span></span></td></tr>


<tr><td class="auto-style4" colspan="3">
<input type="submit" value="" class="imgClass" style="background-image:url('submitorder.png');width:175px;height:39px;background-color:transparent;border-style:none" />
</td></tr></table>

</form>

<br /> <br /> <br /> <br />

<br /> <br /> <br /> <br />

<br /> <br /> <br /> <br />
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
