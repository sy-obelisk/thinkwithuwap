<?php
/**
 * 前台api
 * Created by PhpStorm.
 * User: obelisk
 */
namespace app\modules\wap\controllers;
use app\modules\wap\models\HistoryRecord;
use app\modules\content\models\Category;
use yii;
use app\libs\ThinkUApiControl;
use app\modules\wap\models\Content;
use app\modules\wap\models\Collect;
use app\modules\wap\models\Login;
use app\libs\Sms;
use app\libs\VerificationCode;
class ApiController extends ThinkUApiControl {
    public $enableCsrfValidation = false;
    public function actionGetJoin(){
        $id = Yii::$app->request->post('id');
        $data = Content::getContent(['fields' => 'description','where' => "c.id=$id"]);
        die(json_encode($data[0]));
    }

    /**
     * 短信接口
     * @Obelisk
     */
    public function actionPhoneCode()
    {
        $session = Yii::$app->session;
        $sms = new Sms();
        $phoneNum = Yii::$app->request->post('phoneNum');
        $type = Yii::$app->request->post('type');
        $word = Yii::$app->params["phone$type"];
        if (!empty($phoneNum)) {
            $phoneCode = mt_rand(100000, 999999);
            $session->set($phoneNum.'phoneCode',$phoneCode);
            $session->set('phoneTime',time());
            $content = '验证码：' . $phoneCode . '（10分钟有效），'.$word.'';
            $sms->send($phoneNum, $content, $ext = '', $stime = '', $rrid = '');
            $res['code'] = 1;
            $res['message'] = '短信发送成功！';
        } else {
            $res['code'] = 0;
            $res['message'] = '发送失败!手机号码为空！';
        }
        die(json_encode($res));
    }

    /**
     *评估信息存储
     * @Obelisk
     */
    public function actionAssess(){
        $phone = Yii::$app->request->post('phone');
        $code = Yii::$app->request->post('code');
        $name = Yii::$app->session->get('name');
        $extendVal = Yii::$app->session->get('extendVal');
        $contentModel = new Content();
        $checkTime = $contentModel->checkTime();
        if(!$checkTime){
            $res['code'] = 0;
            $res['message'] = '验证码过期';
        }else{
            $checkCode = $contentModel->checkCode($phone,$code);
            if(!$checkCode){
                $res['code'] = 0;
                $res['message'] = '验证码错误';
            }else{
                $contentModel->addContent(222,$phone,$name,$extendVal);
                $res['code'] = 1;
                $res['message'] = '我们的工作人员将于1-2个工作日内跟你联系';
            }
        }
        die(json_encode($res));
    }

    /**
     *获取排名分类的Id
     * @Obelisk
     */
    public function actionRankInfo(){
        $major = Yii::$app->request->post('major');
        $organization = Yii::$app->request->post('organization');
        $country = Yii::$app->request->post('country');
        $year = Yii::$app->request->post('year');
        $majorId = Category::find()->where("name='$major'")->one();
        $organizationId = Category::find()->where("name='$organization'")->one();
        $countryId = Category::find()->where("name='$country'")->one();
        $yearId = Category::find()->where("name='$year'")->one();
        $majorId = $majorId?$majorId->id:'';
        $organizationId = $organizationId?$organizationId->id:'';
        $countryId = $countryId?$countryId->id:'';
        $yearId = $yearId?$yearId->id:'';
        die(json_encode(['major' => $majorId,'organization' => $organizationId,'country' => $countryId,'year' => $yearId]));
    }

