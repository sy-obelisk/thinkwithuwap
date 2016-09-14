<!DOCTYPE html>
<html lang="ch">
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
    <title>单项加油站</title>
</head>
<body>
<!--内页头部-->
<header class=" pd-0 bg-1">
    <div class="header-2">
        <a class="tb tl" href="javascript:history.go(-1)"><img class="reBack" src="/wap/images/reBack.png" alt=""></a>
        <span class=" tb header-tit tm">单项加油站</span>
        <a class="tr tb" href="menu.html">
            <img class="menu-icon" src="/wap/images/menu.png" alt="">
        </a>
    </div>
</header>
<!--内页头部 END-->
<div class="gas-wrap">
    <ul class="gas-list pd-3 inb clearfix">
        <li>
            <div class="gas-img">
                <img src="/wap/images/g-2.png" alt="">
            </div>
            <p class="gas-name">文书定制</p>
            <a class="gas-show" href="#">立即查看></a>
        </li>
        <li>
            <div class="gas-img">
                <img src="/wap/images/g-3.png" alt="">
            </div>
            <p class="gas-name">网申服务</p>
            <a class="gas-show" href="#">立即查看></a>
        </li>
        <li>
            <div class="gas-img">
                <img src="/wap/images/g-4.png" alt="">
            </div>
            <p class="gas-name">面试辅导</p>
            <a class="gas-show" href="#">立即查看></a>
        </li>
        <li>
            <div class="gas-img">
                <img src="/wap/images/g-5.png" alt="">
            </div>
            <p class="gas-name">签证服务</p>
            <a class="gas-show" href="#">立即查看></a>
        </li>
    </ul>
</div>
<!--footer-->
<?php use app\commands\front\FooterWidget;?>
<?php FooterWidget::begin();?>
<?php FooterWidget::end();?>
<!--footer End-->
</body>
</html>