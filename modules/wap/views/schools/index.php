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
    <meta name="description" content="">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
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
    <title>院校搜索</title>
</head>
<body>
<!--内页头部-->
<header class=" pd-0 bg-1">
    <div class="header-2">
        <a class="tb tl" href="javascript:history.go(-1)"><img class="reBack" src="/wap/images/reBack.png" alt=""></a>
        <span class=" tb header-tit tm">院校搜索</span>
        <a class="tr tb" href="menu.html">
            <img class="menu-icon" src="/wap/images/menu.png" alt="">
        </a>
    </div>
</header>
<!--内页头部 END-->
<!--搜索框-->
<div class="search-text-wrap clearfix">

    <div class="fl" style="margin-top: 0.15rem;">
        <img src="/wap/images/sc-1.png" style="height: 1rem" alt="">
    </div>
    <div class="fr relative sc-search-text">
        <div class="inb search-wrap">
            <img class="search-1" src="/wap/images/search.png" alt="">
            <form action="javascript:;" class="form-wrap">
                <input class="inb" type="search" placeholder="输入你想查询的内容">
            </form>

        </div>
        <!--<form action="javascript:;">-->

        <!--<input type="search" autocomplete="off" maxlength="20" name="keyword" class="sc-search" placeholder="输入课程名称或班级编号" id="input1">-->
        <!--<a href="#"><img src="/wap/images/search-3.png" style="width: 1rem" alt=""></a>-->
        <!--</form>-->
    </div>


</div>
<!--搜索框  END-->
<div>
    <ul class="bg-1 school-wrap">
        <?php
            foreach($data as $v) {
                ?>
                <li>
                    <div class="sc-logo fl">
                        <img src="<?php echo Yii::$app->params['schoolConnect'].$v['image']?>" alt="">

                        <p class="concern">已有<span>111</span>人关注</p>
                    </div>
                    <div class="sc-info fr">
                        <p class="ellipsis"><span class="ch-name inb"><?php echo $v['name']?></span><span class="en-name inb"><?php echo $v['title']?></span>
                        </p>

                        <p class="sc-rank ellipsis en-name">学校排名：<?php echo $v['rank']?></p>

                        <p class="sc-address ellipsis en-name">位于：<?php echo $v['place']?></p>

                        <div class="tr" style="margin-top: 0.2rem">
                            <a href="#"><img class="sc-pe" src="/wap/images/sc-2.png" alt=""></a>
                        </div>
                    </div>
                </li>
            <?php
            }
        ?>
    </ul>
    <div class="bg-1 pd-1 sc-other">
        <a href="#"><img src="/wap/images/sc-3.png" alt=""></a>
        <a href="#"><img src="/wap/images/sc-4.png" alt=""></a>
        <a href="#"><img src="/wap/images/sc-5.png" alt=""></a>
    </div>

</div>
<!--footer-->
<footer class="tm">
    <a class="inb f-list" href="index.html">
        <img src="/wap/images/icon-16.png" style="width: 1.15rem" alt="">
        <p class="ft-name">首页</p>
    </a>
    <img src="/wap/images/line.png" style="height: 1.35rem" alt="">
    <a class="inb f-list" href="contact.html">
        <img src="/wap/images/icon-17.png" style="width: 1.15rem" alt="">
        <p class="ft-name">电话咨询</p>
    </a>
    <img src="/wap/images/line.png" style="height: 1.35rem" alt="">
    <a class="inb f-list" href="#">
        <img src="/wap/images/icon-18.png" style="width: 1.15rem" alt="">
        <p class="ft-name">在线咨询</p>
    </a>
    <img src="/wap/images/line.png" style="height: 1.35rem" alt="">
    <a class="inb f-list" href="#">
        <img src="/wap/images/icon-19.png" style="width: 1.15rem" alt="">
        <p class="ft-name">全国分支</p>
    </a>
</footer>
<!--footer End-->
</body>
<script>
    $("#search").on("click",function(){
        $(".sc-search").focus();
    })
</script>
</html>