    /**
     * 分页获取内容
     * @Obelisk
     */
    public function actionChangeContent(){
        $list = Yii::$app->request->post('list');
        $category = Yii::$app->request->post('category');
        $pageSize = Yii::$app->request->post('pageSize');
        $page = Yii::$app->request->post('page');
        $fields = Yii::$app->request->post('fields');
        $pageClass = Yii::$app->request->post('pageClass','num');
        if($list == 'list1'){
            $data = Content::getContent(['pageStr' => 1,'page' => $page,'pageSize' => $pageSize,'category' => "102",'extend_category' => "115,116",'fields' => $fields]);
        }elseif($list == 'list2'){
            $data = Content::getContent(['pageStr' => 1,'page' => $page,'pageSize' => $pageSize,'category' => "102,115",'fields' => $fields]);
        }elseif($list == 'list3'){
            $data = Content::getContent(['pageStr' => 1,'page' => $page,'pageSize' => $pageSize,'category' => "102,116",'fields' => $fields]);
        }elseif($list == 'list4'){
            $data = Content::getContent(['pageStr' => 1,'page' => $page,'pageSize' => $pageSize,'category' => "107",'extend_category' => "178,115,116",'fields' => $fields]);
        }elseif($list == 'list5'){
            $data = Content::getContent(['pageStr' => 1,'page' => $page,'pageSize' => $pageSize,'category' => "107,178",'fields' => $fields]);
        }elseif($list == 'list6'){
            $data = Content::getContent(['pageStr' => 1,'page' => $page,'pageSize' => $pageSize,'category' => "107,115",'fields' => $fields]);
        }elseif($list == 'list7'){
            $data = Content::getContent(['pageStr' => 1,'page' => $page,'pageSize' => $pageSize,'category' => "102,116",'fields' => $fields]);
        }else{
            $data = Content::getContent(['pageStr' => 1,'page' => $page,'pageSize' => $pageSize,'category' => $category,'fields' => $fields]);
        }
        $count = $data['count'];
        $total = $data['total'];
        unset($data['count']);
        unset($data['total']);
        unset($data['pageStr']);
        $str ='<a data-value="1" class="tl changePage" href="javascript:;">首页</a>';
        $str .='<a data-value="'.($page-1).'" class="changePage" href="javascript:;">上一页</a>';
        $str .='<a class="tm" href="javascript:;">'.$page.'/'.$total.'</a>';
        $str .='<a data-value="'.($page+1).'" class="tm changePage" href="javascript:;">下一页</a>';
        $str .='<a data-value="'.$total.'" class="total tr changePage" href="javascript:;">末页</a>';
        die(json_encode(['data' => $data,'str' => $str]));
    }

    /**
     * 客户留言
     * @return string
     * @Obelisk
     */
    public function actionLeaveWords(){
        $phone = Yii::$app->request->post('phone');
        $code = Yii::$app->request->post('code');
        $name = Yii::$app->request->post('name');
        $email = Yii::$app->request->post('email');
        $extendVal = [$email];
        $contentModel = new Content();
        $checkTime = $contentModel->checkTime();
        if(!$checkTime){
            $res['code'] = 0;
            $res['message'] = '验证码过期';
        }else{
            $checkCode = $contentModel->checkCode($phone,$code);
            if(!$checkCode){
                $res['code'] = 0;
                $res['message'] = '验证码错误';
            }else{
                $contentModel->addContent(227,$phone,$name,$extendVal);
                $res['code'] = 1;
                $res['message'] = '我们的工作人员将于1-2个工作日内跟你联系';
            }
        }
        die(json_encode($res));
    }

    /**
     * 在线评估
     * @return string
     * @Obelisk
     */
    public function actionOnlineWords(){
        $phone = Yii::$app->request->post('phone');
        $code = Yii::$app->request->post('code');
        $name = Yii::$app->request->post('name');
        $email = Yii::$app->request->post('email');
        $class = Yii::$app->request->post('class');
        $extendVal = [$class,$email];
        $contentModel = new Content();
        $checkTime = $contentModel->checkTime();
        if(!$checkTime){
            $res['code'] = 0;
            $res['message'] = '验证码过期';
        }else{
            $checkCode = $contentModel->checkCode($phone,$code);
            if(!$checkCode){
                $res['code'] = 0;
                $res['message'] = '验证码错误';
            }else{
                $contentModel->addContent(226,$phone,$name,$extendVal);
                $res['code'] = 1;
                $res['message'] = '我们的工作人员将于1-2个工作日内跟你联系';
            }
        }
        die(json_encode($res));
    }


