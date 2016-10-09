
    <!-- Basic Page Needs
     ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="title" content="">
    <meta name="author" content="">
    <meta name="Copyright" content="">
    <!-- <meta name="description" content=""> -->
    <!-- 让IE浏览器用最高级内核渲染页面 还有用 Chrome 框架的页面用webkit 内核
    ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge">
    <!-- IOS6全屏 Chrome高版本全屏
    ================================================== -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <!-- 让360双核浏览器用webkit内核渲染页面
    ================================================== -->
    <meta name="renderer" content="webkit">
    <!-- Mobile Specific Metas
    ================================================== -->
    <!-- !!!注意 minimal-ui 是IOS7.1的新属性，最小化浏览器UI -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/wap/css/reset.css">
    <link rel="stylesheet" href="/wap/css/common.css">
    <link rel="stylesheet" href="/wap/css/main2.css">
    <link rel="stylesheet" href="/wap/css/swiper-3.3.1.min.css">
    <script src="/wap/js/jquery-1.12.2.min.js"></script>
    <script src="/wap/js/swiper-3.3.1.jquery.min.js"></script>
    <script src="/wap/js/common.js"></script>
    <title>留学咨询</title>
</head>
<body>
<!--内页头部-->
<header class=" pd-0 bg-1">
    <div class="header-2">
        <a class="tb tl" href="javascript:history.go(-1)"><img class="reBack" src="/wap/images/reBack.png" alt=""></a>
        <span class=" tb header-tit tm">留学咨询</span>
        <a class="tr tb" href="/menu.html">
            <img class="menu-icon" src="/wap/images/menu.png" alt="">
        </a>
    </div>
</header>
<!--内页头部 END-->
<div class="ct-top">
    <div class="ct-1 tm relative">
        <img src="/wap/images/ct-1.png" alt="">
        <div><a class="inb mg-t1 tm line-1" target="_self" onclick="doyoo.util.openChat('g=10060013');return false;"><img src="/wap/images/ct-3.png" alt=""></a></div>
        <img class="arrow-1 ani" src="/wap/images/ct-2.png" alt="">
    </div>
    <div class="ct-2">
        <div class="tm line-1"><img src="/wap/images/ct-4.png" alt=""></div>
        <ul class="ct-user-list tm clearfix mg-t1">
            <?php
            $data = \app\modules\wap\models\Content::getContent(['fields' => 'score,abroadSchool','category' => "178,102",'pageSize'=>6]);
            foreach($data as $v) {
                ?>
                <li>
                    <div class="ct-head inb"><img src="<?php echo Yii::$app->params['PC'].$v['image']?>" alt=""></div>
                    <p class="user-de ellipsis-2"><?php echo $v['title']?></p>

                    <p class="ct-school ellipsis"><?php echo $v['abroadSchool']?></p>
                </li>
            <?php
            }
?>

        </ul>
        <div class="tm ct-btn mg-t1">
            <a class="ct-b1 inb" target="_self" onclick="doyoo.util.openChat('g=10060013');return false;">点击了解：查看更多申友名校案例</a>
        </div>
    </div>
</div>
<!--栏目-->
<div class="pd1 mg-t1 bg-col-1">
    <p class="col-name inb">留学产品</p>
    <div class="inb fr">
        <div class="icon inb">
            <img src="/wap/images/more.png" style="width: 0.6rem;" alt="">
            <span class=" r-name inb">更多方案</span>
        </div>

    </div>
