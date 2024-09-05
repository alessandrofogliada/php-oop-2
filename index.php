<?php 
require_once __DIR__ . '/data/db.php';
require_once __DIR__ . '/Model/Products.php';
require_once __DIR__ . '/Model/Category.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- integrazione css  -->
    <link rel="stylesheet" href="/style.css">
    <!-- import Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>E-commerce prodotti per animali</title>
</head>
<body>

<h1> E-commerce Cani e Gatti</h1>

<div class="container d-flex flex-wrap">

    <?php foreach($products as $product):?>

        <div>

            <h3> Nome Prodotto : <?php echo $product->name?></h3>

            <img class="image" src="<?php echo $product->img?>" alt="">

            <h3>Prezzo : <?php echo $product->price ?></h3>

            <h3>Prodotto per : <?php foreach($product->category as $categoria) ?></h3>
            <ul>
                <li> <?php echo $categoria ?></li>
            </ul>
        </div>
        
    <?php endforeach; ?>


</div>
  
</body>
</html>