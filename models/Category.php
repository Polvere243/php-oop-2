<?php
// classe
class Category  {
// variabili d'istanza
private $label;
private $icon;

// costruttore 
public function __construct ($label, $icon) 
{
    $this ->label = $label;
    $this ->icon =$icon;
}

public function getLabel($label) 
{
    return $this ->label; 
}

public function setLabel ($label)
{
    return $this ->label = $label;
}


public function getIcon($icon) 
{
    return $this ->icon; 
}


public function setIcon ($icon)
{
    return $this ->icon = $icon;
}


}