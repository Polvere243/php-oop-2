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
public function __construct ($name, $image, $price, Category $category) 
{
    $this ->setId();
    $this ->setName($name);
    $this ->setImage($image);
    $this ->setPrice($price);
    $this ->setCategory($category);
}

public function getId ()
{
    return $this ->id;
}

public function getImage ()
{
    return $this ->image;
}

public function getName ()
{
    return $this ->name;
}

public function getPrice ()
{
    return $this ->price;
}

public function getCategory ()
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

public function setName ($name)
{
    $this ->name = $name;
}

public function setPrice ($price)
{
    $this ->price = $price;
}

public function setCategory (Category $category)
{
    if($category instanceof Category) {
        $this->category = $category;
        return true;
    }
    else return false;

}

}