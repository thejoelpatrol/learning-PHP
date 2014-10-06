<?php
	function quicksort(array &$array, $start, $end, $value) {
		if ($start >= $end)
			return;
		$pivotStartIndex = pickPivot($array, $start, $end);
		$pivotNewIndex = partition($array, $start, $end, $pivotStartIndex, $value);
		quicksort($array, $start, $pivotNewIndex - 1, $value);
		quicksort($array, $pivotNewIndex + 1, $end, $value);
	}	

	function pickPivot(&$array, $start, $end) {
		return $start;
	}

	function partition(array &$array, $start, $end, $pivotIndex, $fieldToCompare) {
		$pivot = $array[$pivotIndex][$fieldToCompare];
		$left = $start; 
		$right = $end;
		while ($right > $left) {
			while ($left < $end && $array[$left][$fieldToCompare] <= $pivot) 
				$left++;
			while ($right > $start && $array[$right][$fieldToCompare] > $pivot)
				$right--;
			if ($right > $left)
				swap($array, $left, $right);	
		}
		swap($array, $pivotIndex, $right);
		return $right;
	}

	function swap(&$array, $index1, $index2) {
		$temp = $array[$index1];
		$array[$index1] = $array[$index2];
		$array[$index2] = $temp;
	}

?>