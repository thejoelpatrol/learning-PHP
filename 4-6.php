<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
<title>Exercise 4-6</title>
</head>
<body>
	<?php 
		$selectionSize = 5;
		$temps = [68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78,
				  68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83];
	  	sort($temps);
	  	$highs = array_slice($temps, 0, $selectionSize);
	  	$lows = array_slice($temps, -$selectionSize);
	  	$meanTemp = round(array_sum($temps) / count($temps));
	  	echo "Average temp: $meanTemp<br/>";
	  	echo "Highs: ";
	  	foreach ($highs as $temp)
	  		echo "$temp&deg; ";
	  	echo "<br/>Lows: ";
	  	foreach ($lows as $temp)
	  		echo "$temp&deg; ";
	  	echo "<br/>";
	?>
</body>
</html>
