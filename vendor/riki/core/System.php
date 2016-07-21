<?php

namespace riki\core;

class System {

    public static function log($msg) {

      $msg = $msg . date("d-M-y : h-m-s") . "\r\n";

      $file = "log/log.txt";
      $mod = "a";

      $fp = fopen($file, $mod);

      $log = fwrite($fp, $msg);

      fclose($fp);

      exit();
    }

}
