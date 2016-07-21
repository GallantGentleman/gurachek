<?php

namespace riki\lib;

class Common {

  public static function e($msg) {
      return "<script>alert('".$msg."');</script>";
  }

  public static function linkTo($href) {
    return "<meta http-equiv='refresh' content='0;URL=" . $href . "'>";
  }

}
