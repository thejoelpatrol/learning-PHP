<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
<title>Exercise 4-2</title>
</head>
<body>
	<h2>Cities</h2>
	<p>
	<?php 
		$cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
		echo current($cities);
		while ($city = next($cities))
			echo ", $city";

		sort($cities);
		echo "<ul>";
		foreach($cities as $city)
			echo "<li>$city</li>";
		echo "</ul>";

		array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");
		sort($cities);
		echo "<ul>";
		foreach($cities as $city)
			echo "<li>$city</li>";
		echo "</ul>";

	?>
</body>
</html>