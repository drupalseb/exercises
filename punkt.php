<?php
require_once ("punkt2d.php");
class punkt {
 protected $x;
 //protected - mamy dostęp do zmiennej z klasy dziedziczonej ale nie z instancji klasy
  //private - dostęp do zmiennej tylko z poziomu tej klasy
 public function __construct($x=0) {
   $this->x = $x;
 }
 public function getX() {
   return $this->x;
}
public function setX($x) {
   if($x> 50 || $x < 0 ) {
     echo "wartość spoza zakresu <br>";
   }
   else {
     $this->x = $x;
   }
}
}
