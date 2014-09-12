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
		<select name="day" >
			<option value="MONDAY">Monday</option>
			<option value="TUESDAY">Tuesday</option>
			<option value="WEDNESDAY">Wednesday</option>
			<option value="THURSDAY">Thursday</option>
			<option value="FRIDAY">Friday</option>
			<option value="SATURDAY">Saturday</option>
			<option value="Sunday">Sunday</option>
		</select>
		<button type="submit">submit</button>
		</form>
	<? } else {
		switch($_POST['day']) {
			case "MONDAY": echo "Laugh on Monday, laugh for danger."; break;
			case "TUESDAY": echo "Laugh on Tuesday, kiss a stranger."; break;
			case "WEDNESDAY": echo "Laugh on Wednesday, laugh for a letter."; break;
			case "THURSDAY": echo "Laugh on Thursday, something better."; break;
			case "FRIDAY": echo "Laugh on Friday, laugh for sorrow."; break;
			case "SATURDAY": echo "Laugh on Saturday, joy tomorrow."; break;
			default: echo "Um, ".$_POST['day']." is not part of this poem."; break;
		} ?>
		<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		<button type="submit">try again</button>
		</form>		
	<? }
?>

</body>
</html>