<?php
interface permissionInterface {
  const READ_POST = 1;
  const WRITE_POST = 2;
  const DELETE_POST = 4;
  const DELETE_USER = 8;

  public function getPermission();
  function isPermitted($permission);

  static function checkPermission($userPermission, $permission); // funkcję statyczną można wywołać bez instancji (obiektu)
}
