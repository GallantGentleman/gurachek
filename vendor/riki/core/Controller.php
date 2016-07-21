<?php

namespace riki\core;

abstract class Controller {

    public $view;
    public $model;

    abstract function actionIndex();
}
