<?php
/**
 * 留学
 * Created by PhpStorm.
 * User: Fawn
 * Date: 15-11-23
 * Time: 上午10:51
 */
namespace app\modules\wap\controllers;
use yii;
use app\modules\cn\models\CategoryExtend;
use app\modules\cn\models\Content;
use app\modules\cn\models\Category;
use app\libs\ThinkUController;

class SatController extends ThinkUController {
    public $layout = 'cn';
    public $enableCsrfValidation = false;
//    public $layout_data;
    public function actionIndex(){
        return $this->render('index');
    }
    public function actionSprint(){
        return $this->render('sprint');
    }
    public function actionQuan(){
        return $this->render('quan');
    }
    public function actionVip(){
        return $this->render('vip');
    }
}