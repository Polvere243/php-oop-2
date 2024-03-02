<?php
// classe
class Category  {
// variabili d'istanza
private $label;
private $icon;

// costruttore 
public function __construct ($label, $icon) 
{
    $this ->setLabel($label) ;
    $this ->setIcon ($icon);
}

// getter per l'etichetta
public function getLabel($label) 
{
    return $this ->label; 
}
// setter per l'etichetta
public function setLabel ($label)
{
    return $this ->label = $label;
}

// getter per l'icona
public function getIcon($icon) 
{
    return $this ->icon; 
}

// setter per l'icona
public function setIcon ($icon)
{
    return $this ->icon = $icon;
}


}