<?php
/**
 * 内容接口类
 * @return string
 * @Obelisk
 */
namespace app\modules\content\controllers;


use app\modules\content\models\Content;
use yii;
use app\modules\content\models\Category;
use app\modules\content\models\CategoryContent;
use app\modules\content\models\CategoryExtend;
use app\libs\ApiControl;

class ApiController extends ApiControl {
    public $enableCsrfValidation = false;
    /**
     * 获取所有在用分类
     * @Obelisk
     */
    public function actionCategory()
    {
        $model = new Category();
        $pid = Yii::$app->request->get('pid','1');
        $id = Yii::$app->request->get('id','');
        $status = Yii::$app->request->get('status','');
        $show = Yii::$app->request->get('show','');
        $data = $model->getAllCate($pid,$status,$id,$show);
        echo json_encode($data);

    }

    /**
     * 获取分类树包括一级分类
     * @Obelisk
     */
    public function actionTree(){
        $model = new Category();
        $pid = Yii::$app->request->get('pid','');
        $type = Yii::$app->request->get('type',0);
        $id = Yii::$app->request->get('id','');
        $show = Yii::$app->request->get('show',"");
        $major = Yii::$app->request->get('major',"");
        $data = $model->getTree($pid,$id,$show,$major,$type);
        echo json_encode($data);
    }

    /**
     * 获取分类树包括一级分类
     * @Obelisk
     */
    public function actionOneTree(){
        $model = new Category();
        $id = Yii::$app->request->get('id','');
        $data = Yii::$app->db->createCommand('select id,name as text from {{%category}} where id='.$id)->queryAll();
        $child = $model->getTree($id,$id);
        echo json_encode($data);
    }

    /**
     * 获取所有扩展属性
     * @Obelisk
     */
    public function actionExtend(){
        $model = new CategoryExtend();
        $data = $model->getAllExtend(1);
        echo json_encode($data);
    }

    /**
     * 获取属性树包括一级分类
     * @Obelisk
     */
    public function actionExtendTree(){
        $model = new CategoryExtend();
        $data = $model->getTree(0);
        echo json_encode($data);
    }

    /**
     * 检查是否能够删除分类
     * @Obelisk
     */
    public function actionCheckDelete(){
        $id = Yii::$app->request->post('id');
        $rowCate = Category::find()->where("pid=$id")->all();
        $rowCont = CategoryContent::find()->where("catId=$id")->all();
        $rowExt = CategoryExtend::find()->where("catId=$id")->all();
        if(count($rowCont)>0 || count($rowCate)>0 || count($rowExt)>0){
            $code = 0;
        }else{
            $code = 1;
        }
        die(json_encode(['code' => $code]));
    }

    /**
     * 删除内容
     * @Obelisk
     */
    public function actionContentDelete(){
        $id = Yii::$app->request->post('id');
        $rowCon = Content::find()->where("pid=$id")->all();
        if(count($rowCon)>0){
            $code = 0;
        }else{
            $code = 1;
        }
        die(json_encode(['code' => $code]));
    }

    /**
     * 内容副分类调用
     * @Obelisk
     */
    public function actionContentSecondClass()
    {
        $model = new Category();
        $catId = Yii::$app->request->get('catId');
        $id = Yii::$app->request->get('id','');
        $data = $model->getContentSecond($catId,$id);
        echo json_encode($data);

    }



}