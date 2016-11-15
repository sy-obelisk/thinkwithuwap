<?php
/**
 * 首页控制器
 * by Obelisk
 */
namespace app\modules\wap\controllers;
use yii;
use app\modules\wap\models\Content;
use app\modules\wap\models\Category;
use app\libs\ThinkUController;

class GuideController extends ThinkUController {
    public $enableCsrfValidation = false;
    public $layout = 'cn';
    public $layout_data;
    public $title;
    public $keywords;
    public function actionIndex(){
        return $this->render('index');
    }

}