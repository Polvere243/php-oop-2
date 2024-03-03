<?php

// importo i file che mi occorrono
require_once __DIR__ . '/../models/Category.php';
require_once __DIR__ . '/../models/products/Food.php';
require_once __DIR__ . '/../models/products/Toy.php';
require_once __DIR__ . '/../models/products/Accessory.php';
require_once __DIR__ . '/categories.php';

// dichiaro un array coi prodotti
$products = [
    new Food (
        'Royal Canin Mini Adult',
        'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000',
        15.20,
        $categories['dog'],
        ['proteine di pollame disidratate, farina di frumento, farina di mais, grassi animali, mais, glutine di frumento, orzo, glutine di mais, frumento, proteine animali idrolizzate, sostanze minerali, polpa di barbabietola, olio di soia, prodotti del lievito, fruttoligosaccaridi, olio di pesce, olio di alghe Schizochytrium sp.'],
        '2025-3-24'
    ),
    new Food (
        'Almo Nature Holistic Maintenance Medium Large Tonno e Riso',
        'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg',
        19.99,
        $categories['dog'],
        ['Carni e derivati, cereali (riso 4%), pesci e sottoprodotti dei pesci (tonno 12%), oli e grassi (olio di salmone* 0,5%), sottoprodotti di origine vegetale (polpa di barbabietola 1%, inulina di cicoria - fonte di FOS- 0,1%), lieviti, glucosamina 0,01%, solfato di condroitina 0,01%.'],
        '2025-3-24'
    ),
    new Food (
        'Almo Nature Cat Daily Lattina',
        'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg',
        10.99,
        $categories['cat'],
        ['Coniglio: Carni e derivati (coniglio 4%), uova e prodotti a base di uova, sostanze minerali, zuccheri.'],
        '2025-3-24'
    ),
    new Food (
        'Mangime per Pesci Guppy in Fiocchi',
        'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg',
        9.39,
        $categories['fish'], 
        [' Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Estratti di proteine vegetali, Molluschi e crostacei, Oli e grassi, Alghe, Sostanze minerali. Componenti Analitici: Proteina grezza 47,5%, Grassi grezzi 8,0%, Cellulosa grezza 2,0%, Contenuto d\'umidità 6,0%. Additivi: Vitamine: Vitamina D3 590 UI/kg.'],
        '2025-3-24'
    ),
    new Accessory (
        'Voliera Wilma in Legno',
        'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg',
        20.00,
        $categories['bird'], 
        ['legno'],
    ),
    new Accessory (
        'Cartucce Filtranti per Filtro EasyCrystal',
        'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg',
        15.00,
        $categories['fish'], 
        ['lana grezza filtrante a doppio strato'],
    ),
    new Toy (
        'Kong Classic',
        'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg',
        9.99,
        $categories['dog'],
        ['gomma rossa'],
        'rosso'
    ),
    new Toy (
        'Topini di peluche Trixie',
        'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg',
        9.99,
        $categories['cat'],
        ['morbido peluche, corda, 100% poliestere'],
        'bianco-grigio'
    )
];

