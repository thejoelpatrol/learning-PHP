<?php

	require_once 'database.php';
	require_once 'bst.php';

	$limit = 10000;
	srand($limit);
	function selectPresentValues($array, $number) {
		$values = array();
		for ($i = 0; $i < $number; $i++) {
			$index = rand(0, count($array)-1);
			if (!in_array($array[$index], $values));
				$values[] = $array[$index];
		}
		return $values;
	}
	function selectNotPresentValues($array, $number) {
		$values = array();
		$i = 0;
		while ($i < $number) {
			$value = rand(0, 10000);
			if (!in_array($value, $array)) {
				$values[] = $value;
				$i++;
			}
		}
		return $values;
	}	

	$practiceDB = new Database('algorithm_practice');
	$query = $practiceDB->db->prepare("SELECT * FROM sorting WHERE id < $limit");
	try {
		$query->execute();
		$unsortedArray = $query->fetchAll(PDO::FETCH_COLUMN, 1);
	} catch (PDOException $e) {
		echo 'Query error: '.$query->errorCode();
		exit();
	}

	$searchTree = new BinarySearchTree($unsortedArray);

	echo "Checking for values that should be present<br>";
	$present = selectPresentValues($unsortedArray, $limit/2);
	$present[] = 3685; // the first number in the DB, make sure the root is OK;
	foreach ($present as $valueToFind){
		$foundPresent = $searchTree->search($valueToFind);
		if (!$foundPresent)
			echo "Problem: couldn't find $valueToFind<br/>";
	}
	
	echo "Checking for values that should not be present<br>";
	$notPresent = selectNotPresentValues($unsortedArray, $limit/2);
	foreach ($notPresent as $shouldNotFind){
		$foundNotPresent = $searchTree->search($shouldNotFind);
		if ($foundNotPresent)
			echo "Problem: found $shouldNotFind<br/>";
	}
		
	echo "Removing elements and checking that they and only they have been removed<br>";
	$toRemove = array_slice($present, 0, $limit/4);
	//$toRemove = [6331, 6298];
	foreach ($toRemove as $remove){
		$searchTree->delete($remove);
		$foundRemoved = $searchTree->search($remove);
		if ($foundRemoved)
			echo "Problem: found $remove<br/>";
	}
	$remaining = array_diff($present, $toRemove);
	foreach ($remaining as $valueToFind){
		$foundPresent = $searchTree->search($valueToFind);
		if (!$foundPresent)
			echo "Problem: couldn't find $valueToFind<br/>";
	}	


	echo "Done.";
?>