<?php 
	$months = ["January" => 31,
				"February" => "28 days, if leap year 29",
				"March" => 31,
				"April" => 30,
				"May" => 31,
				"June" => 30,
				"July" => 31,
				"August" => 31,
				"September" => 30,
				"October" => 31,
				"November" => 30,
				"December" => 31];

	function makeOptions($optionArray) {
		foreach($optionArray as $value) {
			$option = ucfirst($value);
			echo "<option value=\"$option\">$option</option>";	
		}
	}

	function makeSelect($months) {
		echo "<select name='month'>";
		if (is_array($months))
			makeOptions(array_keys($months));
		echo "</select>";
	}
?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
<title>Exercise 5-6</title>
</head>
<body>
	<?php
		if (!isset($_POST['submit'])) { ?>
			<form action = "" method="POST">
				Please choose a month<br/>
				<?php makeSelect($months); ?>
				<input type="submit" name="submit" value="Go" />
			</form>
		<? } else {
			$month = $_POST['month'];
			echo "The month of $month has ".$months[$month];
			if ($month != "February") echo " days";
			echo ".";
		}
	?>
</body>
</html>