<?php
/*class Product
{

public $typeofanimal;
public $name;
public $price;
public $categories;
public $images;

public function __construct(public $typeofanimal,public $name,public $price,public $categories,public $images) 
{
    // select an object property inside a class using the $this variable
$this->typeofanimal = $typeofanimal;
$this->name = $name;
$this->price = $price;
$this->categories = $categories;
$this->images = $images;
}

}*/

class Animals

{
    public function __construct(public $cat, public $dog)
    {
        $this->cat= $cat;
        $this->dog= $dog;
    }
}

class Products extends Animals 
{
    public function __construct(public $food, public $toys, public $kennel)
    {
        $this->food= $food;
        $this->toys= $toys;
        $this->kennel = $kennel;
    }
}


