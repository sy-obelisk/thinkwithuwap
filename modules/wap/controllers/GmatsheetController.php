<?php
/**
 * gmat单页
 * Created by PhpStorm.
 * User: Fawn
 * Date: 15-11-23
 * Time: 上午10:51
 */
namespace app\modules\wap\controllers;
use yii;
use app\modules\cn\models\CategoryExtend;
use app\libs\ThinkUController;

class GmatsheetController extends ThinkUController {
    public $enableCsrfValidation = false;
    public $layout = 'cn';
    /**
     * gmat页面
     * by fawn
     * 2015-11-27
     * @return string
     */
    public function actionIndex(){
        return $this->renderPartial('index');
    }
}