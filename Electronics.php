<?php
class ElectronicItems {

// Item attributes are all protected:
protected $id;
protected $ProductName;
protected $Extra = array();
protected $price;
protected $type;

// Constructor populates the attributes:
public function __construct($id, $ProductName, $Extra, $maxExtra , $price, $type) {
    $this->id = $id;
    $this->ProductName = $ProductName;
    $this->Extra = $Extra;
    $this->maxExtra = $maxExtra;
    $this->price = $price;
    $this->type = $type;
}

// Method that returns the ID:
public function getId() {
    return $this->id;
}

// Method that returns the name:
public function getProdName() {
    return $this->ProductName;
}
public function getExtra() {
    return $this->Extra;
}
public function maxExtra() {
    return $this->maxExtra;
}

// Method that returns the price:
public function getPrice() {
    return $this->price;
}

public function getType() {
    return $this->type;
}

} // End of Item class.
?>