</div>
<!--栏目 END-->
<!--内容-->
<section class="pd1 bg-col-1 clearfix">
    <div class="content clearfix">
        <div class="classify-wrap inb tm">
            <div class="cp-img">
                <a href="/A.html"><img src="/wap/images/cp-1.png" alt=""></a>
                <p class="must">必选项目</p>
            </div>
            <p class="cp-tit">A类卓越菁英</p>
            <p class="cp-describe">进入申请年 大三大四</p>
        </div>
        <div class="classify-wrap inb tm">
            <div class="cp-img">
                <a href="/B.html"><img src="/wap/images/cp-2.png" alt=""></a>
                <p class="must">必选项目</p>
            </div>
            <p class="cp-tit">B类梦想起航</p>
            <p class="cp-describe">有一年以上升学准备时间</p>
        </div>
        <div class="classify-wrap inb tm">
            <div class="cp-img">
                <a href="/C.html"><img src="/wap/images/cp-1.png" alt=""></a>
            </div>
            <p class="cp-tit">C类名校直通车</p>
            <p class="cp-describe">申请美英港热门名校</p>
        </div>
        <div class="classify-wrap inb tm">
            <div class="cp-img">
                <a href="/D.html"><img src="/wap/images/cp-1.png" alt=""></a>
                <p class="must">精英申请者必选项目</p>
            </div>
            <p class="cp-tit">D类助力传奇</p>
            <p class="cp-describe">有强烈要求的Master/MBA/PHD</p>
        </div>
    </div>
    <div class="content">
        <ul class="other-list">
            <li class="">
                <a href="/USA.html">
                    <div class="c2-icon inb"><img src="/wap/images/icon-9.png" alt=""></div>
                    <div class="inb max_w">
                        <p class="other-tit">美国申请方案</p>
                        <p class="other-de color-1">Top30/50商学院申请计划</p>
                    </div>
                </a>
            </li>
            <li class="">
                <a href="/single.html">
                    <div class="c2-icon inb"><img src="/wap/images/icon-10.png" alt=""></div>
                    <div class="inb max_w">
                        <p class="other-tit">单项加油站</p>
                        <p class="other-de color-2">定制个性化文书、网申、面试、签证等服务</p>
                    </div>
                </a>
            </li>
            <li class="">
                <a href="/advantage.html">
                    <div class="c2-icon inb"><img src="/wap/images/icon-11.png" alt=""></div>
                    <div class="inb max_w">
                        <p class="other-tit">申友留学服务优势</p>
                        <p class="other-de color-3">提倡非中介名校申请模式，透明服务<br>
                            六位一体服务，团队精细分工
                        </p>
                        <!--<p class="other-de color-3"></p>-->
                    </div>
                </a>
            </li>
        </ul>
    </div>

    <div class="tm ct-btn">
        <a class="ct-b1 inb" target="_self" onclick="doyoo.util.openChat('g=10060013');return false;">点击咨询：适合你的申请方案</a>
    </div>
</section>
<!--内容 END-->
<div class="bg-1 mg-t1">
    <ul class="ct-team-1 clearfix">
        <li>
            <img src="/wap/images/ct-7.png" alt="">
            <p class="ani ellipsis ct-teacher-name">Kevin</p>
        </li>
        <li>
            <img src="/wap/images/ct-6.png" alt="">
        </li>
        <li>
            <img src="/wap/images/ct-8.png" alt="">
            <p class="ani ellipsis ct-teacher-name">Amanda</p>
        </li>
    </ul>
    <ul class="ct-team-2 clearfix">
        <li>
            <img src="/wap/images/ct-9.png" alt="">
            <p class="ani ellipsis ct-teacher-name">Eve</p>
        </li>
        <li>
            <img src="/wap/images/ct-10.png" alt="">
            <p class="ani ellipsis ct-teacher-name">Kayla</p>
        </li>
        <li>
            <img src="/wap/images/ct-11.png" alt="">
            <p class="ani ellipsis ct-teacher-name">Ada</p>
        </li>
        <li>
            <img src="/wap/images/ct-12.png" alt="">
            <p class="ani ellipsis ct-teacher-name">Cherry</p>
        </li>
        <li>
            <img src="/wap/images/ct-13.png" alt="">
            <p class="ani ellipsis ct-teacher-name">Chris</p>
        </li>
        <li>
            <img src="/wap/images/ct-14.png" alt="">
            <p class="ani ellipsis ct-teacher-name">Julie</p>
        </li>


    </ul>
    <p class="ct-tel">免费咨询热线：400-600-1123</p>
</div>
<!--footer-->
<?php use app\commands\front\FooterWidget;?>
<?php FooterWidget::begin();?>
<?php FooterWidget::end();?>
<!--footer End-->
</body>
</html>