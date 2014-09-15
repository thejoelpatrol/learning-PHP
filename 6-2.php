<?php 
	$browsers = ["None", "Firefox", "Chrome", "Safari", "Opera", "Internet Explorer", "Other"];
	$speeds = ["Unknown", "DSL", "Cable", "Dial-up", "T1", "Other"];
	$os = ["Windows", "Mac", "Linux", "Other"];

	function listIt() {
		$args = func_get_arg(0);
		if (is_string($args)) {
			$items = explode(",", $args);
			$items = array_map('trim', $items);
		} else $items = $args;
		$items = array_map('ucwords', $items);
		foreach ($items as $item)
			echo "<li>$item</li>";
	}

	class Select {
		private $name;
		private $values;

		public function __construct($name, $values) {
			$this->setName($name);
			$this->setValues($values);
		}

		public function getName($newName) {
			return $this->name;
		}	

		public function setName($newName) {
			if (is_string($newName))
				$this->name = $newName;
			else die("can't set \$name to \$newName: ".var_dump($newName));
		}

		public function getValues() {
			return $this->values;
		}

		public function setValues($newValues) {
			if (is_array($newValues)) {
				$this->values = $newValues;
			} else die("can't set \$values to \$newValues: ".var_dump($newValues));
		}

		private function makeOptions($optionArray) {
			foreach($optionArray as $value) {
				$option = ucwords($value);
				echo "<option value=\"$option\">$option</option>";	
			}
		}

		public function makeSelect() {
			echo "<select name=\"$this->name\">";
			$this->makeOptions(array_values($this->values));
			echo "</select>";
		}
	}
?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /> 
<title>Exercise 6-1</title>
</head>
<body>


	<?php
		if (!isset($_POST['submit'])) { ?>
				<h2>Hai, plz to give ur infoz</h2>
				<form action = "<? htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
				Name: <input type="text" name="name" /><br/>
				Username: <input type="text" name="username" /><br/>
				Email: <input type="text" name="email" /><br/>
				<h3>Work access</h3>
				<? 	$workBrowser = new Select("primary_browser", $browsers); 
					echo "<br/>Primary browser:<br/>";
					$workBrowser->makeSelect();
					$workSpeed = new Select("work_speed", $speeds);
					echo "<br/>Speed:<br/>";
					$workSpeed->makeSelect();
					$workOS = new Select("work_OS", $os);
					echo "<br/>OS:<br/>";
					$workOS->makeSelect();
					unset($workSpeed, $workBrowser, $workOS);
					 ?>
				<h3>Home access</h3>	 
				<? 	$homeBrowser = new Select("primary_home_browser", $browsers); 
					echo "<br/>Primary browser:<br/>";
					$homeBrowser->makeSelect();
					$homeSpeed = new Select("home_speed", $speeds);
					echo "<br/>Speed:<br/>";
					$homeSpeed->makeSelect();
					$homeOS = new Select("home_OS", $os);
					echo "<br/>OS:<br/>";
					$homeOS->makeSelect();
					unset($homeSpeed, $homeBrowser, $homeOS);
				?>
				<input type="submit" name="submit" value="Go" />
			</form>
		<? } else {
			if (!empty($_POST['name'])) {
				$name = $_POST['name'];
				echo "Your name: $name<br/>";
			} else echo "You didn't enter your name =(<br/>";
			if (!empty($_POST['username'])) {
				$username = $_POST['username'];
				echo "Your username: $username<br/>";
			} else echo "You didn't enter a username =(<br/>";
			if (!empty($_POST['email'])) {
				$email = $_POST['email'];
				echo "Your email: $email<br/>";
			} else echo "You didn't enter your email =(<br/>";

			echo "<h3>Work access</h3><ul>";
			listIt(array($_POST['primary_browser'], $_POST['work_speed'], $_POST['work_OS']));
			echo "</ul><h3>Home access</h3><ul>";
			listIt(array($_POST['primary_home_browser'], $_POST['home_speed'], $_POST['home_OS']));

		}
	?>
</body>
</html>