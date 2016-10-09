<?php
/**
 * 首页控制器
 * by Obelisk
 */
namespace app\modules\wap\controllers;
use yii;
use app\modules\wap\models\Content;
use app\modules\wap\models\Category;
use app\libs\ThinkUController;

class IndexController extends ThinkUController {
    public $enableCsrfValidation = false;
    public $layout = 'cn';
    public $layout_data;
    public $title;
    public $keywords;
    public function actionIndex(){
        return $this->render('index');
    }

    /**
     * 图片三级详情详情
     * @Obelisk
     */
    public function actionPictureDetails(){
        $id = Yii::$app->request->get('id');
        $category = Yii::$app->request->get('category');
        $changeNeedCategory =  $category;
        $categoryArr = explode(",",$category);
        $nav =[];
        foreach($categoryArr as $k => $v){
            if($v == 'index'){
                unset($categoryArr[0]);
                $nav[$k]['name'] = '首页';
                $nav[$k]['url'] = '/cn/index';
            }else{
                $url = Category::getOneCategory($v);
                $nav[$k]['name'] = "{$url['name']}";
                $nav[$k]['url'] = "{$url['url']}";
            }
        }
        $category = implode(",",$categoryArr);
        $data = Content::getContent(['fields' => "keywords,description",'where' => "c.id = $id"]);
        if(count($data) == 0){
            $this->redirect('/surprise.html');
        }else{
            $prev = Content::getContent(['category' => $category,'where' => "c.id < $id","order" => "c.id DESC","pageSize" => 1]);
            $next = Content::getContent(['category' => $category,'where' => "c.id > $id","order" => "c.id ASC","pageSize" => 1]);
            $count = $data[0]['viewCount'];
            Content::updateAll(['viewCount' => ($count+1)],"id=$id");
            $this->title = $data[0]['name'];
            $this->keywords = $data[0]['keywords'];
            return $this->render('pictureDetails',['nav' => $nav,'data' => $data,'prev' => $prev,'next' => $next,'changeNeedCategory' => $changeNeedCategory]);
        }
    }

    /**
     * 文字三级详情详情
     * @Obelisk
     */
    public function actionWordDetails(){
    $id = Yii::$app->request->get('id');
    $category = Yii::$app->request->get('category');
    $changeNeedCategory =  $category;
    $categoryArr = explode(",",$category);
    $end = end($categoryArr);
    $nav =[];
    foreach($categoryArr as $k => $v){
        if($v == 'index'){
            unset($categoryArr[0]);
            $nav[$k]['name'] = '首页';
            $nav[$k]['url'] = '/cn/index';
        }else{
            $url = Category::getOneCategory($v);
            $nav[$k]['name'] = "{$url['name']}";
            $nav[$k]['url'] = "{$url['url']}";
        }
    }
    $category = implode(",",$categoryArr);
    $data = Content::getContent(['fields' => "keywords,abstract,description",'where' => "c.id = $id"]);

    if(count($data) == 0){
        $this->redirect('/surprise.html');
    }else{
        $prev = Content::getContent(['category' => $category,'where' => "c.id < $id","order" => "c.id DESC","pageSize" => 1]);
        $next = Content::getContent(['category' => $category,'where' => "c.id > $id","order" => "c.id ASC","pageSize" => 1]);
        $count = $data[0]['viewCount'];
        Content::updateAll(['viewCount' => ($count+1)],"id=$id");
        $this->title = $data[0]['name'];
        $this->keywords = $data[0]['keywords'];
        return $this->render('wordDetails',['end'=>$end,'nav' => $nav,'data' => $data,'prev' => $prev,'next' => $next,'changeNeedCategory' => $changeNeedCategory]);
    }
}

    /**
     * 专业内容列表页
     * @return string
     * @Obelisk
     */

    public function actionMajor(){
        $id = Yii::$app->request->get('id',144);
        $page = Yii::$app->request->get('page',1);
        $categoryData = Category::getOneCategory($id);
        $contentData = Content::getContent(['pageStr' =>'1','fields' => "keywords,abstract",'category' => "$id,178",'pageSize' => 7,'page' => $page]);
        $pageStr = $contentData['pageStr'];
        $count = $contentData['count'];
        $total = $contentData['total'];
        unset($contentData['count']);
        unset($contentData['total']);
        unset($contentData['pageStr']);
        return $this->render('major',['count' => $count,'total' => $total,'pageStr' => $pageStr,'id' => $id,'page' => $page,'categoryData' => $categoryData,'contentData' => $contentData]);
    }

