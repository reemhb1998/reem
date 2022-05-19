<?php
    ///////////////////////////Reem/////////////////////////////


// Php program for
// Insertion in binary search tree by using recursion
class TreeNode
{
	public $data;
	public $left;
	public $right;
	public	function __construct($data)
	{
		$this->data = $data;
		$this->left = NULL;
		$this->right = NULL;
	}
}
class BST
{
	public $root;
	public	function __construct()
	{
		$this->root = NULL;
	}
	
	// Insert a node element
	public	function addNode($node, $data)
	{
		if ($node != NULL)
		{
			if ($node->data >= $data)
			{
				// When new element is smaller or
				// equal to current node
				$node->left = 
                  $this->addNode($node->left, $data);
			}
			else
			{
				// When new element is higher to current node
				$node->right = 
                  $this->addNode($node->right, $data);
			}
			// important to manage root node
			return $node;
		}
		else
		{
			return new TreeNode($data);
		}
	}
	
	
	
	
	// Display inorder
	public	function inorder($node)
	{
		if ($node != NULL)
		{
			// Visit to left subtree
			$this->inorder($node->left);
			// Display node value
			echo "  ".strval($node->data);
			// Visit to right subtree
			$this->inorder($node->right);
		}
	}
	
		// Display inorder
	public	function search($node , $data)
	{
		if ($node != NULL)
		{
			if($node->data == $data)
			{
				echo "<br> ".strval($node->data)."element found <br>";
				return true;
				
			}
			if($node->data > $data){
			// Visit to left subtree
			$this->search($node->left , $data);
			}
			// Display node value
			
			if($node->data < $data){
			// Visit to right subtree
			$this->search($node->right , $data);
			}
			
		}
		else
		{
			echo "<br> ".strval($data)."element not found<br>";
			return false;
		}
	}

	
	public static function main()
	{
		$tree = new BST();
		/*
		         10
		        / \
		       /   \
		      4     15
		     / \   /
		    3   5 12
		    -------------
		    Build binary search tree
		*/
		$tree->root = $tree->addNode($tree->root, 10);
		$tree->addNode($tree->root, 4);
		$tree->addNode($tree->root, 3);
		$tree->addNode($tree->root, 5);
		$tree->addNode($tree->root, 15);
		$tree->addNode($tree->root, 12);
		
		
		// Display tree nodes
		echo "\nInorder\n";
		$tree->inorder($tree->root);
		
		// Search element
		$tree->search($tree->root,4);
		$tree->search($tree->root,11111);
	
		
	}
}
BST::main();
