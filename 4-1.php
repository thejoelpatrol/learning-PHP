<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
<title>Exercise 4-1</title>
</head>
<body>
<h1>Weather!</h1>
<?php
	$weather = ['rain', 'sunshine', 'clouds', 'hail', 'sleet', 'snow', 'wind'];
	echo "We've seen all kinds of weather this month. At the beginning of the month, we had $weather[5] and $weather[6]. ";
	echo "Then came $weather[1] and a few $weather[2] and some $weather[0]. ";
	echo "At least we didn't get any $weather[3] or $weather[4]. ";
?>
</body>
</html>