<?php
	
	class Elecfunction{
		protected $items = array();
		protected $id = array();

		function __construct() {
		    $this->items = array();
		    $this->id = array();
		}

		public function addItem(Item $item) {

		    // Need the item id:
		    $id = $item->getId();

		    // Throw an exception if there's no id:
		    if (!$id) throw new Exception('The cart requires items with unique ID
		    values.');

		    // Add or update:
		    if (isset($this->items[$id])) {
		        $this->updateItem($item, $this->items[$item]['qty'] + 1);
		    } else {
		        $this->items[$id] = array('item' => $item, 'qty' => 1);
		        $this->ids[] = $id; // Store the id, too!
		    }

	    }

		 public function count() {
		    return count($this->items);
		}

	}

?>