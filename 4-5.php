<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
<title>Exercise 4-5</title>
</head>
<body>
	<?php 
		// the instructions for this task sounded backwards to me. This seems to be the more sensible way to do it
		$cities = ["Tokyo"=> "Japan", 
					"Mexico City"=> "Mexico", 
					"New York City"=> "USA", 
					"Mumbai"=> "India", 
					"Seoul"=> "Korea", 
					"Shanghai"=> "China", 
					"Lagos"=> "Nigeria", 
					"Buenos Aires"=> "Argentina", 
					"Cairo"=> "Egypt", 
					"London"=> "England"];
		if (!isset($_POST['city'])){ ?>
			<form action="<? htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
			Please choose a city:<br/>
			<select name="city">
				<? foreach ($cities as $city => $country)
					echo "<option value=\"$city\">$city</option>";
				?>
			</select>
			<button type="submit">Go</button>
			</form>
		<? } else {
			$city = $_POST['city'];
			$country = $cities[$city];
			echo "$city is in $country";
		}
	?>
</body>
</html>