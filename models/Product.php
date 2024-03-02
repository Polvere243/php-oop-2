<?php
// importo la categoria
require_once __DIR__ . '/Category.php';

// classe
class product {
// variabili d'istanza
protected $id;
protected $image
protected $name;
protected $price;
protected $category;


// costruttore 
public function __construct (, $image, $name, $price, Category $category) 
{
    $this ->setId();
    $this ->setImage($image);
    $this ->setName($name);
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
public function getName ($name)
{
    return $this ->name;
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
    $this ->name = uniqid();
}
public function setImage ($image)
{
    $this ->name = $image;
}
public function setName ($name)
{
    $this ->name = $name;
}
public function setPricategory ($price)
{
    $this ->name = $price;
}
public function setCategory ($category)
{
    $this ->name = $category;
}

}