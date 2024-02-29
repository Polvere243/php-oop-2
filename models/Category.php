<?php
// classe
class Category {
// variabili d'istanza
public $label;
public $icon;

// costruttore 
public function __construct ($label, $icon) {
    $this ->label = $label;
    $this ->icon =$icon;
}
}