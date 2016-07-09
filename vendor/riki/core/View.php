<?php

namespace riki\core;

use app\controllers;

class View {

    public function generateView($template, $content, $data=null) {

        if($data != null) {
            if(is_array($data)) {
                extract($data);
            }
        }

        include 'app/views/templates/default/' . $template . '.php';
    }

}
