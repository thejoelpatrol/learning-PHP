<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
<title>Exercise 4-7</title>
<style type="text/css">
	td, th {width: 8em; border: 1px solid black; padding-left: 4px;}
	th {text-align:center;}
	table {border-collapse: collapse; border: 1px solid black;}
</style> 
</head>
<body>
	<?php 
		
		$cities = [ ["City", "Country", "Continent"], 
					["Tokyo" , "Japan", "Asia"],
					["Mexico City" , "Mexico", "North America"],
					["New York City", "USA", "North America"],
					["Mumbai", "India", "Asia"],
					["Seoul", "Korea", "Asia"],
					["Shanghai", "China", "Asia"],
					["Lagos", "Nigeria", "Africa"],
					["Buenos Aires", "Argentina", "South America"],
					["Cairo", "Egypt", "Africa"],
					["London", "UK", "Europe"]];
		echo "<table><tr><th>".$cities[0][0]."</th><th>".$cities[0][1]."</th><th>".$cities[0][2]."</th></tr>";
		for ($i = 1; $i < count($cities); $i++) {
			echo "<tr>";
			$city = $cities[$i];
			foreach ($city as $data)
				echo "<td>$data</td>";
			echo "</tr>";
		}

	?>
</body>
</html>