 <?php
 require_once __DIR__ . '/../Model/Products.php';

// qua inseriamo tutte le nuove istanze che vogliamo inserire 
 
$db = [
    new Products('Palla giocattolo' , 'https://arcaplanet.vtexassets.com/arquivos/ids/260658/lovedi-gioco-cane-palla-con-punte-tpr-verde.jpg?v=637617645268130000' ,12.50 ),

    new Products('Tira graffi' , 'https://arcaplanet.vtexassets.com/arquivos/ids/281133/tiragraffi-wright.jpg?v=638125943164600000' ,25.50 ),

    new Products('Crocchette' , 'https://rep.grupposme.net/RepAP?code=D1446861&skey=f3b6c41bd09b8d169679070be320a5ac&resize=500' , 7.00)

];

var_dump($db);


?>