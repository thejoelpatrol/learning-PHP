<?php
	function insertWeatherOptions() {
		$args = func_get_args();
		foreach ($args as $option) {
			echo "<input type='checkbox' name='weather[]' value=$option>".ucfirst($option)."</input>";
		}
	}

	function listIt() {
		$args = func_get_arg(0);
		if (is_string($args)) {
			$items = explode(",", $args);
			$items = array_map('trim', $items);
		} else $items = $args;
		$items = array_map('ucfirst', $items);
		foreach ($items as $item)
			echo "<li>$item</li>";

	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
<title>Exercise 5-5</title>
</head>
<body>
	<?php if (!isset($_POST['city'])) { ?>
		<h2>Describe weather you observed</h2>
		<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		City: <input type="text" placeholder="city" name="city"/><br/>
		Month: <input type="text" placeholder="month" name="month" /><br/>
		Year: <input type="text" placeholder="year" name="year"/><br/>
		<?php insertWeatherOptions("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind", "fog", "humidity"); ?>
		<br/>Anything else?<br/>
		<input type="text" name="newWeather"/>
		<button type="submit">submit</button>
		</form>
	<? } else {
		$location = array($_POST['city'], $_POST['month'], $_POST['year']);
		echo "In $location[0] in the month $location[1], $location[2] you observed the following weather:";
		$weather = $_POST['weather'];
		$newWeather = $_POST['newWeather'];
		echo "<ul>";
		listIt($weather);
		listIt($newWeather);
		echo "</ul>";
	}
?>
</body>
</html>