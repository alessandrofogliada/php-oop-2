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
     <link rel="stylesheet" href="../php-oop-2//style.css">
    <!-- import Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- import fontawesome -->
    <script src="https://kit.fontawesome.com/401ea8d0bd.js" crossorigin="anonymous"></script>
    <title>E-commerce prodotti per animali</title>
</head>
<body>

<h1 class="d-flex justify-content-center"> E-commerce Cani e Gatti</h1>

<div class="container d-flex flex-wrap justify-content-center">

    <?php foreach($products as $product):?>

        <div class="card">

            <img class="image" src="<?php echo $product->img?>" alt="">

            <h5> Nome Prodotto : <br> <?php echo $product->name?></h5>

            <h5>Prezzo : <?php echo $product->price ?></h5>

            <?php if($product instanceof Food):?>
            <h5> Tipo di prodotto:</h5> <?php echo $product->$dietType; ?>
            
            <?php endif;?>

            <h5>Prodotto per : <?php foreach($product->category as $categoria): ?></h5>
            <ul>
                <li> <?php echo $categoria ?></li>
            </ul>
            <?php endforeach;?>


        </div>
        
    <?php endforeach; ?>


</div>
  
</body>
</html>

<style>
    h1{
        color: red;
        margin-bottom: 2rem;
    }

    img{
        width: 200px;
    }

    .card{
        margin-right: 3rem;
    }
</style>