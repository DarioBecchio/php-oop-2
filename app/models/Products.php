<?php

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

