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
    public function __construct(public $species)
    {
        $this->species= $species;
    }
}

class Products
{
    public function __construct(public string $descriptions, public string $barcode)
    {
        $this->descriptions = $descriptions;
        $this->barcode = $barcode;
    }
}

class Food extends Products 
{
    public function __construct(public string $descriptions, public string $barcode , public string $expiredate , public Animals $type)
    {
        parent::__construct($descriptions,$barcode);
        $this->expiredate = $expiredate;
        $this->type = $type;

    }
}

class Toys extends Products
{
    public function __construct(public string $descriptions, public string $barcode , public string $material , public Animals $type)
    {
        parent::__construct($descriptions,$barcode);
        $this->material = $material;
        $this->type = $type;

    }
}

class Kennels extends Products
{
    public function __construct(public string $descriptions, public string $barcode , public string $size , public Animals $type)
    {
        parent::__construct($descriptions,$barcode);
        $this->size = $size;
        $this->type = $type;
    }
}

