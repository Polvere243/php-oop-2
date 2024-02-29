<?php
// classe
class product {
// variabili d'istanza
public $name;
public $price;


// costruttore 
public function __construct ($name, $price) {
    $this ->name = $name;
    $this ->price = $price;
}
}