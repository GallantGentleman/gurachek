<?php

namespace riki\core;

class System {

    public $arr = array();

    public function setCook($k, $v, $t = 10000) {
        $this->arr[$k] = $v;
        setcookie($k, $v, time()+$t);
    }

    public function getCook($k) {
      if(isset($this->arr[$k]))
        return $this->arr[$k];
      else
        return "Fail !";
    }

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
