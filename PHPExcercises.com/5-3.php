<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
<title>Exercise 5-3</title>
</head>
<body>
 	<?php 
 		function area($length, $width) {
 			if (is_integer($length) && is_integer($width)) {
	 			return $length * $width;
	 		} else return 0;
 		}
 		
 		if (!isset($_POST['submit'])) {
 			echo "Enter length and width:<br/>";?>
			<form action="<? htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
				Length: <input type="text" name="length" />
				Width: <input type="text" name="width" />
				<input type="submit" name="submit" value="Submit"/>	
			</form>
 		<?} else {
 			$length = (int)$_POST['length'];
 			$width = (int)$_POST['width'];
 			echo "A rectangle with length $length and width $width has area ".area($length, $width).".";
 		}
 	?>
 </body>
 </html>