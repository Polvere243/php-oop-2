
<?php
// importo il file coi prodotti
require __DIR__. '/data/products.php';

// filtro gli array

$foods = array_filter($products, fn ($p) =>$p::$type === 'Food');
$toys = array_filter($products, fn ($p) =>$p::$type === 'Toy');
$accessories = array_filter($products, fn ($p) =>$p::$type === 'Accessory');


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
    <main>
        <div class="container">
            <section id="food-products">
                <div class="category">
                    <h2><?= Food::$type ?> <i class="<?= Food::$icon ?>"></i></h2>
                </div>
                <div class="row">
                    <?php foreach ($foods as $food) : ?>
                        <div class="category">
                            <h2><?= $food->getCategory()->getLabel() ?> 
                            <i class="<?= $food->getCategory()->getIcon() ?>"></i></h2>
                        </div>
                        <div class="card">
                            <figure>
                                <img src="<?= $food->getImage()?>" alt="<?= $food->getName() ?>">
                            </figure>
                            <figcaption>
                                <h4>Nome Prodotto: <?= $food->getName() ?></h4>
                                <p> Ingredienti: <?=$food->ingredientsString() ?></p>
                                <p>Prezzo: <?=$food->getPrice() ?></p>
                                <p>Data di Scadenza: <?=$food->getExpiration() ?></p>
                            </figcaption>
                        </div>
                    <?php endforeach ?>
                </div>
            </section>
            <section id="toy-products">
                <div class="category">
                    <h2><?= Toy::$type ?> <i class="<?= Toy::$icon ?>"></i></h2>
                </div>
                <div class="row">
                    <?php foreach ($toys as $toy) : ?>
                        <div class="category">
                            <h2><?= $toy->getCategory()->getLabel() ?>
                            <i class="<?= $toy->getCategory()->getIcon() ?>"></i></h2>
                        </div>
                        <div class="card">
                            <figure>
                                <img src="<?= $toy->getImage()?>" alt="">
                            </figure>
                            <figcaption>
                                <h4>Nome Prodotto: <?= $toy->getName() ?></h4>
                                <p>Materiali: <?=$toy->materialsString() ?></p>
                                <p>Prezzo: <?=$toy->getPrice() ?></p>
                                <p>Colore: <?=$toy->getColour() ?></p>
                            </figcaption>
                        </div>
                    <?php endforeach ?>
                        
                </div>
            </section>
            <section id="accessory-products">
                <div class="category">
                    <h2><?= Accessory::$type ?> <i class="<?= Accessory::$icon ?>"></i></h2>
                </div>
                <div class="row">
                    <?php foreach ($accessories as $accessory) : ?>
                        <div class="category">
                            <h2><?= $accessory->getCategory()->getLabel() ?>
                            <i class="<?= $accessory->getCategory()->getIcon() ?>"></i></h2>
                        </div>
                        <div class="card">
                            <figure>
                                <img src="<?= $accessory->getImage()?>" alt="<?= $accessory->getName() ?>">
                            </figure>
                            <figcaption>
                                <h4>Nome Prodotto: <?= $accessory->getName() ?></h4>
                                <p>Materiali: <?=$accessory->materialsString() ?></p>
                                <p>Prezzo: <?=$accessory->getPrice() ?></p>
                                <p>Colore: <?=$accessory->getColour() ?></p>
                                
                            </figcaption>
                        </div>
                    <?php endforeach ?>
                        
                </div>
            </section>
            
        </div>
    </main>                    
</body>

</html>