<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
 <html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
 <head>
 <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
<title>Exercise 1-7</title>
</head>
<body>
<?php 
	
	$whatsit = "hey";
	echo "Value is ".gettype($whatsit)."<br/>";
	$whatsit = 4.5;
	echo "Value is ".gettype($whatsit)."<br/>";
	$whatsit = true;
	echo "Value is ".gettype($whatsit)."<br/>";
	$whatsit = 2;
	echo "Value is ".gettype($whatsit)."<br/>";
	$whatsit = NULL;
	echo "Value is ".gettype($whatsit)."<br/>";

?>
</body>
</html>