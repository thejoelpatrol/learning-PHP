<?php
		
	Class BinarySearchTree {
		private $root;

		public function __construct ($unsortedArray) {
			foreach ($unsortedArray as $value)
				$this->insert($value);
		}

		public function search ($target) {
			$foundNode = &$this->searchTree($this->root, $target);
			if (!is_null($foundNode))
				return true;
			return false;
		}

		// objects are passed by pointer anyway, but we use an explicit reference here 
		// since we will return a reference that can be used to modify where &$root points
		private function &searchTree (&$root, $target) {
			if (is_null($root))
				return $root;
			$value = $root->value;
			if ($value == $target)
				return $root;
			if ($value < $target)
				return $this->searchTree($root->right, $target);
			return $this->searchTree($root->left, $target);
		}

		public function insert ($value) {
			if (is_null($this->root)) {
				$this->root = new Node($value);
			} else {
				//$this->insertValue($this->root, $value);
				$foundNode = &$this->searchTree($this->root, $value);
				if (is_null($foundNode))
					$foundNode = new Node($value);
			}
		}

		private function insertValue(&$root, $value) {
			if (is_null($root)) {
				$root = new Node($value);
			} else {
				if ($value < $root->value)
					$this->insertValue($root->left, $value);
				else $this->insertValue($root->right, $value);
			}
		}

		/*public function delete($value) {
			$foundNode = 
		}*/
	}

	class Node {
		public $value;
		public $left = null;
		public $right = null;

		public function __construct($value) {
			$this->value = $value;
		}
	}

?>