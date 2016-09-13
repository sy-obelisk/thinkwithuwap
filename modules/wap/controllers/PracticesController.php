<?php
/**
 * 留学实习
 * Created by PhpStorm.
 * User: Fawn
 * Date: 15-11-23
 * Time: 上午10:51
 */
namespace app\modules\wap\controllers;
use yii;
use app\modules\cn\models\CategoryExtend;
use app\modules\cn\models\Category;
use app\modules\cn\models\Content;
use app\modules\cn\models\Practices;
use app\libs\ThinkUController;

class PracticesController extends ThinkUController {
    public $enableCsrfValidation = false;
    public $layout = 'cn';
    /**
     * 游学实习页面
     * by fawn
     * 2015-11-27
     * @return string
     */
    public function actionIndex(){
        return $this->renderPartial('index');

    }
    /**游学实习详情
     * @return string
     * by fawn
     */
    public function actionDetails(){
        $id = Yii::$app->request->get('id');
        $data = Content::getContent(['fields' => "synopsis,time",'where' => "c.id = $id"]);
        $hot = Content::getContent(['fields' => "time",'category' => "239",'pageSize' => 4,'page' => 1]);
        $extendData = CategoryExtend::find()->where("catId=244 AND belong='content'")->orderBy('id ASC')->all();
        return $this->render('details',['details' => $data,'hot'=>$hot,'extendData' => $extendData]);
    }

    public function actionHot(){
        $pageNumber = Yii::$app->request->post('pageNumber');//分类ID
        $result = Content::getContent(['pageStr' =>'1','fields' => "time",'category' => "239",'pageSize' => 4,'page' => $pageNumber]);
        unset($result['count']);
        unset($result['total']);
        unset($result['pageStr']);
        if($result){
            $arr['code'] = 1;
            $arr['message'] = "true";
            $arr['data'] = $result;
        }else{
            $arr['code'] = 0;
            $arr['message'] = "false";
        }
        die(json_encode($arr));
    }

}