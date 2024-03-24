<?php
/*
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, 
come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando 
(prodotto, cibo, gioco, cuccia).
*/

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
$this-> typeofanimal = $typeofanimal;
$this->name = $name;
$this->price = $price;
$this->categories = $categories;
$this->images = $images;
}

}

//create an istance of a class (an object) with the 'new' keyword

$product_1 = new Product('Dog', 'Prescription Diet Croquettes', 15.99 , 'Food', 'immagine');
$product_2 = new Product('Cat', 'Science Plan Sterilised Wet food', 25.99 , 'Food', 'immagine');
$product_3 = new Product('Dog','Hairy Donut Kennel', 35.99 , 'Kennel','immagine');
$product_4 = new Product('Cat','Cat Wand Game', 3.99 , 'Toys','immagine');
