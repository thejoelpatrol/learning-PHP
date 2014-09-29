<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
<title>Exercise 5-2</title>
</head>
<body>
 	<?php 
 		function area($length, $width) {
 			if (is_int($length) && is_int($width)){
	 			$area = $length * $width;	
	 			return "A rectangle with length $length and width $width has area $area.";
	 		}
 		}
 		echo area(5,2)."<br/>";
 		echo area(3,10)."<br/>";
 		echo area(4,23)."<br/>";
 	?>
 </body>
 </html>