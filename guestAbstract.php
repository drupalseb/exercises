<?php
require_once ("permissionInterface.php");

abstract class guestAbstract implements permissionInterface {
  protected $permission = 0;
  abstract function __construct();

  static function checkPermission($userPermission, $permission) {
    if($userPermission & $permission)
      return true;

    return false;
  }
function getPermission()
{
  return $this->permission;
}
function isPermitted($permission)
{
  if($this->permission & $permission)
    return true;

  return false;
}
}
