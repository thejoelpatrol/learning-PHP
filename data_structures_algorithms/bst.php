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
				$foundNode = &$this->searchTree($this->root, $value);
				if (is_null($foundNode)) {
					$foundNode = new Node($value);
					$test = $this->nodeParent($this->root, $foundNode);
					$foundNode->parent = $this->nodeParent($this->root, $foundNode);
				}
			}
		}

		// precondition: $target is not the root of the entire tree
		// precondition: $target->value != $root->value
		private function nodeParent ($root, $target) {	
			if ($root->value < $target->value) {
				if ($root->right === $target)
					return $root;				
				return $this->nodeParent($root->right, $target);
			} else {
				if ($root->left === $target)
					return $root;
				return $this->nodeParent($root->left, $target);
			}
		}

		public function delete($value) {
			$foundNode = &$this->searchTree($this->root, $value);
			if (isset($foundNode))
				$this->deleteNode($foundNode);
		}

		private function deleteNode($node) {
			$parent = $node->parent;
			$isLeftChild = ($parent->left === $node);

			if (is_null($node->left) && is_null($node->right)) {
				if ($isLeftChild)
					$parent->left = null;
				else $parent->right = null;
			} elseif (isset($node->left) && is_null($node->right)){ 
				$node->left->parent = $node->parent;
				if ($isLeftChild)
					$parent->left = $node->left;
				else $parent->right = $node->left;
			} elseif (is_null($node->left) && isset($node->right)) {
				$node->right->parent = $node->parent;
				if ($isLeftChild)
					$parent->left = $node->right;
				else $parent->right = $node->right;
			} else {
				$successor = $this->rightSuccessor($node);
				$node->value = $successor->value;
				$this->deleteNode($successor);
			}
		}

		//precondition: $node has a right subtree
		private function rightSuccessor($node) {
			$successor = $node->right;
			while (isset($successor->left))
				$successor = $successor->left;
			return $successor;
		}
	}

	class Node {
		public $value;
		public $parent = null;
		public $left = null;
		public $right = null;

		public function __construct($value) {
			$this->value = $value;
		}
	}

?>