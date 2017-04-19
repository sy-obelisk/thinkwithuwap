    <!-- Basic Page Needs
     ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="留学动态,留学资讯,留学新闻,gmat考试技巧,gmat资讯,gmat动态,申友动态,申友公开课,申友专题">
    <meta name="description" content="<?php echo $data[0]['abstract']?>">
    <meta name="title" content="留学动态_gmat资讯_申友专题-申友教育">
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
    <title><?php echo $data[0]['name']?>-申友网</title>
    <link rel="stylesheet" href="/wap/css/reset.css" />
    <link rel="stylesheet" href="/wap/css/common.css" />
    <link rel="stylesheet" href="/wap/css/swiper-3.3.1.min.css" />
    <link rel="stylesheet" type="text/css" href="/wap/css/newCommon.css"/>
    <link rel="stylesheet" href="/wap/css/successDetail.css" />
</head>
<body>
<header class="pd-0 details-top bc-175">
    <div class="header-2">
        <a class="tb tl" href="javascript:history.go(-1)"><img class="reBack" src="/wap/images/pratices-arrow-left.png" alt=""></a>
        <span class="tb header-tit tm">最新资讯</span>
        <span class="tr tb"></span>
    </div>
</header>
<!--文章-->
<div class="success-text">
    <div class="text-top">
        <div class="text-title">
            <h2><?php echo $data[0]['name']?></h2>
            <ul class="clearfix dis-flex">
                <li>阅读次数：<span><?php echo $data[0]['viewCount']?></span></li>
                <li>时间：<span><?php echo $data[0]['createTime']?></span></li>
                <li>来源：<span>申友教育</span></li>
            </ul>
        </div>
    </div>
    <div class="text-content">
        <p class="text-1"> <?php echo $data[0]['abstract']?></p>
        <?php echo str_replace('src="/files','src="'.Yii::$app->params['PC'].'/files',$data[0]['description']);?>
    </div>
    <div class="text-next clearfix">
        <?php if(count($next)>0) { ?>
            <a href="/news/details/<?php echo $next[0]['id']?>.html">上一篇：<span><?php echo $next[0]['name']?></span></a>
        <?php
        }
        ?>
        <?php if(count($prev)>0) { ?>
            <a href="/news/details/<?php echo $prev[0]['id']?>.html">下一篇：<span><?php echo $prev[0]['name']?></span></a>
        <?php
        }
        ?>
    </div>
</div>
<!--文章结束-->
<!--相关阅读-->
<div class="success-about">
    <div class="title">
        <img src="/wap/images/success-about.jpg"/>
        <h3>相关阅读</h3>
    </div>
    <ul>
        <?php
            foreach($correlation as $v) {
                ?>
                <li class="border"><a href="/news/details/<?php echo $v['id']?>.html"><?php echo $v['name']?></a></li>
            <?php
            }
        ?>
    </ul>
</div>
<!--相关阅读结束-->
<!--留学评估-->
<?php use app\commands\front\BottomWidget;?>
<?php BottomWidget::begin();?>
<?php BottomWidget::end();?>
<!--footer-->
<?php use app\commands\front\FooterWidget;?>
<?php FooterWidget::begin();?>
<?php FooterWidget::end();?>
<!--footer End-->
</body>
    <script type="text/javascript" src="/wap/js/jquery-1.12.2.min.js"></script>
    <script src="/wap/js/swiper-3.3.1.jquery.min.js"></script>
    <script src="/wap/js/common.js"></script>
</html>
