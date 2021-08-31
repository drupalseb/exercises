<?php

require_once ("guestAbstract.php");

class moderator extends guestAbstract {

  function __construct(){
    $this->permission = permissionInterface::READ_POST | permissionInterface::WRITE_POST | permissionInterface::DELETE_POST;
  }
}
