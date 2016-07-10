<?php

class Loader {

    public static function autoload($className) {

        $fileName = "";

        $arr = explode("\\", $className);

        $namespace = array_shift($arr);

        $file = array_pop($arr);

        if($namespace == 'app') {

            $fileName = 'app/' . $arr[0] . '/' . $file;

        } elseif($namespace == 'riki') {

            $fileName = 'vendor/riki/' . $arr[0] . '/' . $file;

        }

        $fileName .= '.php';

        if(file_exists($fileName)) {
            include $fileName;
        }

    }

}
