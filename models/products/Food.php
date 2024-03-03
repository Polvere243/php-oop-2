<?php

require_once __DIR__ . '/Product.php';

// dichiaro la classe figlia Cibo

class Food extends Product {
    // variabili d'istanza
    private $ingredients;
    private $expiration;
    public static $type = 'Food';
    public static $icon = 'fas fa-bowl-food';
    // costruttore
    public function __construct($label, $image, $price, Category $category, array $ingredients, $expiration) 
    {
        parent::__construct($label, $image, $price, $category);
        $this ->setIngredients($ingredients);
        $this ->setExpiration($expiration);
    }

    // getter
    public function getIngredients ($ingredients)
    {
        return $this ->ingredients;
    }

    // metodo the trasforma l'array degli ingredienti in una stringa
    public function ingredientsString():string 
    {
        return implode(', ', $this ->ingredients) . '.';
    }
    
    public function getExpiration ()
    {
        return date('d-m-Y', $this ->expiration);
    }

    // setter

    public function setIngredients ($ingredients) 
    {
        return $this ->ingredients = $ingredients;
    }
    
    public function setExpiration ($expiration) 
    {
        $this ->expiration = strtotime($expiration);
    }
} 