    /**
     * 点击获取验证码
     * @Obelisk
     */
    public function actionVerificationCode(){
        $_vc = new VerificationCode();  //实例化一个对象
        $_vc->doimg();
        Yii::$app->session->set('verificationCode',$_vc->getCode());//验证码保存到SESSION中
    }

    /**

     * 用户登录

     * @Obelisk

     */

    public function actionCheckLogin()

    {



        $apps       = Yii::$app->request;

        $session    = Yii::$app->session;

        $verificationCode   = $apps->post('verificationCode','');

        if($verificationCode){
            if(strtolower($session->get('verificationCode'))!=strtolower($verificationCode )){
                $re['code'] = 0;

                $re['message'] = '验证码错误';

                die(json_encode($re));
            }
        }

        $logins     = new Login();

        if($apps->isPost)

        {

            $userName   = $apps->post('userName');

            $userPass  = $apps->post('userPass');

            if(!$userName){

                $re['code'] = 0;

                $re['message'] = '请输入用户名';

                die(json_encode($re));

            }

            $userPass   = md5($userPass);

            $loginsdata =  $logins->find()->where("(phone='$userName' or userName='$userName' or email='$userName')")->one();

            if(!empty($loginsdata['id']))

            {

                if(!$userPass){

                    $re['code'] = 0;

                    $re['message'] = '请输入密码';

                    die(json_encode($re));

                }

                if($loginsdata['userPass'] == $userPass) {

                    //用户名

                    // 在要发送的响应中添加一个新的session

                    $session->set('userId', $loginsdata['id']);

                    if ($loginsdata['image'] == null) {

                        $loginsdata['image'] = '';

                    }

                    $session->set('userData', $loginsdata);

                    @unlink("html\cn\heard.html");

                    $re['code'] = 1;

                    $re['message'] = '登录成功';

                }else{

                    $re['code'] = 0;

                    $re['message'] = '密码错误';

                }

            }

            else

            {

                $re['code'] = 0;

                $re['message'] = '用户名错误';

            }

            die(json_encode($re));

        }

    }


    /**

     * 用户注册

     * @Obelisk

     */

    public function actionRegister(){

        $login = new Login();

        $registerStr = Yii::$app->request->post('registerStr');

        $pass = Yii::$app->request->post('pass');

        $code = Yii::$app->request->post('code');

        $type = Yii::$app->request->post('type');

        $userName = Yii::$app->request->post('userName');

        $checkPhoneEmail = $login->checkPhoneEmail($registerStr,$type);

        if(!$checkPhoneEmail){

            $res['code'] = 0;

            if($type == 1){

                $res['message'] = '手机已经被注册';

            }else{

                $res['message'] = '邮箱已经被注册';

            }

            $res['type'] = '3';

            die(json_encode($res));

        }

        $checkUserName = $login->checkUserName($userName);

        if(!$checkUserName){

            $res['code'] = 0;

            $res['message'] = '用户名已经被注册';

            $res['type'] = '2';

            die(json_encode($res));

        }

        $checkTime = $login->checkTime();

        if($checkTime){

            $checkCode = $login->checkCode($registerStr,$code);

            if($checkCode){

                if($type == 1){

                    $login->phone = $registerStr;

                    $login->userPass = md5($pass);

                    $login->createTime = time();

                    $login->userName = $userName;

                }else{

                    $login->email = $registerStr;

                    $login->userPass = md5($pass);

                    $login->createTime = time();

                    $login->userName = $userName;

                }

                $re = $login->save();

                if($re){

                    $res['code'] = 1;

                    $res['message'] = '注册成功';

                }else{

                    $res['code'] = 0;

                    $res['message'] = '注册失败，请重试';

                    $res['type'] = '3';

                }

            }else{

                $res['code'] = 0;

                $res['message'] = '验证码错误';

                $res['type'] = '1';

            }

        }else{

            $res['code'] = 0;

            $res['message'] = '验证码过期';

            $res['type'] = '1';

        }

        die(json_encode($res));

    }



