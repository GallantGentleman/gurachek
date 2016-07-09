<?php

class Loader {

    public static function autoload($className) {

        $arr = explode("\\", $className);

        $namespace = array_shift($arr);

        $file = array_pop($arr);

        if($namespace == 'app') {

            $fileName = 'app/controllers/' . $file;
            
        } elseif($namespace == 'riki') {

            $fileName = 'vendor/riki/' . array_shift($arr) . '/' . $file;

        }

        $fileName .= '.php';

        if(file_exists($fileName)) {
            include $fileName;
        }

    }

}