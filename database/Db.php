<?php

$animal_cat = new Animals('cat');
$animal_dog = new Animals('dog');
$food_cat_1 = new Food('crocchette light' , 'IT1234','https://www.bauzaar.it/media/catalog/product/t/o/tonno_gatto.jpg?width=700&height=700&store=default&image-type=image', '12/07/2025' , $animal_cat);
$food_dog_1 = new Food('crocchette senior' , 'IT0123','https://www.bauzaar.it/media/catalog/product/m/e/medium-adult12kg_1.jpg?width=700&height=700&store=default&image-type=image', '12/07/2025' , $animal_dog);
$toys_cat_1 = new Toys('fish-wand' , 'IT2345','https://arcaplanet.vtexassets.com/arquivos/ids/291708/lovedi-gioco-gatto-xmas-bacchetta-topo-10170309.jpg?v=638351387471670000', 'plastic' , $animal_cat);
$toys_dog_1 = new Toys('wood-bone' , 'IT3456','https://arcaplanet.vtexassets.com/arquivos/ids/275324/camon-gioco-per-cane-bamboo-osso-grande-cm13.jpg?v=637979685840370000', 'wood' , $animal_dog);
$kennels_cat_1 = new Kennels('penthouse' , 'IT4567','https://media.adeo.com/marketplace/MKP/87472739/3e605ed47c9f621579548b1fb0ae6a56.jpeg?width=3000&height=3000&format=jpg&quality=80&fit=bounds', '30cmx40cmx10cm' , $animal_cat);
$kennels_dog_1 = new Kennels('special-cave' , 'IT5678','https://arcaplanet.vtexassets.com/arquivos/ids/294769/luna-teo-cuccia-per-cani-rettangolare-borgo-verde-10169822.jpg?v=638434135275370000', '120cmx70cmx20cm' , $animal_dog);
//var_dump($food_cat_1,$food_dog_1,$toys_cat_1,$toys_dog_1,$kennels_cat_1,$kennels_dog_1);

$total_products = [$food_cat_1,$food_dog_1,$toys_cat_1,$toys_dog_1,$kennels_cat_1,$kennels_dog_1];