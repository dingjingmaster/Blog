<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

class IndexController extends Controller {
    public $layout = 'index';
    public function actionIndex() {
        return $this->render('@app/views/site/index');
    }

}