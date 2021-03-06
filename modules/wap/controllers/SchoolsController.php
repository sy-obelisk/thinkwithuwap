<?php
/**
 * 首页控制器
 * by fawn
 */
namespace app\modules\wap\controllers;
use yii;
use app\libs\ThinkUController;
use app\modules\wap\models\Content;
use app\libs\Schools;

class SchoolsController extends ThinkUController {
    public $enableCsrfValidation = false;
    public $layout = 'cn';

    /**首页
     * @return string
     * by fawn
     */
    public function actionIndex(){
        $keywords = Yii::$app->request->get('keywords');
        if($keywords){
            $data = file_get_contents(Yii::$app->params['schoolConnect'].'/cn/index/index?data-type=json&type=搜选校&keywords='.$keywords);
        }else{
            $data = file_get_contents(Yii::$app->params['schoolConnect'].'/cn/index/index?data-type=json');
        }
        $data = json_decode($data,'true');
        return $this->render('index',['data' => $data['data']['data']]);
    }

    /**首页-院校库数据
     * @return string
     * by fawn
     */
    public function actionSelect(){
        $school = new Schools();
        $url = 'school';
        $pageNumber = Yii::$app->request->post('pageNumber');//分类ID
        $pageSize = Yii::$app->request->post('pageSize');//分类ID
        $data['keyword'] = Yii::$app->request->post('keyword');//学校类型
        $data['schoolid'] = Yii::$app->request->post('schoolid');//学校ID
        $data['type'] = Yii::$app->request->post('type');//关键字类型
        $data['hot'] = Yii::$app->request->post('hot');//关键字类型
        $data['catid'] = trim(Yii::$app->request->post('catid'),',');//分类ID
        $data['pageNumber'] = !empty($pageNumber)?$pageNumber:1;
        $data['pageSize'] = !empty($pageSize)?$pageSize:10;
        $result = json_decode($school->CurlRequest($url,['keyword'=>$data['keyword'], 'schoolid'=>$data['schoolid'], 'type'=>$data['type'], 'catid'=>$data['catid'], 'pageNumber'=>$data['pageNumber'], 'pageSize'=>$data['pageSize'],'hot'=>$data['hot']]),TRUE);
        die(json_encode($result));
    }

    /**院校详情
     * by fawn
     */
    public function actionDetails(){
        $school = new Schools();
        $url = 'school';
        $data['schoolid'] = Yii::$app->request->get('schoolid');//分类ID
        $result =  json_decode($school->CurlRequest($url,['schoolid'=>$data['schoolid']]),TRUE);//学院类型
        return $this->render('detail',[
            'details' => $result['data'],
            'activity' => $this->activity,
            'activityDate' => $this->activityDate
        ]);
    }

    /**专业数据
     * by fawn
     */
    public function actionMajor(){
        $school = new Schools();
        $url = 'content';
        $data['contentid'] = Yii::$app->request->post('contentid');//分类ID
        $data['catid'] = Yii::$app->request->post('catid');//分类ID
        $data['hot'] = Yii::$app->request->post('hot');//热门
        $result = json_decode($school->CurlRequest($url,['contentid'=>$data['contentid'],'catid'=>$data['catid'],'hot'=>$data['hot']]),TRUE);
        die(json_encode($result));
    }
    /**专业详情
     * by fawn
     */
    public function actionMajormsg(){
        $school = new Schools();
        $url = 'content';
        $data['contentid'] = Yii::$app->request->get('contentid');//分类ID
        $data['catid'] = Yii::$app->request->get('catid');//分类ID
        $result = json_decode($school->CurlRequest($url,['contentid'=>$data['contentid'],'catid'=>$data['catid']]),TRUE);
        if(empty($result)){
            echo '<script>alert("暂无数据");history.go(-1);</script>';
            exit;
        }
        return $this->render('major',['major' => $result['data']]);
    }

    public function actionTeacher(){
        $pageNumber = Yii::$app->request->post('pageNumber');//分类ID
        $result = Content::getContent(['pageStr' =>'1','fields' => "job,abstract",'category' => "139",'pageSize' => 5,'page' => $pageNumber]);
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