<?php

// importo il file Category

require_once __DIR__ . '/../models/Category.php';

$categories = [
'dog' => new Category ('Cani', 'fas fa-dog'),
'cat' => new Category ('Gatti', 'fas fa-cat'),
'bird' => new Category ('Uccelli', 'fas fa-feather-pointed'),
'fish' => new Category ('Pesci', 'fas fa-fish-fins')
];