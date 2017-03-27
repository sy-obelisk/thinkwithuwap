<?php
/**
 * toefl单页
 * Created by PhpStorm.
 * User: Fawn
 * Date: 15-11-23
 * Time: 上午10:51
 */
namespace app\modules\wap\controllers;
use app\modules\wap\models\Content;
use yii;
use app\modules\cn\models\CategoryExtend;
use app\libs\ThinkUController;

class ToeflsheetController extends ThinkUController {
    public $enableCsrfValidation = false;
    public $layout = 'cn';
    /**
     * toefl页面
     * by fawn
     * 2015-11-27
     * @return string
     */
    public function actionIndex(){
        return $this->render('index');
    }

    public function actionDetails(){
        $id = Yii::$app->request->get('id');
        $category = "249,116";
        $data = Content::getContent(['fields' => "keywords,abstract,description",'where' => "c.id = $id"]);
        $correlation = Content::getContent(['pageSize' => '5','category' => $category,'where' => "c.id != $id"]);
        $prev = Content::getContent(['category' => $category,'where' => "c.id < $id","order" => "c.id DESC","pageSize" => 1]);
        $next = Content::getContent(['category' => $category,'where' => "c.id > $id","order" => "c.id ASC","pageSize" => 1]);
        $count = $data[0]['viewCount'];
        Content::updateAll(['viewCount' => ($count+1)],"id=$id");
        return $this->render('details',['correlation' => $correlation,'data' => $data,'prev' => $prev,'next' => $next]);
    }
}