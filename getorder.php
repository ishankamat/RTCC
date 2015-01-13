<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>

<?php 

$menu = $_POST['menu'];


echo "<table>";
foreach ( $menu as $value ) {

	if ($value=="Orange Chicken")
{

$price = "$4.95";
}
if ($value=="Black Pepper Chicken")
{
$price ="$5.95";

}



    echo "<tr><td>".$value."</td><td>";
    echo $price."</td></tr>";
  
}
echo "</table>";

?>




</body>

</html>
