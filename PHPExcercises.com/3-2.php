<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
<title>Exercise 3-2</title>
</head>
<body>
<?php
	if (!empty($_POST['city']))
		echo "Your favorite city is ".$_POST['city']."<br/>";	
	else { ?>
		Enter your favorite city:<br/>
		<form method="POST" action="<? htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<input type="text" name="city" placeholder="Favorite city" />
		<button type="submit">submit</button>
		</form>
	<? } 
?>
</body>
</html>