    /**

     * 发送邮箱

     * @Obelisk

     */

    public function actionSendMail(){

        $session = Yii::$app->session;

        $emailCode = mt_rand(100000, 999999);

        $email = Yii::$app->request->post('email');

        $type = Yii::$app->request->post('type');

        $word = Yii::$app->params["phone$type"];

        $session->set($email.'phoneCode',$emailCode);

        $session->set('phoneTime',time());

        $mail= Yii::$app->mailer->compose();

        $mail->setTo($email);

        $mail->setSubject("【申友网(thinku)】邮件验证码");

        $mail->setHtmlBody('验证码：' . $emailCode . '（10分钟有效），'.$word
        );    //发布可以带html标签的文本

        if($mail->send()) {

            $res['code'] = 1;

            $res['message'] = '邮件发送成功！';

        }else {

            $res['code'] = 0;

            $res['message'] = '邮件发送失败！';

        }

        die(json_encode($res));

    }



    /**

     * 注销账户

     * @return string

     * */

    public function actionLoginOut()

    {

        $session    = Yii::$app->session;

        $startListening = $session->get('startListening');

        $userId = $session->get('userId');

        if($startListening){

            $testId = Yii::$app->session->get('testId');

            $deltaTime = time()-$startListening;

            $sign = HistoryRecord::find()->where("userId=$userId AND testId=$testId AND recordType=2")->one();

            HistoryRecord::updateAll(['deltaTime' => $sign->deltaTime+$deltaTime],"userId=$userId AND testId=$testId AND recordType=2");

            Yii::$app->session->remove('startListening');

            Yii::$app->session->remove('testId');

        }

        $session->remove('userData');

        $session->remove('userId');;

        @unlink("html\cn\heard.html");

        die(json_encode(['code' =>1]));

    }



    /**

     * 找回密码

     * @return string

     * */

    public function actionFindPass()

    {

        $login = new Login();

        $registerStr = Yii::$app->request->post('registerStr');

        $pass = Yii::$app->request->post('pass');

        $code = Yii::$app->request->post('code');

        $type = Yii::$app->request->post('type');

        $re = $login->find()->where("phone='$registerStr' or email='$registerStr'")->one();

        if(!$re){

            $res['code'] = 0;

            if($type == 1) {

                $res['message'] = '此电话还没有注册！';

            }else{

                $res['message'] = '此邮箱还没有注册！';

            }

            die(json_encode($res));

        }

        $checkTime = $login->checkTime();

        if($checkTime){

            $checkCode = $login->checkCode($registerStr,$code);

            if($checkCode){

                if($type == 1){

                    $re = $login->updateAll(['userPass' => md5($pass)],"phone='$registerStr'");

                }else{

                    $re = $login->updateAll(['userPass' => md5($pass)],"email='$registerStr'");

                }

                if($re){

                    $res['code'] = 1;

                    $res['message'] = '密码找回成功';

                }else{

                    $res['code'] = 0;

                    $res['message'] = '找回失败，请重试';

                    $res['type'] = '3';

                }

            }else{

                $res['code'] = 0;

                $res['message'] = '验证码错误';

                $res['type'] = '1';

            }

        }else{

            $res['code'] = 0;

            $res['message'] = '验证码过期';

            $res['type'] = '1';

        }

        die(json_encode($res));

    }

    /**

     * 修改用户资料

     * @Obelisk

     */

