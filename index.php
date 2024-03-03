
<?php
// importo il file coi prodotti
require __DIR__. '/data/products.php';

// filtro gli array

$foods = array_filter($products, fn($p) =>$p::$type === 'food');
$toys = array_filter($products, fn($p) =>$p::$type === 'toy');
$accessories = array_filter($products, fn($p) =>$p::$type === 'accessory');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Daniele Ercoli">
    <meta name="description" content="esercizio">
    <meta name="keyword" content="php, css, markdown, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous'/>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <h1>Il mio negozio per animali</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="category"></div>
                <figure>
                    <img src="" alt="">
                </figure>
                <figcaption>

                </figcaption>
            </div>
        </div>
    </div>

</body>

</html>