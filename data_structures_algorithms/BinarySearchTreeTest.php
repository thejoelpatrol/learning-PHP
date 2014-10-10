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

		/** 
		* @covers BinarySearchTree::__construct
 		* @covers BinarySearchTree::insert
		*/
		public function testRootNodeIsInserted() {
			$root = $this->dataArray[0];
			$this->assertPresent($root, $this->binarySearchTree);
		}

		/**
		 * @depends testRootNodeIsInserted
		 * @covers BinarySearchTree::__construct
 		 * @covers BinarySearchTree::insert
		 */
		public function testAllTestValuesAreInserted() {
			foreach ($this->dataArray as $presentValue)
				$this->assertPresent($presentValue, $this->binarySearchTree);
		}

		/** 
		* @covers BinarySearchTree::delete
		*/
		public function testTreeStructureIsMaintainedWhenDeletingRoot() {
			$root = $this->dataArray[0];
			$this->binarySearchTree->delete($root);
			$this->assertNotPresent($root, $this->binarySearchTree);
			$this->assertPresent($this->dataArray[1], $this->binarySearchTree);
			$this->assertPresent($this->dataArray[2], $this->binarySearchTree);
			$this->assertPresent($this->dataArray[3], $this->binarySearchTree);
		}

		/** 
		 * @depends testTreeStructureIsMaintainedWhenDeletingRoot
 		 * @covers BinarySearchTree::delete
		 */
		public function testTreeStructureIsMaintainedWhenDeleting1000Items() {
			for ($i = 0; $i < 1000; $i++) {
				$value = $this->dataArray[$i];
				$this->binarySearchTree->delete($value);
				$this->assertNotPresent($value, $this->binarySearchTree);
			}
			for ($i = 1000; $i < self::SIZE; $i++)
				$this->assertPresent($this->dataArray[$i], $this->binarySearchTree);
		}

		/**
		 * @depends testTreeStructureIsMaintainedWhenDeleting1000Items
 		 * @covers BinarySearchTree::delete
 		 * @covers BinarySearchTree::insert
		 */
		public function testInsertionWorksAfterDeleting1000Items() {
			for ($i = 0; $i < 1000; $i++) {
				$value = $this->dataArray[$i];
				$this->binarySearchTree->delete($value);
			}
			for ($i = 0; $i < 1000; $i++) {
				$value = $this->dataArray[$i];
				$this->binarySearchTree->insert($value);
			}
			for ($i = 0; $i < count($this->dataArray); $i++) {
				$value = $this->dataArray[$i];
				$this->assertPresent($value, $this->binarySearchTree);
			}
		}	

		/** 
		 * @covers BinarySearchTree::insert
		 * @expectedException InvalidArgumentException
		 * @expectedExceptionCode 1
		 */
		public function testInsertingAWordThrowsAnException() {
			$this->binarySearchTree->insert("hey");
		}	

		public function assertPresent($value, $tree) {
			$this->assertTrue($tree->search($value), "$value was not found when it should be.");
		}
		
		public function assertNotPresent($value, $tree) {
			$this->assertFalse($tree->search($value), "$value was wrongly found.");
		}
	}

?>