    public function actionChangeUserInfo(){

        $model = new Login();

        $session    = Yii::$app->session;

        $userId = $session->get('userId');

//        $phoneCode = Yii::$app->request->post('phoneCode','');
//
//        $phone = Yii::$app->request->post('phone','');

        $nickname = Yii::$app->request->post('nickname','');

//        $school = Yii::$app->request->post('school');
//
//        $major = Yii::$app->request->post('major');
//
//        $grade = Yii::$app->request->post('grade');

        $sign = Login::find()->where("id!=$userId AND nickname='$nickname'")->one();

        if($sign){

            die(json_encode(['code' =>0,'message'=>'昵称已经被使用']));

        }
        $userInfo = [];
        if($nickname){
            $userInfo['nickname'] = $nickname;
        }
//        if($phone){
//            $userInfo['phone'] = $phone;
//        }
//        if($school){
//            $userInfo['school'] = $school;
//        }
//        if($major){
//            $userInfo['major'] = $major;
//        }
//        if($grade){
//            $userInfo['grade'] = $grade;
//        }
//        if($phone){
//
//            $sign = Login::find()->where("id!=$userId AND phone='$phone'")->one();
//
//            if($sign){
//
//                die(json_encode(['code' =>0,'message'=>'该手机已被其他用户绑定']));
//
//            }
//
//            $signPhone = Login::find()->where("id=$userId AND phone='$phone'")->one();
//
//            if(!$signPhone){
//
//                $checkTime = $model->checkTime();
//
//                if($checkTime){
//
//                    $checkCode = $model->checkCode($phone,$phoneCode);
//
//                    if($checkCode){
//
//                        $model->updateAll($userInfo,"id=$userId");
//
//                        $userData = $model->findOne($userId);
//
//                        Yii::$app->session->set('userData',$userData);
//
//                        $res['code'] = 1;
//
//                        $res['message'] = '保存成功';
//
//                    }else{
//
//                        $res['code'] = 0;
//
//                        $res['message'] = '验证码错误';
//
//                    }
//
//                }else{
//
//                    $res['code'] = 0;
//
//                    $res['message'] = '验证码过期';
//
//                }
//
//            }else{
//
//                $model->updateAll($userInfo,"id=$userId");
//
//                $userData = $model->findOne($userId);
//
//                Yii::$app->session->set('userData',$userData);
//
//                $res['code'] = 1;
//
//                $res['message'] = '保存成功';
//
//            }
//
//        }else{

            $model->updateAll($userInfo,"id=$userId");

            $userData = $model->findOne($userId);

            Yii::$app->session->set('userData',$userData);

            $res['code'] = 1;

            $res['message'] = '保存成功';

//        }

        die(json_encode($res));

    }

    /**

     * 修改用户邮箱

     * @Obelisk

     */

    public function actionChangeUserEmail(){

        $model = new Login();

        $session    = Yii::$app->session;

        $userId = $session->get('userId');

        $emailCode = Yii::$app->request->post('emailCode');

        $email = Yii::$app->request->post('email');

        $sign = Login::find()->where("id!=$userId AND email='$email'")->one();

        if($sign){

            die(json_encode(['code' =>0,'message'=>'该邮箱已被使用']));

        }

        $checkTime = $model->checkTime();

        if($checkTime){

            $checkCode = $model->checkCode($email,$emailCode);

            if($checkCode){

                $model->updateAll(['email' => $email],"id=$userId");

                $userData = $model->findOne($userId);

                Yii::$app->session->set('userData',$userData);

                $res['code'] = 1;

                $res['message'] = '保存成功';

            }else{

                $res['code'] = 0;

                $res['message'] = '验证码错误';

            }

        }else{

            $res['code'] = 0;

            $res['message'] = '验证码过期';

        }

        die(json_encode($res));

    }

    /**

     * 修改用户邮箱

     * @Obelisk

     */

