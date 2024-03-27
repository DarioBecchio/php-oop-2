<?php

$animal_cat = new Animals('cat');
$animal_dog = new Animals('dog');
$food_cat_1 = new Food('crocchette' , 'IT1234', '12/07/2025' , $animal_cat);
$food_dog_1 = new Food('crocchette' , 'IT0123', '12/07/2025' , $animal_dog);
$toys_cat_1 = new Toys('fish-wand' , 'IT2345', 'plastic' , $animal_cat);
$toys_dog_1 = new Toys('wood-bone' , 'IT3456', 'wood' , $animal_dog);
$kennels_cat_1 = new Kennels('penthouse' , 'IT4567', '30x40x10' , $animal_cat);
$kennels_dog_1 = new Kennels('special-cave' , 'IT5678', '120x70x20' , $animal_dog);
var_dump($food_cat_1,$food_dog_1,$toys_cat_1,$toys_dog_1,$kennels_cat_1,$kennels_dog_1);