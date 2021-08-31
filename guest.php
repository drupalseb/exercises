<?php
require_once("guestAbstract.php");

class guest extends guestAbstract {

  function __construct(){
    $this->permission = permissionInterface::READ_POST;
  }
}