    public function actionChangeUserPhone(){

        $model = new Login();

        $session    = Yii::$app->session;

        $userId = $session->get('userId');

        $phoneCode = Yii::$app->request->post('phoneCode');

        $phone = Yii::$app->request->post('phone');

        $sign = Login::find()->where("id!=$userId AND phone='$phone'")->one();

        if($sign){

            die(json_encode(['code' =>0,'message'=>'该电话已被使用']));

        }

        $checkTime = $model->checkTime();

        if($checkTime){

            $checkCode = $model->checkCode($phone,$phoneCode);

            if($checkCode){

                $model->updateAll(['phone' => $phone],"id=$userId");

                $userData = $model->findOne($userId);

                Yii::$app->session->set('userData',$userData);

                $res['code'] = 1;

                $res['message'] = '保存成功';

            }else{

                $res['code'] = 0;

                $res['message'] = '验证码错误';

            }

        }else{

            $res['code'] = 0;

            $res['message'] = '验证码过期';

        }

        die(json_encode($res));

    }

    /**

     * 上传头像

     * @Obelisk

     */

    public function actionUpImage(){

        $session    = Yii::$app->session;

        $userId = $session->get('userId');

        $userData = $session->get('userData');

        $image = Yii::$app->request->post('image');

        $sign = Login::updateAll(['image' => $image],"id=$userId");

        if($sign){

            $userData['image'] = $image;

            $session->set('userData',$userData);

            $res['code'] = 1;

            $res['message'] = '更换成功';

        }else{

            $res['code'] = 0;

            $res['message'] = '更换失败，请重试';

        }

        die(json_encode($res));

    }

    /**

     * 修改用户密码

     * @Obelisk

     */

    public function actionChangeUserPass(){

        $model = new Login();

        $session    = Yii::$app->session;

        $userId = $session->get('userId');

        $oldPassword = Yii::$app->request->post('oldPassword');

        $oldPassword = md5($oldPassword);

        $newPassword = Yii::$app->request->post('newPassword');

        $sign = Login::find()->where("id=$userId AND userPass='$oldPassword'")->one();

        if(!$sign){

            die(json_encode(['code' =>0,'message'=>'当前密码错误']));

        }else{

            $model->updateAll(['userPass' => md5($newPassword)],"id=$userId");

            $userData = $model->findOne($userId);

            Yii::$app->session->set('userData',$userData);

            $res['code'] = 1;

            $res['message'] = '保存成功';

        }

        die(json_encode($res));

    }

    /**

     * 添加收藏

     * @Obelisk

     */

    public function actionAddCollect(){

        $userId = Yii::$app->session->get('userId');
        if($userId){
            $contentId = Yii::$app->request->post('id');

            $sign = Collect::find()->where("contentId=$contentId AND userId=$userId")->one();
            if($sign){
                $res['code'] = 0;

                $res['message'] = '已报名';

                die(json_encode($res));
            }
            $collectType = Yii::$app->request->post('collectType');

            $model = new Collect();

            $model->contentId = $contentId;

            $model->userId = $userId;


            $model->collectType = $collectType;

            $model->createTime = time();

            $sign = $model->save();

            if($sign){

                $res['code'] = 1;

                $res['message'] = '报名成功';

            }else{

                $res['code'] = 0;

                $res['message'] = '报名失败，请重试';

            }

        }else{

            $res['code'] = 2;

            $res['message'] = '请登录';

        }

        die(json_encode($res));

    }


    /**
     * 预约
     * @return string
     * @Obelisk
     */
    public function actionSubscribe(){
        $phone = Yii::$app->request->post('phone');
        $code = Yii::$app->request->post('code');
        $name = Yii::$app->request->post('name');
        $school = Yii::$app->request->post('school');
        $extendVal = [$name,$school];
        $contentModel = new Content();
        $checkTime = $contentModel->checkTime();
        if(!$checkTime){
            $res['code'] = 0;
            $res['message'] = '验证码过期';
        }else{
            $checkCode = $contentModel->checkCode($phone,$code);
            if(!$checkCode){
                $res['code'] = 0;
                $res['message'] = '验证码错误';
            }else{
                $contentModel->addContent(247,$phone,$name,$extendVal);
                $res['code'] = 1;
                $res['message'] = '我们的工作人员将于1-2个工作日内跟你联系';
            }
        }
        die(json_encode($res));
    }
}