<?php
require_once ("punkt3d.php");
class punkt2d extends punkt {

  protected $y;
//protected - pobranie jest niemożliwe
//private - dostępne tylko wewnątrz danej klasy
  public function __construct($x=0, $y=0) {
   parent::__construct($x);
    $this->y = $y;
  }
  public function getY() {
    return $this->y;
  }
  public function setY($y){
    $this->y=$y;
  }
}
