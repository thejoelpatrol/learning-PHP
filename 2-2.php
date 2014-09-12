<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
 <html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
 <head>
 <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
<title>Exercise 2-2</title>
</head>
<body>
<?php
	$i = 0;
	echo "<p>";
	while ($i < 9) {
		echo "abc ";
		$i++;
	}
	echo "</p>";

	echo "<p>";
	$i = 0;
	do {
		echo "xyz "; 
		$i++;
	} while ($i < 9);
	echo "</p>";

	echo "</p>";
	for ($i = 1; $i <= 9; $i++)
		echo $i." ";
	echo "</p>";

	echo "<p>";
	$char = 'A';
	for ($i = 0; $i < 6; $i++) {
		echo ($i + 1).". Item ".$char."<br/>";
		$char++;
	}
	echo "</p>"

	?>
</body>
</html>

