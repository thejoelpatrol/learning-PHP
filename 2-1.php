<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
 <html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
 <head>
 <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
<title>Exercise 2-1</title>
</head>
<body>
<?php 	
	$month = date('F', time());
	if ($month == "August")
		echo "It's August, so it's really hot.<br/>";
	else echo "Not August, so at least not in the peak of the heat.<br/>";
?>
</body>
</html>