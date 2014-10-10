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


		public function testDeletingRoot() {
			$root = $this->dataArray[0];
			$this->binarySearchTree->delete($root);
			$this->assertNotPresent($root, $this->binarySearchTree);
			$this->assertPresent($this->dataArray[1], $this->binarySearchTree);
			$this->assertPresent($this->dataArray[2], $this->binarySearchTree);
			$this->assertPresent($this->dataArray[3], $this->binarySearchTree);
		}

		/** 
		 * @depends testDeletingRoot
		 */
		public function testDeleting1000() {
			for ($i = 0; $i < 1000; $i++) {
				$value = $this->dataArray[$i];
				$this->binarySearchTree->delete($value);
				$this->assertNotPresent($value, $this->binarySearchTree);
			}
			for ($i = 1000; $i < self::SIZE; $i++)
				$this->assertPresent($this->dataArray[$i], $this->binarySearchTree);
		}

		/**
		 * @depends testDeleting1000
		 */
		public function testDeleteAndInsert() {
			for ($i = 0; $i < 1000; $i++) {
				$value = $this->dataArray[$i];
				$this->binarySearchTree->delete($value);
				//$this->assertNotPresent($value, $this->binarySearchTree);
			}
			for ($i = 0; $i < 1000; $i++) {
				$value = $this->dataArray[$i];
				$this->binarySearchTree->insert($value);
				//$this->assertPresent($value, $this->binarySearchTree);
			}
			for ($i = 0; $i < count($this->dataArray); $i++)
				$this->assertPresent($this->dataArray[$i], $this->binarySearchTree);
		}		

		public function assertPresent($value, $tree) {
			$this->assertTrue($tree->search($value), "$value was not found when it should be.");
		}
		
		public function assertNotPresent($value, $tree) {
			$this->assertFalse($tree->search($value), "$value was wrongly found.");
		}
	}

?>