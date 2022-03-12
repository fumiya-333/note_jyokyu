<?php
class CommonUtil {
  public static function getAllConstants() {
    $ret = "function Constants(){}; ";
    foreach (Constants::getConstants() as $key => $value) {
      $ret .= "Constants.{$key} = '{$value}'; ";
    }
    return $ret;
  }
}
