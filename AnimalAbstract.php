<?php

abstract class AnimalAbstract{
  protected $isHungry;
  function __construct($isHungry = true) {
    $this->isHungry = $isHungry;
  }
abstract function eat($food); // funkcja abstrakcyjna jest pusta - jej działanie wykonywane jest w funkcji dziedziczonej, tutaj -> dog.php
}
