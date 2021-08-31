<?php
require_once ("guestAbstract.php");

class user extends guestAbstract {

  function __construct(){
    $this->permission = permissionInterface::READ_POST | permissionInterface::WRITE_POST;
  }
}
