<?php
// importo la categoria
require_once __DIR__ . '/../Category.php';

// classe
class Product {
// variabili d'istanza
protected $id;
protected $name;
protected $image;
protected $price;
protected $category;


// costruttore 
public function __construct ($label, $image, $price, Category $category) 
{
    $this ->setId();
    $this ->setLabel($label);
    $this ->setImage($image);
    $this ->setPrice($price);
    $this ->setCategory($category);
}

public function getId ($id)
{
    return $this ->id;
}

public function getImage ($image)
{
    return $this ->image;
}

public function getLabel ($label)
{
    return $this ->label;
}

public function getPrice ($price)
{
    return $this ->price;
}

public function getCategory ($category)
{
    return $this ->category;
}

private function setId ()
{
    $this ->id = uniqid();
}

public function setImage ($image)
{
    $this ->image = $image;
}

public function setLabel ($label)
{
    $this ->name = $label;
}

public function setPrice ($price)
{
    $this ->price = $price;
}

public function setCategory (Category $category)
{
    if($category instanceof Category) $this ->name = $category;
    else return false;

}

}