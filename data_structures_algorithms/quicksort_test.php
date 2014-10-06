<?php
	require_once 'database.php';
	require_once 'quicksort.php';

	function equalValues($array1, $array2) {
		if (count($array1) != count($array2))
			return false;
		for ($i = 0; $i < count($array1); $i++) {
			if ($array1[$i]['value'] != $array2[$i]['value']){
				echo "array1[$i]['value']=$array1[$i]['value'], array2[$i]['value']=$array2[$i]['value']<br>";
				return false;
			}
		}
		return true;
	}

	$limit = 100000;

	$practiceDB = new Database('algorithm_practice');
	$query = $practiceDB->db->prepare("SELECT * FROM sorting WHERE id <= $limit");
	try {
		$query->execute();
		$unsortedArray = $query->fetchAll();
		$arrayToSort = $unsortedArray;
		$beginMine = microtime(true);
		quicksort($arrayToSort, 0, count($arrayToSort) - 1, 'value');
		echo 'My time: '.(microtime(true) - $beginMine).'<br>';

		$sortedArray = &$arrayToSort;
		unset($arrayToSort);

		$rightAnswer = $unsortedArray;
		$beginBuiltin = microtime(true);
		usort($rightAnswer, function($a, $b) { return $a['value'] - $b['value'];});
		echo 'Builtin sort time: '.(microtime(true) - $beginBuiltin).'<br>';
		if (!equalValues($rightAnswer, $sortedArray)) {
			echo "error!<br>";
		}

	} catch (PDOException $e) {
		echo "Query error: ".$query->errorCode;
		exit();
	}	
	include 'quicksort_html_template.php';
?>