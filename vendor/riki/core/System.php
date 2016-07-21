<?php

namespace \riki\core;

class System {

    public static function log($msg) {
      $msg = $msg . "\r\n"

      $file = SITE_NAME . "log/log.txt";
      $mod = "a";

      $fp = fopen($file, $mod);

      $log = fwrite($fp, $msg);

      fclose($fp);
    }

}
