<?php

	require_once 'bst.php';

	class BinarySearchTreeTest extends PHPUnit_Framework_TestCase {
		const SIZE = 10000;
		private $dataArray;
		private $binarySearchTree;

		public function setUp() {
			$this->dataArray = array();
			srand(self::SIZE);
			while (count($this->dataArray) < self::SIZE) {
				$value = rand(0,1000000);
				if (!in_array($value, $this->dataArray))
					$this->dataArray[] = $value;
			}
			$this->binarySearchTree = new BinarySearchTree($this->dataArray);
		}

		public function testRoot() {
			$root = $this->dataArray[0];
			$this->assertPresent($root, $this->binarySearchTree);
		}

		/**
		 * @depends testRoot
		 */
		public function testAllValues() {
			foreach ($this->dataArray as $presentValue)
				$this->assertPresent($presentValue, $this->binarySearchTree);
		}

		public function assertPresent($value, $tree) {
			$this->assertTrue($tree->search($value), "$value was not found when it should be.");
		}
		
		public function assertNotPresent($value, $tree) {
			$this->assertFalse($tree->search($value), "$value was wrongly found.");
		}
	}

?>