    /**
     * 学校内容列表页
     * @return string
     * @Obelisk
     */
    public function actionSchool(){
        $id = Yii::$app->request->get('id',88);
        $page = Yii::$app->request->get('page',1);
        $degree = Yii::$app->request->get('degree','');
        $category = "$id,154";
        if($degree){
            $category .=",$degree";
        }
        $contentData = Content::getContent(['pageStr' =>'1','fields' => "keywords,abstract",'category' => $category,'pageSize' => 5,'page' => $page]);
        $count = $contentData['count'];
        $total = $contentData['total'];
        unset($contentData['count']);
        unset($contentData['total']);
        unset($contentData['pageStr']);
        return $this->render('school',['degree' => $degree,'count' => $count,'total' => $total,'id' => $id,'page' => $page,'contentData' => $contentData,]);
    }

    /**
     * 排名内容列表页
     * @return string
     * @Obelisk
     */
    public function actionRanking(){
        $country = Yii::$app->request->get('country','87');
        $page = Yii::$app->request->get('page',1);
        $organization = Yii::$app->request->get('organization','179');
        $major = Yii::$app->request->get('major','143');
        $year = Yii::$app->request->get('year','186');
        $category = '175,'.$country.",".$organization.",".$major.",".$year;

        $contentData = Content::getContent(['pageStr' =>'1','category' => $category,'pageSize' => 10,'page' => $page]);
        $count = $contentData['count'];
        $total = $contentData['total'];
        unset($contentData['count']);
        unset($contentData['total']);
        unset($contentData['pageStr']);
        return $this->render('ranking',['organization' => $organization,'count' => $count,'total' => $total,'country' => $country,'year' => $year,'major' => $major,'page' => $page,'contentData' => $contentData,]);
    }

//    /**
//     * 研究报告列表页
//     * @return string
//     * @Obelisk
//     */
//    public function actionReport(){
//        $page = Yii::$app->request->get('page',1);
//        $category = "125";
//        $contentData = Content::getContent(['fields' => 'abstract,keywords','pageStr' =>'1','category' => $category,'pageSize' => 8,'page' => $page]);
//        $count = $contentData['count'];
//        $total = $contentData['total'];
//        unset($contentData['count']);
//        unset($contentData['total']);
//        unset($contentData['pageStr']);
//        return $this->render('report',['count' => $count,'total' => $total,'page' => $page,'contentData' => $contentData,]);
//    }
//
    /**
     * 问答列表页
     * @return string
     * @Obelisk
     */
    public function actionQuestion(){
        $page = Yii::$app->request->get('page',1);
        $id = Yii::$app->request->get('id','');
        if($id ==121){
            $id='';
        }
        if($id){
            $category = "121,";
        }else{
            $category = "121";
        }
        $contentData = Content::getContent(['fields' => 'abstract,keywords','pageStr' =>'1','category' => $category,'pageSize' => 8,'page' => $page]);
        $count = $contentData['count'];
        $total = $contentData['total'];
        unset($contentData['count']);
        unset($contentData['total']);
        unset($contentData['pageStr']);
        return $this->render('question',['id' => $category,'count' => $count,'total' => $total,'page' => $page,'contentData' => $contentData,]);
    }

    /**研究报告，问答，动态统一列表方法
     * @return string
     * @Obelisk
     */
    public function actionList(){
        $page = Yii::$app->request->get('page',1);
        $category = Yii::$app->request->get('category');
        if(!$category){
            $this->redirect('/surprise.html');
        }else{
            $categoryArr = explode(",",$category);
            $endArr = end($categoryArr);
            $cnName = "";
            $enName = "";
            foreach($categoryArr as $v){
                $catName = Category::getOneCategory($v);
                $cnName .= $catName['name'];
                $enName .= $catName['enName'].'<br/>';
            }
            $enName = substr($enName,0,-5);
            if($endArr == 131){
                $cnName = '就业指导';
                $enName = 'DOCUMENT<br/>WRITING';
            }
            if($endArr == 127){
                $cnName = '文书写作';
                $enName = 'EMPLOYMENT<br/>GUIDANCE';
            }
            if($endArr == 125){
                $cnName = '研究报告';
                $enName = 'RESEARCH<br/>REPORT';
            }
            $contentData = Content::getContent(['fields' => 'abstract,keywords','pageStr' =>'1','category' => $category,'pageSize' => 8,'page' => $page]);
            $count = $contentData['count'];
            $total = $contentData['total'];
            unset($contentData['count']);
            unset($contentData['total']);
            unset($contentData['pageStr']);
            $this->layout_data = $endArr;
            return $this->render('list',['end' =>$endArr, 'category' => $category,'enName' => $enName,'cnName' => $cnName,'count' => $count,'total' => $total,'page' => $page,'contentData' => $contentData,]);
        }
    }

