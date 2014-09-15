<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
<title>Exercise 4-5</title>
</head>
<body>
	<?php 
		// this is more in line with the instructions, but seems like a dumb way to organize this information
		$cities = [ "Japan" => "Tokyo", 
					"Mexico" => "Mexico City", 
					"USA" => "New York City", 
					"India" => "Mumbai", 
					"Korea" => "Seoul", 
					"China" => "Shanghai", 
					"Nigeria" => "Lagos", 
					"Argentina" => "Buenos Aires", 
					"Egypt" => "Cairo", 
					"England" => "London"];
		if (!isset($_POST['city'])){ ?>
			<form action="<? htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
			Please choose a city:<br/>
			<select name="city">
				<? foreach ($cities as $city)
					echo "<option value=\"$city\">$city</option>";
				?>
			</select>
			<button type="submit" name="submit">Go</button>
			</form>
		<? } else {
			$city = $_POST['city'];
			$country = array_search($city, $cities);
			//$country = $cities[$city];
			if ($country === FALSE) 
				echo "I don't know what country $city is in";
			else echo "$city is in $country";
		}
	?>
</body>
</html>