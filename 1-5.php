<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
 <html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
 <head>
 <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
<title>Exercise 1-5</title>
</head>
<body>
<?php $name = "Harry";
	var_dump($name); 
	echo "<br/>";
	print_r($name); 
	echo "<br/>";
	$num = 28;
	var_dump($num);
	echo "<br/>";

	$new; // NULL
	$num = NULL; // NULL
	unset($name); // NULL, but supposedly this is now not supposed to be printable in PHP 5.4 (though it looks like it is to me)
	var_dump($num);
	 ?>
	

</body>
</html>