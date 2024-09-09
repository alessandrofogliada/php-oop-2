 <?php
 require_once __DIR__ . '/../Model/Products.php';
 require_once __DIR__ . '/../Model/Category.php';
 require_once __DIR__ . '/../Model/Type_of_product.php';

// salvo in una variabile la categoria Cane/Gatto 

 $categories =[
    new Category('Cani <i class="fa-solid fa-dog"></i>'),
    new Category('Gatti <i class="fa-solid fa-cat"></i>' ),
 ];

 $type=[
    new Type_of_product('Food'),
    new Type_of_product('Toy')
];

//  assegno specificatamente la categoria cane o gatto alle variabili 

$categoryDog = $categories[0]; 
$categoryCat = $categories[1];

$typeFood = $type[0];
$typeToy = $type[1];
 
$products = [
    new Products('Palla giocattolo' , 'https://arcaplanet.vtexassets.com/arquivos/ids/260658/lovedi-gioco-cane-palla-con-punte-tpr-verde.jpg?v=637617645268130000' ,12.50 , $categoryDog , $typeToy ),

    new Products('Tira graffi' , 'https://arcaplanet.vtexassets.com/arquivos/ids/281133/tiragraffi-wright.jpg?v=638125943164600000' ,25.50 , $categoryCat , $typeToy),

    new Products('Crocchette' , 'https://rep.grupposme.net/RepAP?code=D1446861&skey=f3b6c41bd09b8d169679070be320a5ac&resize=500' , 7.00 , $categoryDog ,$typeFood )

];


?>