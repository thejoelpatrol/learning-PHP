<?php 
	include 'database.php';
	$db = new Database('algorithm_practice');
	for ($i = 0; $i < 100000; $i++) {
		$value = rand(0, 10000);
		$query = $db->db->prepare("INSERT INTO sorting SET value=$value");
		try {
			$query->execute();
			//echo "ok!<br>";
		} catch (PDOException $e) {
			echo "error: ".$query->errorCode;
		}
	} 
	unset($i);
?>
