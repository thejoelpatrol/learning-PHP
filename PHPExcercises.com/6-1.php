<?php 
	$browsers = ["Firefox", "Chrome", "Safari", "Opera", "Internet Explorer", "Other"];

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
		if (!isset($_POST['submit'])) { 
				$select = new Select("browser", $browsers); ?>
				<h2>Hai, plz to give ur infoz</h2>
				<form action = "<? htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
				Name: <input type="text" name="name" /><br/>
				Username: <input type="text" name="username" /><br/>
				Email: <input type="text" name="email" /><br/>
				<? $select->makeSelect(); ?>
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
			if (!empty($_POST['browser'])) {
				$browser = $_POST['browser'];
				echo "Your preferred browser: $browser<br/>";
			} else echo "You didn't select your preferred browser =( <br/>";
		}
	?>
</body>
</html>