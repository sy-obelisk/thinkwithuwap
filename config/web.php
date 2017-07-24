<?php$params = require(__DIR__ . '/params.php');Yii::$classMap['Method'] = '@app/libs/Method.php';Yii::$classMap['UploadFile'] = '@app/libs/upload/UploadFile.php';$config = [    'id' => 'basic',    'basePath' => dirname(__DIR__),    'bootstrap' => ['log'],    'modules' => [        'content' => [                    'class'=>'app\modules\content\ContentModule'                ],        'basic' => [            'class'=>'app\modules\basic\BasicModule'        ],        'user' => [            'class'=>'app\modules\user\UserModule'        ],        'cn' => [            'class'=>'app\modules\cn\CnModule'        ],        'wap' => [            'class'=>'app\modules\wap\WapModule'        ],        'thinku' => [            'class'=>'app\modules\thinku\ThinkuModule'        ],    ],    'components' => [        'request' => [            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation            'cookieValidationKey' => '3ggkbEhqR-n2ASj19BJSpbdvpmbO4NwK',        ],//        'cache' => [//            'class' => 'yii\caching\MemCache',//            'servers'=> [['host'=>'127.0.0.1','port'=>'11211']]//        ],//        'errorHandler' => [//            'errorAction' => 'site/error',//        ],        'mailer' => [            'class' => 'yii\swiftmailer\Mailer',            'useFileTransport' =>false,//这句一定有，false发送邮件，true只是生成邮件在runtime文件夹下，不发邮件            'transport' => [                'class' => 'Swift_SmtpTransport',                'host' => 'smtp.exmail.qq.com',  //每种邮箱的host配置不一样                'username' => 'news@thinkwithu.com',                'password' => 'News0114',                'port' => '465',                'encryption' => 'ssl',            ],            'messageConfig'=>[                'charset'=>'UTF-8',                'from'=>['news@thinkwithu.com'=>'申友网']            ],        ],         'urlManager' => [             'enablePrettyUrl' => true,             'showScriptName' => false,             //'suffix' => '.html',             'rules' => [                 //首页                 '' => 'wap/index',                 //国家留学                 'abroad.html' => 'wap/study',                 //本科留学                 'GMAT.html' => 'wap/gmatsheet',                 'GMAT/details/<id:\d+>.html' => 'wap/gmatsheet/details',                 //硕士留学                 'TOEFL.html' => 'wap/toeflsheet',                 //博士留学                 'class.html' => 'wap/class',                 'class/details/<id:\d+>.html' => 'wap/class/details',                 'class/back/<id:\d+>.html' => 'wap/class/back',//培训                 'schools.html' => 'wap/schools',                 'guide.html' => 'wap/guide',                 'A.html' => 'wap/study/a',                 'B.html' => 'wap/study/b',                 'C.html' => 'wap/study/c',                 'D.html' => 'wap/study/d',                 'single.html' => 'wap/single',             //审核专用//                 '' => 'cn/cultivate',//案列                 'case.html' => 'wap/case',                 'case/details/<id:\d+>.html' => 'wap/case/details',//名师云集                 'teachers.html' => 'wap/masters',                 'teachers/<id:\d+>.html' => 'wap/masters/cases',                 'USA.html' => 'wap/study/usa',                 //名师案列库                 'advantage.html' => 'wap/study/advantage',                 'gmat-week.html' => 'wap/gmatsheet/week',                 'gmat-summer.html' => 'wap/gmatsheet/summer',                 'gmat-vip.html' => 'wap/gmatsheet/vip',                 'toefl-vip.html' => 'wap/toeflsheet/vip',//留学评估                 'menu.html' => 'wap/menu',//留学申请                 'about.html' =>'wap/about',                 'peixun.html' =>'wap/cultivate',                 'peixun.html' =>'wap/cultivate',//留学提升                 'promotion/<country>-<degree>.html' =>'cn/study/promote',//留学规划                 'strategies.html' =>'cn/study/project',                 'strategies/<country>-<degree>.html' =>'cn/study/project',                 'strategies/<country>.html' =>'cn/study/project',//找专业                 'major.html' =>'cn/index/major',                 'major/<id:\d+>.html' =>'cn/index/major',                 'major/<id:\d+>/<page:\d+>.html' =>'cn/index/major',//公开课//                 'public-class/<id:\d+>.html' =>'cn/index/public-class',                 'public-class.html' =>'cn/class/index',                 'public-class/<id:\d+>.html' =>'cn/class/details',                 'public-class/back/<id:\d+>.html' =>'cn/class/details-back',                 'public-class/abroad.html' =>'cn/class/abroad',                 'public-class/abroad/<page:\d+>.html' =>'cn/class/abroad',                 'public-class/cultivate.html' =>'cn/class/cultivate',                 'public-class/cultivate/<page:\d+>.html' =>'cn/class/cultivate',                 'public-class/user.html' =>'cn/class/manage',                 'public-class/collect.html' =>'cn/class/collect',//找排名                 'ranking.html' =>'cn/index/ranking',                 'ranking/<organization:\d+>/<country:\d+>/<major:\d+>/<year:\d+>.html' =>'cn/index/ranking',//列表页                 'list/<category>.html' =>'cn/index/list',                 'list/<page:\d+>/<category>.html' =>'cn/index/list',                 'cn/index/list' =>'site/error',//签证面试                 'VisaInterview.html' => 'cn/index/visa-interview',                 'VisaInterview/<page:\d+>.html' => 'cn/index/visa-interview',//问答                 'question.html' =>'cn/index/question',                 'question/<id:\d+>.html' =>'cn/index/question',                 'question/<page:\d+>/<id:\d+>.html' =>'cn/index/question',//关于申友                 'about-thinku.html' =>'cn/about',//联系我们                 'contact.html' =>'wap/about/contact',//加入我们                 'joinus.html' =>'cn/about/join',//图片三级                 'picture-details/<id:\d+>/<category>.html' => 'cn/index/picture-details',//学校三级                 'school-details/<id:\d+>/<category>.html' => 'cn/index/school-details',//文字三级                 'word-details/<id:\d+>/<category>.html' => 'cn/index/word-details',//留学产品                 'study-aboard/assistance.html' => 'cn/study/abroad-products',//本科产品                 'Undergraduate/assistance.html' => 'cn/study/apply-course',//硕士产品                 'Postgraduate/assistance.html' => 'cn/study/apply-master',//博士产品                 'Doctor/assistance.html' => 'cn/study/apply-doctor',//单项                 'individual.html' => 'cn/cultivate/individual',//MBA-PHD                 'MBA-PHD.html' => 'cn/cultivate/mba-phd',//GMAT详情                 'gmat/assistance.html' => 'cn/cultivate/details',//基础课程                 'gmat/assistance/basic-course.html' => 'cn/course/basic-class',//高分                 'gmat/assistance/advanced-course.html' => 'cn/course/advanced-course',//强化                 'gmat/assistance/intensive-training-course.html' => 'cn/course/intensive-course',//开课查询                 'assistance/course-inquiry.html' => 'cn/course/class-query',//申友专题                 'news.html' => 'wap/news',                 'news/details/<id:\d+>.html' => 'wap/news/details',                 //申友教材                 'materials.html' => 'cn/about/materials',                 'SAT.html' => 'wap/sat/index',// sat网页                 'SAT-week.html' => 'wap/sat/quan',// sat网页课程1                 'SAT-vip.html' => 'wap/sat/vip',// sat网页课程2                 'SAT-summer.html' => 'wap/sat/sprint',// sat网页课程3                 //备考资料                 'duidance.html' => 'cn/cultivate/test-daf',                 //留学服务                 'study-aboard/service/introduction.html' => 'cn/study/service',//                 //去留学了                 'surprise.html' => 'cn/study/go',                 'gmat/app.html' => 'cn/app/gmat',//审核专用//                    '' => 'index/index',//                    'about-thinku.html' =>'index/about',                 'contactus.html' =>'wap/about/contact-us',                'practices.html' =>'wap/practices/index',//游学实习首页                'practices/<id:\d+>.html'=>'wap/practices/details',//游学实习详情页面                'mentor.html'=>'cn/mentor/index',//海外mentor首页                'gmatsheet.html'=>'cn/gmatsheet/index',//GMAT单页                 'toefl/assistance.html'=>'cn/toeflsheet/index',//toefl单页                'problem.html'=>'cn/index/problem',//每日一题             ],         ],        'log' => [            'traceLevel' => YII_DEBUG ? 3 : 0,            'targets' => [                [                    'class' => 'yii\log\FileTarget',                    'levels' => ['error', 'warning'],                ],            ],        ],        'db' => require(__DIR__ . '/db.php'),    ],    'params' => $params,];if (YII_ENV_DEV) {    // configuration adjustments for 'dev' environment    $config['bootstrap'][] = 'debug';    $config['modules']['debug'] = 'yii\debug\Module';    $config['bootstrap'][] = 'gii';    $config['modules']['gii'] = 'yii\gii\Module';}return $config;