    /**
     * 公开课列表页
     * @return string
     * @Obelisk
     */
    public function actionPublicClass(){
        $page = Yii::$app->request->get('page',1);
        $heat = Yii::$app->request->get('heat',"");
        $category = Yii::$app->request->get('category',"");
        $reCategory = $category;
        if($category){
            $category .= ",107";
        }else{
            $category = '107';
        }
        if($heat){
            $category .= ",$heat";
        }
        $contentData = Content::getContent(['fields' => 'keywords,abstract,time,speaker,place,synopsis','pageStr' =>'1','category' => $category,'pageSize' => 8,'page' => $page]);
        $count = $contentData['count'];
        $total = $contentData['total'];
        unset($contentData['count']);
        unset($contentData['total']);
        unset($contentData['pageStr']);
        return $this->render('publicClass',['category' => $reCategory,'heat' => $heat,'count' => $count,'total' => $total,'page' => $page,'contentData' => $contentData,]);
    }

    /**
     * 签证面试
     * @return string
     * @Obelisk
     */
    public function actionVisaInterview(){
        $page = Yii::$app->request->get('page',1);
        $category = "128,129";
        $cnName = "签证面试";
        $enName = "";
        $contentData = Content::getContent(['type' => 1,'fields' => 'keywords,abstract','pageStr' =>'1','category' => $category,'pageSize' => 8,'page' => $page]);
        $count = $contentData['count'];
        $total = $contentData['total'];
        unset($contentData['count']);
        unset($contentData['total']);
        unset($contentData['pageStr']);
        return $this->render('visaInterview',['category' => $category,'cnName' => $cnName,'enName' => $enName,'count' => $count,'total' => $total,'page' => $page,'contentData' => $contentData,]);
    }

    /**
     * 学院详情
     * @return string
     * @Obelisk
     */
    public function actionSchoolDetails(){
        $id = Yii::$app->request->get('id');
        $category = Yii::$app->request->get('category');
        $changeNeedCategory =  $category;
        $categoryArr = explode(",",$category);
        $nav =[];
        foreach($categoryArr as $k => $v){
            if($v == 'index'){
                unset($categoryArr[0]);
                $nav[$k]['name'] = '首页';
                $nav[$k]['url'] = '/cn/index';
            }else{
                $url = Category::getOneCategory($v);
                $nav[$k]['name'] = "{$url['name']}";
                $nav[$k]['url'] = "{$url['url']}";
            }
        }
        $category = implode(",",$categoryArr);
        $data = Content::getContent(['fields' => "keywords,starPersonality,url,difficulty,consortium,place,enName,description",'where' => "c.id = $id"]);
        $prev = Content::getContent(['category' => $category,'where' => "c.id < $id","order" => "c.id DESC","pageSize" => 1]);
        $next = Content::getContent(['category' => $category,'where' => "c.id > $id","order" => "c.id ASC","pageSize" => 1]);
        $count = $data[0]['viewCount'];
        Content::updateAll(['viewCount' => ($count+1)],"id=$id");
        return $this->render('schoolDetails',['nav' => $nav,'data' => $data,'prev' => $prev,'next' => $next,'changeNeedCategory' => $changeNeedCategory]);
    }

    /**
     * 免责声明
     * @Obelisk
     */
    public function actionDisclaimer(){
        return $this->renderPartial('disclaimer');
    }

    /**每日一题页面
     * @return string
     * by fawn
     */
    public function actionProblem(){
        return $this->render('problem');
    }

}