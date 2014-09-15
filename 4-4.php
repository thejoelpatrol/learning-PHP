<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
<title>Exercise 4-4</title>
</head>
<body>
	<?php 
	
		if (!isset($_POST['modes'])) 
			$modes = ["Automobile", "Jet", "Ferry", "Subway"]; 
		else {
			$modes = $_POST['modes'];
			if (!empty($_POST['newModes'])) {
				$newModes = explode("," , $_POST['newModes']);
				$modes = array_merge($modes, $newModes);				
			}
		}
		
		echo "Travel takes many forms, whether across town, across the country, or around the world. Here is a list of some common modes of transportation: <ul>";
		foreach ($modes as $mode) {
			echo "<li>$mode</li>";
		}
		echo "</ul>"; ?>

		
		<form action="<? htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		
		<? foreach ($modes as $mode) {
			echo "<input type='hidden' name='modes[]' value=\"$mode\" />";
		}  
		
		if (isset($_POST['modes'])) 
			echo "Add more?<br/>";
		else echo "Add your favorite modes:<br/>";
	?>
		<input type="text" name="newModes" />
		<button type="submit">Go</button>
		</form>
</body>
</html>