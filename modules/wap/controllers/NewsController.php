<?php
/**
 *斯菲德
 * Created by PhpStorm.
 * User: obelisk
 * Date: 15-11-25
 * Time: 上午10:51
 */
namespace app\modules\wap\controllers;
use yii;
use app\modules\cn\models\Content;
use app\libs\ThinkUController;

class NewsController extends ThinkUController {
    public $enableCsrfValidation = false;
    /**
     * 斯菲德
     * by obelisk
     * @return string
     */
    public function actionIndex(){
        return $this->renderPartial('index');
    }


}