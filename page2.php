<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>

<?php 

$demo = $_POST['demoval'];

?>

<form action="page3.php" method="post">


<input type="text" name="demoval2" />


<?php 

foreach($demo as $value)
{

echo "<input type='hidden' name='demoval3[]' value='".$value."'/> ";

}

?>

<input type="submit" value="Submit" />


</form>

</body>

</html>
