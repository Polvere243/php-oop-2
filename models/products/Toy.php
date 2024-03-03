<?php
require_once __DIR__ . '/Product.php';

// dichiaro la classe figlia Giocattolo

class Toy extends Product {
    // variabili d'istanza
    private $materials;
    private $colour;
    public static $type = 'Toy';
    public static $icon = 'fas fa-bone';
    // costruttore
    public function __construct($label, $image, $price, Category $category, array $materials, $colour) 
    {
        parent::__construct($label, $image, $price, $category);
        $this ->setMaterials($materials);
        $this ->setColour($colour);
        
    }

    // getter
    public function getMaterials ()
    {
        return $this ->materials;
    }

    // metodo the trasforma l'array degli ingredienti in una stringa
    public function materialsString():string 
    {
        return implode(', ', $this ->materials) . '.';
    }
    
    public function getColour()
    {
        return $this ->colour;
    }

    // setter

    public function setMaterials ($materials) 
    {
        return $this ->materials = $materials;
    }
    
    
    public function setColour ($colour) 
    {
        $this ->colour = $colour;
    }
} 