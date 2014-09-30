<?
	private function deleteNode(&$node) {
		if (is_null($node->left) && is_null($node->right)) 
			$node = null;
		elseif (isset($node->left) && is_null($node->right)){ 
			$node->left->parent = $node->parent;
			$node = $node->left;
		} elseif (is_null($node->left) && isset($node->right)) {
			$node->right->parent = $node->parent;
			$node = $node->right;
		} else {
			$successor = $this->rightSuccessor($node);
			$node->value = $successor->value;
			$this->deleteNode($successor);
		}
	}
?>