<?php
/**
 *课程
 * Created by PhpStorm.
 * User: obelisk
 * Date: 15-11-25
 * Time: 上午10:51
 */
namespace app\modules\wap\controllers;
use yii;
use app\modules\cn\models\Content;
use app\libs\ThinkUController;

class MenuController extends ThinkUController {
    public $enableCsrfValidation = false;


    /**
     * 高分班
     * @return string
     * @Obelisk
     */

    public function actionIndex(){
        return $this->renderPartial('index');
    }

    /**
     * 基础课程
     * @return string
     * @Obelisk
     */
    public function actionBasicClass(){
        return $this->renderPartial('basicClass');
    }

    /**
     * 强化课程
     * @return string
     * @Obelisk
     */
    public function actionIntensiveCourse(){
        return $this->renderPartial('intensiveCourse');
    }

    /**
     * 开班查询
     * @return string
     * @Obelisk
     */
    public function actionClassQuery(){
        return $this->renderPartial('classQuery');
    }



}