<?php
// classe
class product {
// variabili d'istanza
public $name;
public $ingredients = [];
public $price;
public $weight;


// costruttore 
public function __construct ($name, $ingredients, $price, $weight) {
    $this ->name = $name;
    $this ->ingredients = $ingredients;
    $this ->price = $price;
    $this ->weight = $weight;
}
}