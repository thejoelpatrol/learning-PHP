<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
 <html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
 <head>
 <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
<title>Exercise 2-4</title>
</head>
<body>
	<table style="border-style:solid;border-width:1px;">
		<?php
			for ($i = 1; $i <= 12; $i++){
				echo "<tr>";
				for ($j = 1; $j <= 12; $j++)
					echo "<td style=\"border-style:solid;border-width:1px;\">".($i * $j)."</td>";
				echo "</tr>";
			}
		?>
	</table>
</body>