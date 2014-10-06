<?php
	require_once 'database.php';
	require_once 'quicksort.php';

	class QuickSortTest extends PHPUnit_Framework_TestCase {
		private $db;

		public function testEmpty () {
			$empty = array();
			quicksort($empty, 0, 0, '');			
			$this->assertEmpty($empty);
		}

		public function testOneItem () {
			$oneItem = array('value' => 5);
			quicksort($oneItem, 0, 0, 'value');		
			$this->assertCount(1, $oneItem);	
			$this->assertSame($oneItem, array('value' => 5));
		}		

		/**
		 * @test
		 */
		public function sortDBdata  () {
			$this->markTestIncomplete('Have not added the database yet.');
		}

		public function testSkip () {
			// this test should be skipped
			if (is_null($db))
				$this->markTestSkipped('Skipping database test, as a test of skipping a test.');
		}

		/**
		 * @dataProvider pullData
		 */
		public function testSort ($unsortedArray) {
			$correctSorted = $unsortedArray;
			$arrayToSort = $unsortedArray;
			quicksort($arrayToSort, 0, count($arrayToSort) - 1, 'value');
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