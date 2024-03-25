<?php
class Product
{
public $typeofanimal;
public $name;
public $price;
public $categories;
public $images;

public function __construct($typeofanimal,$name,$price,$categories,$images)
{
    // select an object property inside a class using the $this variable
$this->typeofanimal = $typeofanimal;
$this->name = $name;
$this->price = $price;
$this->categories = $categories;
$this->images = $images;
}

}


