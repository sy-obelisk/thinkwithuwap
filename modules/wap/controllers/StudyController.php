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
use app\modules\wap\models\Content;
use app\modules\cn\models\Category;
use app\libs\ThinkUController;

class StudyController extends ThinkUController {
    public $layout = 'cn';
    public $enableCsrfValidation = false;
    public $layout_data;
    /**
     * 留学界面
     * by fawn
     * 2015-11-27
     * @return string
     */
    public function actionIndex(){
        return $this->render('index');
    }


    /**
     * 留学提升
     * @Obelisk
     */
    public function actionA(){
        $id = Yii::$app->request->get('id');
        $data = Content::getContent(['where' => "c.id = $id",'fields' => "abstract,description","pageSize" => 1])[0];
        return $this->render('A',['data'=>$data]);
    }

    /**
     * 留学申请
     * @Obelisk
     */
    public function actionB(){
        return $this->render('B');
    }

    /**
     * 留学规划
     * @Obelisk
     */
    public function actionC(){
        return $this->render('C');
    }

    /**
     * 留学评估
     * @Obelisk
     */
    public function actionD(){
        return $this->render('D');
    }


    /**
     * 留学产品
     * @Obelisk
     */
    public function actionUsa(){
        return $this->render('usa');
    }

    /**
     * 博士留学
     * @return string
     * @Obelisk
     */

    public function actionAdvantage(){
        return $this->render('advantage');
    }

    /**
     * 硕士留学
     * @return string
     * @Obelisk
     */
    public function actionMasterBusiness(){
        return $this->render('masterBusiness');
    }

    /**
     * 本科留学
     * @return string
     * @Obelisk
     */
    public function actionUndergraduate(){
        return $this->render('undergraduate');
    }

    /**
     * 留学申请,博士
     * @return string
     * @Obelisk
     */
    public function actionApplyDoctor(){
        $id = Yii::$app->request->get('id',114);
        if($id == 114){
            $ids = 137;
        }
        $this->layout_data = $id;
        $hot = Content::getContent(['fields' => "time",'category' => "239",'pageSize' => 4,'page' => 1]);
        return $this->render('applyProject',['id' => $id,'ids' => $ids,'hot'=>$hot]);

    }

    /**
     * 留学申请,硕士
     * @return string
     * @Obelisk
     */
    public function actionApplyMaster()
    {
        $id = Yii::$app->request->get('id', 113);
        if ($id == 113) {
            $ids = 136;
        }
        $this->layout_data = $id;
        $hot = Content::getContent(['fields' => "time",'category' => "239",'pageSize' => 4,'page' => 1]);
        return $this->render('applyProject',['id' => $id,'ids' => $ids,'hot'=>$hot]);

    }
        /**
         * 留学申请,本科
         * @return string
         * @Obelisk
         */
        public function actionApplyCourse(){
            $id = Yii::$app->request->get('id',112);
            if($id == 112){
                $ids = 135;
            }
            $this->layout_data = $id;
            $hot = Content::getContent(['fields' => "time",'category' => "239",'pageSize' => 4,'page' => 1]);
            return $this->render('applyProject',['id' => $id,'ids' => $ids,'hot'=>$hot]);
        }

    /**
     * 留学服务
     * @return string
     * @Obelisk
     */
    public function actionService(){
        return $this->render('service');
    }

    /**
     * 去留学了
     * @return string
     * @Obelisk
     */
    public function actionGo(){
        return $this->render('go');
    }
}