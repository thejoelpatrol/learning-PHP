<?php
	require_once 'database.php';
	require_once 'quicksort.php';

	class QuickSortTest extends PHPUnit_Framework_TestCase {
		/**
		 * @dataProvider pullData
		 */
		public function testSort ($unsortedArray) {
			$correctSorted = $unsortedArray;
			$arrayToSort = $unsortedArray;
			quicksort($arrayToSort, 0, count($arrayToSort) - 1, 'id', 'value');
			usort($correctSorted, function($a, $b) { return $a['value'] - $b['value'];});
			$this->assertEquals($correctSorted, $arrayToSort);
		}

		public function pullData () {
			$unsortedArray1000 = $this->generateData(1000);
			$unsortedArray10000 =  $this->generateData(10000);
			$unsortedArray100000 =  $this->generateData(100000);
			$unsortedArray = array(array($unsortedArray1000), array($unsortedArray10000), array($unsortedArray100000));
			return $unsortedArray;
		}

		private function generateData ($size) {
			$uniqueArray = array();
			$randomArray = array();
			srand($size);
			for ($i = 1; $i <= $size; $i++) {
				$randomInt = rand(1, 10000);
				if (!in_array($randomInt, $uniqueArray)) {
					$uniqueArray[] = $randomInt;
					$randomArray[] = ['id' => $i, 'value' => $randomInt];
				}
			}
			return $randomArray;
		}
	}

?>