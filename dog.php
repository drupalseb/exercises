<?php
require_once("AnimalAbstract.php");

 class Dog extends AnimalAbstract {
   protected $eatableFood = array("meat","chicken","salami");
   function eat ($food) {
     $isEatable = false;
     foreach($this->eatableFood as $value){
       if($value==$food)
         $isEatable = true;
         break;
     }
     if($isEatable) {
     if ($this->isHungry) {
     echo "zjadam $food <br>";
     $this->isHungry = false;
   }
   else
     echo "nie jestem głodny";
 }
   else {
     echo "Ja nie jem tego: $food <br>";

 }}}
