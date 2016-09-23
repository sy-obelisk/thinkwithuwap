<?php
/**
 * 培训
 * Created by PhpStorm.
 * User: Fawn
 * Date: 15-11-23
 * Time: 上午10:51
 */
namespace app\modules\wap\controllers;
use yii;
use app\modules\cn\models\Content;
use app\libs\ThinkUController;

class CultivateController extends ThinkUController {
    /**
     * 培训界面
     * by fawn
     * 2015-11-27
     * @return string
     */
    public function actionIndex(){
        return $this->renderPartial('index');
    }

    /**
     * 培训详情
     * by obelisk
     * 2015-11-27
     * @return string
     */
    public function actionDetails(){
        return $this->render('details');
    }

    /**
     * mba/phd
     * @return string
     * @Obelisk
     */
    public function actionIndividual(){
        $id = Yii::$app->request->get('id',110);
        $this->layout_data = $id;
        $hot = Content::getContent(['fields' => "time",'category' => "239",'pageSize' => 4,'page' => 1]);
        return $this->render('individual',['id' => $id,'hot'=>$hot]);
    }

    /**
     *  mba/phd
     * @return string
     * @Obelisk
     */
    public function actionMbaPhd(){
        $id = Yii::$app->request->get('id',111);
        $this->layout_data = $id;
        $hot = Content::getContent(['fields' => "time",'category' => "239",'pageSize' => 4,'page' => 1]);
        return $this->render('individual',['id' => $id,'hot'=>$hot]);
    }

    /**
     * 托福单页
     * by obelisk
     * 2015-11-27
     * @return string
     */
    public function actionToefl(){
        return $this->render('toefl');
    }

    /**
     * 备考资料
     * by obelisk
     * 2015-11-27
     * @return string
     */
    public function actionTestDaf(){
        return $this->render('testDaf');
    }

}