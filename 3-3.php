<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
<title>Exercise 3-2</title>
</head>
<body>

<?php
	if (!isset($_POST['day'])) { ?>
		<p>Laugh on Monday, laugh for danger.<br/>
		Laugh on Tuesday, kiss a stranger.<br/>
		Laugh on Wednesday, laugh for a letter.<br/>
		Laugh on Thursday, something better.<br/>
		Laugh on Friday, laugh for sorrow.<br/>
		Laugh on Saturday, joy tomorrow.<br/></p>

		<p>What day is it?<br/>
		<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		<input type="text" name="day" placeholder="Today" />
		<button type="submit">submit</button>
		</form>
	<? } else {
		if (strtoupper($_POST['day']) == "MONDAY") echo "Laugh on Monday, laugh for danger.";
		elseif (strtoupper($_POST['day']) == "TUESDAY") echo "Laugh on Tuesday, kiss a stranger."; 
		elseif (strtoupper($_POST['day']) ==  "WEDNESDAY") echo "Laugh on Wednesday, laugh for a letter."; 
		elseif (strtoupper($_POST['day']) ==  "THURSDAY") echo "Laugh on Thursday, something better."; 
		elseif (strtoupper($_POST['day']) ==  "FRIDAY") echo "Laugh on Friday, laugh for sorrow."; 
		elseif (strtoupper($_POST['day']) ==  "SATURDAY") echo "Laugh on Saturday, joy tomorrow."; 
		else echo "Um, ".$_POST['day']." is not part of this poem."; 
		?>
		<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		<button type="submit">try again</button>
		</form>		
	<? }
?>

</body>
</html>