<?php

class punkt3d extends punkt2d
{

  protected $z;
//protected - pobranie jest niemożliwe przez inne funkcje. Można użyć w funkcji dziedziczącej
//private - dostępne tylko wewnątrz danej klasy
  public function __construct($x = 0, $y = 0, $z = 0)
  {
    parent::__construct($x, $y);
    $this->z = $z;
  }

  public function getZ()
  {
    return $this->z;
  }

  public function setZ($z)
  {
    $this->y = $z;
  }
}
