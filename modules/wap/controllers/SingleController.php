<?php
/**
 *app下载页面
 * Created by PhpStorm.
 * User: obelisk
 * Date: 15-11-25
 * Time: 上午10:51
 */
namespace app\modules\wap\controllers;
use yii;
use app\modules\cn\models\Content;
use app\libs\ThinkUController;

class SingleController extends ThinkUController {
    public $enableCsrfValidation = false;
    /**
     * 关于我们
     * by fawn
     * 2015-11-27
     * @return string
     */
    public function actionIndex(){
        return $this->renderPartial('index');
    }

    /**
     * 联系我们
     * @return string
     * @Obelisk
     */

    public function actionToefl(){
        return $this->render('toefl');
    }



}