<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
<title>Exercise 4-3</title>
</head>
<body>
	<?php if (!isset($_POST['city'])) { ?>
		<h2>Describe weather you observed</h2>
		<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		City: <input type="text" placeholder="city" name="city"/><br/>
		Month: <input type="text" placeholder="month" name="month" /><br/>
		Year: <input type="text" placeholder="year" name="year"/><br/>
		<input type="checkbox" name="weather[]" value="rain">Rain</input>
		<input type="checkbox" name="weather[]" value="sunshine">Sunshine</input>
		<input type="checkbox" name="weather[]" value="clouds">Clouds</input>
		<input type="checkbox" name="weather[]" value="hail">Hail</input>
		<input type="checkbox" name="weather[]" value="sleet">Sleet</input>
		<input type="checkbox" name="weather[]" value="snow">Snow</input>
		<input type="checkbox" name="weather[]" value="wind">Wind</input>
		<button type="submit">submit</button>
		</form>
	<? } else {
		
		$location = array($_POST['city'], $_POST['month'], $_POST['year']);
		echo "In $location[0] in the month $location[1], $location[2] you observed the following weather: <ul>";
		$weather = $_POST['weather'];
		foreach($weather as $observed)
			echo "<li>$observed</li>";
		echo "</ul>";
	}
?>
</body>
</html>