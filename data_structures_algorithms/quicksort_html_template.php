<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
<title>Quicksort!</title>
</head>
<body>
<table><tr><td>Unsorted</td><td>Sorted</td><td>Correct answer</td></tr>
	<?php 
		for ($i = 0; $i < count($sortedArray); $i++) { 
			echo '<tr><td>'.$unsortedArray[$i]['value'].'</td><td>'.$sortedArray[$i]['value'].'</td><td>'.$rightAnswer[$i]['value'].'</td></tr>';
		}
	?>
</table>
</body>
</html>
