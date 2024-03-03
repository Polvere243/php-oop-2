<?php
require_once __DIR__ . '/Product.php';

// dichiaro la classe figlia Accessorio

class Accessory extends Product {
    // variabili d'istanza
    private $materials;
    private $colour;
    private $size;
    public static $type = 'Accessory';
    public static $icon = 'fas fa-house';
    // costruttore
    public function __construct($label, $image, $price, Category $category, array $materials, $colour = null, $size = null) 
    {
        parent::__construct($image, $label, $price, $category);
        $this ->setMaterials($materials);
        $this ->setColour($colour);
        
    }

    // getter
    public function getMaterials ($materials)
    {
        return $this ->materials;
    }

    // metodo the trasforma l'array degli ingredienti in una stringa
    public function materialsString():string 
    {
        return implode(', ', $this ->materials) . '.';
    }
    
    public function getColour($colour)
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
        return $this ->colour = $colour;
    }

    public function setSize($size)
    {
        return $this ->size = $size;
    }
} 