<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--阻止浏览器缓存-->
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
    <meta http-equiv="expires" content="0">
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
    <title>托福课程</title>
</head>
<body>
<!--内页头部-->
<header class=" pd-0 bg-1">
    <div class="header-2">
        <a class="tb tl" href="javascript:history.go(-1)"><img class="reBack" src="/wap/images/reBack.png" alt=""></a>
        <span class=" tb header-tit tm">托福课程</span>
        <a class="tr tb" href="/menu.html">
            <img class="menu-icon" src="/wap/images/menu.png" alt="">
        </a>
    </div>
</header>
<!--内页头部 END-->
<!--广告位-->
<div><a href="#"><img src="/wap/images/ad-10.png" alt=""></a></div>
<!--广告位 END-->
<div class="tf-special"><img src="/wap/images/tf-1.png" alt=""></div>

<div class="pd-1 bg-1">
    <div style="padding: 0.3rem 0 0.7rem"><img src="/wap/images/tf-3.png" alt=""></div>
    <div class="tf-top clearfix">
        <a href="#"><img src="/wap/images/tf-5.png" alt=""></a>
        <a href="#"><img src="/wap/images/tf-6.png" alt=""></a>
        <a href="#"><img src="/wap/images/tf-7.png" alt=""></a>
    </div>
    <div class="tf-bottom clearfix">
        <a class="inb fl" href="#"><img src="/wap/images/tf-8.png" alt=""></a>
        <a class="inb fr" href="#"><img src="/wap/images/tf-9.png" alt=""></a>
    </div>
</div>
<div name="tf-open" id="tf-open" class="bg-1" style="padding: 0.3rem 0.625rem 0"><img src="/wap/images/tf-4.png" alt=""></div>
<ul class="bg-1 pd-0 open-list">
    <li>
        <div class="fl open-img"><img src="/wap/images/sub-5.png" alt=""></div>
        <div class="fr open-text">
            <h1 class="open-name">托福强化班（线下）</h1>
            <P class="open-time">每月周末滚动开班</P>
        </div>
    </li>
    <li>
        <div class="fl open-img"><img src="/wap/images/sub-5.png" alt=""></div>
        <div class="fr open-text">
            <h1 class="open-name">托福强化班（线上）</h1>
            <P class="open-time">随时开课</P>
        </div>
    </li>
    <li>
        <div class="fl open-img"><img src="/wap/images/sub-5.png" alt=""></div>
        <div class="fr open-text">
            <h1 class="open-name">托福寒假班（连授班）</h1>
            <P class="open-time">1、2月每周滚动开班</P>
        </div>
    </li>
    <li>
        <div class="fl open-img"><img src="/wap/images/sub-5.png" alt=""></div>
        <div class="fr open-text">
            <h1 class="open-name">托福VIP一对一</h1>
            <P class="open-time">随时开课</P>
        </div>
    </li>
</ul>
<div class="sub-case">
    <div class="pd-1"><img src="/wap/images/sub-tit.png" alt=""></div>
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
        <a class="ct-b1 inb" href="/case.html">点击了解：查看更多申友名校案例</a>
    </div>
</div>
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
</div>
<!--栏目-->
<div class="pd1 mg-t1 bg-col-1" style="padding-bottom: 0">
    <p class="col-name inb">每日一题</p>
    <div class="inb fr">
        <div class="icon inb">
            <span class=" r-name inb">全部 ></span>
        </div>
    </div>
</div>
<!--栏目 END-->
<ul class="topic-wrap bg-1 pd-1">
    <?php
    $data = \app\modules\wap\models\Content::getContent(['fields' => 'abstract','category' => "249,116",'pageSize'=>10]);
    foreach($data as $v) {
        ?>
        <li>
            <h1 class="topic"><?php echo $v['name']?></h1>

            <p class="ellipsis topic-de"><?php echo $v['abstract']?>......</p>

            <p class="topic-time">时间：<?php echo $v['createTime']?></p>
        </li>
    <?php
    }
    ?>

</ul>
<!--footer-->
<?php use app\commands\front\FooterWidget;?>
<?php FooterWidget::begin();?>
<?php FooterWidget::end();?>
<!--footer End-->
</body>
</html>