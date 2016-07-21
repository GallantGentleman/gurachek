<?php

namespace riki\core;

use app\controllers;

class View {

    public function generateView($template, $content, $title = '', $data = null) {

        $score = '';

        if($data != null) {
            if(is_array($data)) {
                extract($data);
            }
        }

        if(!empty($title)) {
          $score = ' -';
        }

        $title = $title . $score . ' People Projects Manager';

        include 'app/views/templates/default/' . $template . '.php';

    }
}
