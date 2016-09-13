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
    <script src="/wap/js/common.js"></script>
    <script src="/wap/js/swiper-3.3.1.jquery.min.js"></script>
    <title>背景提升</title>
</head>
<body>
<!--内页头部-->
<header class=" pd-0 bg-1">
    <div class="header-2">
        <a class="tb tl" href="javascript:history.go(-1)"><img class="reBack" src="/wap/images/reBack.png" alt=""></a>
        <span class=" tb header-tit tm">背景提升</span>
        <a class="tr tb" href="menu.html">
            <img class="menu-icon" src="/wap/images/menu.png" alt="">
        </a>
    </div>
</header>
<!--内页头部 END-->
<!--广告位-->
<div><a href="#"><img src="/wap/images/b1.png" alt=""></a></div>
<!--广告位 END-->
<section class="bg-1 mg-t1">
    <div class="boost-tit clearfix" id="boost-1" style="background: #4cbfff">
        <div class="fl">
            <img class="boost-icon" src="/wap/images/icon-22.png" alt="">
            <span class="boost-tit-name">游学项目</span>
        </div>
        <div class="fr"><img class="b-crrow" src="/wap/images/b-crrow.png" alt=""></div>
    </div>
    <div class="banner2-wrap">
        <div class="swiper-container-1 b1-wrap">
            <div class="swiper-wrapper mg-t1">
                <ul class="swiper-slide b1 clearfix">
                    <?php
                    $data = \app\modules\wap\models\Content::getContent(['fields' => 'id,image,name,time,synopsis','category' => "239",'limit'=>'0,2']);

                    foreach($data as $v) {
                        ?>
                        <li>
                            <a class="inb boost-img" href="#"><img src="<?php echo $v['image']?>" alt=""></a>

                            <p class="boost-name ellipsis"><?php echo $v['name']?></p>

                            <p class="boost-time">时间：<?php echo date("Y-m-d",strtotime($v['time']))?></p>
                            <a class="inb boost-xq" href="#"><img src="/wap/images/b-2.png" alt="">详细介绍</a>
                        </li>
                    <?php
                    }
                    ?>

                </ul>
                <ul class="swiper-slide b1 clearfix">
                    <?php
                    $data = \app\modules\wap\models\Content::getContent(['fields' => 'id,image,name,time,synopsis','category' => "239",'limit'=>'2,2']);

                    foreach($data as $v) {
                        ?>
                        <li>
                            <a class="inb boost-img" href="#"><img src="<?php echo $v['image']?>" alt=""></a>

                            <p class="boost-name ellipsis"><?php echo $v['name']?></p>

                            <p class="boost-time">时间：<?php echo date("Y-m-d",strtotime($v['time']))?></p>
                            <a class="inb boost-xq" href="#"><img src="/wap/images/b-2.png" alt="">详细介绍</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination b1-page"></div>
        </div>
    </div>
</section>
<section class="bg-1">
    <div class="boost-tit clearfix" style="background: #ffa32b">
        <div class="fl">
            <img class="boost-icon" src="/wap/images/icon-23.png" alt="">
            <span class="boost-tit-name">实习项目</span>
        </div>
        <div class="fr"><img class="b-crrow" src="/wap/images/b-crrow.png" alt=""></div>
    </div>
    <div class="banner2-wrap">
        <div class="tm mg-t1 b2-select">
            <span class="b2-current">国内实习</span>
            <span>国外实习</span>
        </div>
        <div class="swiper-container-2 b2 b1-wrap" style="display: block">
            <div class="swiper-wrapper mg-t1">
                <ul class="swiper-slide b1 clearfix">
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['fields' => 'id,image,name,time,synopsis','category' => "240,243",'limit'=>'0,2']);
                    foreach($data as $v) {
                        ?>
                        <li>
                            <a class="inb boost-img" href="#"><img src="<?php echo $v['image']?>" alt=""></a>

                            <p class="boost-name ellipsis"><?php echo $v['name']?></p>

                            <p class="boost-time">时间：<?php echo date("Y-m-d",strtotime($v['time']))?></p>
                            <a class="inb boost-xq" href="#"><img src="/wap/images/b-2.png" alt="">详细介绍</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
                <ul class="swiper-slide b1 clearfix">
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['fields' => 'id,image,name,time,synopsis','category' => "240,243",'limit'=>'2,2']);
                    foreach($data as $v) {
                        ?>
                        <li>
                            <a class="inb boost-img" href="#"><img src="<?php echo $v['image']?>" alt=""></a>

                            <p class="boost-name ellipsis"><?php echo $v['name']?></p>

                            <p class="boost-time">时间：<?php echo date("Y-m-d",strtotime($v['time']))?></p>
                            <a class="inb boost-xq" href="#"><img src="/wap/images/b-2.png" alt="">详细介绍</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination b2-page"></div>
        </div>
        <div style="display: none" class="swiper-container-3 b2 b1-wrap">
            <div class="swiper-wrapper mg-t1">
                <ul class="swiper-slide b1 clearfix">
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['fields' => 'id,image,name,time,synopsis','category' => "240,242",'limit'=>'0,2']);
                    foreach($data as $v) {
                        ?>
                        <li>
                            <a class="inb boost-img" href="#"><img src="<?php echo $v['image']?>" alt=""></a>

                            <p class="boost-name ellipsis"><?php echo $v['name']?></p>

                            <p class="boost-time">时间：<?php echo date("Y-m-d",strtotime($v['time']))?></p>
                            <a class="inb boost-xq" href="#"><img src="/wap/images/b-2.png" alt="">详细介绍</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
                <ul class="swiper-slide b1 clearfix">
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['fields' => 'id,image,name,time,synopsis','category' => "240,242",'limit'=>'2,2']);
                    foreach($data as $v) {
                        ?>
                        <li>
                            <a class="inb boost-img" href="#"><img src="<?php echo $v['image']?>" alt=""></a>

                            <p class="boost-name ellipsis"><?php echo $v['name']?></p>

                            <p class="boost-time">时间：<?php echo date("Y-m-d",strtotime($v['time']))?></p>
                            <a class="inb boost-xq" href="#"><img src="/wap/images/b-2.png" alt="">详细介绍</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination b3-page"></div>
        </div>
    </div>

</section>
<section class="bg-1">
    <div class="boost-tit clearfix" style="background: #42c987">
        <div class="fl">
            <img class="boost-icon" src="/wap/images/icon-24.png" alt="">
            <span class="boost-tit-name">SUMMER SCHOOL</span>
        </div>
        <div class="fr"><img class="b-crrow" src="/wap/images/b-crrow.png" alt=""></div>
    </div>
    <div class="banner2-wrap">
        <div class="swiper-container-4 b1-wrap">
            <div class="swiper-wrapper mg-t1">
                <ul class="swiper-slide b1 clearfix">
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['fields' => 'id,image,name,time,synopsis','category' => "241",'limit'=>'0,2']);
                    foreach($data as $v) {
                        ?>
                        <li>
                            <a class="inb boost-img" href="#"><img src="<?php echo $v['image']?>" alt=""></a>

                            <p class="boost-name ellipsis"><?php echo $v['name']?></p>

                            <p class="boost-time">时间：<?php echo date("Y-m-d",strtotime($v['time']))?></p>
                            <a class="inb boost-xq" href="#"><img src="/wap/images/b-2.png" alt="">详细介绍</a>
                        </li>
                    <?php
                    }
?>
                </ul>
                <ul class="swiper-slide b1 clearfix">
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['fields' => 'id,image,name,time,synopsis','category' => "241",'limit'=>'2,2']);
                    foreach($data as $v) {
                        ?>
                        <li>
                            <a class="inb boost-img" href="#"><img src="<?php echo $v['image']?>" alt=""></a>

                            <p class="boost-name ellipsis"><?php echo $v['name']?></p>

                            <p class="boost-time">时间：<?php echo date("Y-m-d",strtotime($v['time']))?></p>
                            <a class="inb boost-xq" href="#"><img src="/wap/images/b-2.png" alt="">详细介绍</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination b4-page"></div>
        </div>
    </div>

</section>
<div class="bg-1 pd-1 sc-other" style="padding-bottom: 1rem">
    <a href="#"><img src="/wap/images/sc-3.png" alt=""></a>
    <a href="#"><img src="/wap/images/sc-4.png" alt=""></a>
    <a href="#"><img src="/wap/images/sc-5.png" alt=""></a>
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
    $(function () {
        mySwiper();
        function mySwiper(){
            var swiper = new Swiper('.swiper-container-2', {
                pagination: '.b2-page',
                slidesPerView: 1,
                slidesPerColumn: 1,
                observer:true,
                observeParents:true,
                autoplay:1000,
                autoplayDisableOnInteraction : false,
                paginationClickable: true,
                uniqueNavElements: true,
                spaceBetween: 30
            });
            var swiper = new Swiper('.swiper-container-3', {
                pagination: '.b3-page',
                slidesPerView: 1,
                slidesPerColumn: 1,
                observer:true,
                observeParents:true,
                autoplay:1000,
                autoplayDisableOnInteraction : false,
                paginationClickable: true,
                uniqueNavElements: true,
                spaceBetween: 30
            });
        }
        var swiper = new Swiper('.swiper-container-1', {
            pagination: '.b1-page',
            slidesPerView: 1,
            slidesPerColumn: 1,
            observer: true,
            observeParents: true,
            autoplay:1000,
            autoplayDisableOnInteraction : false,
            paginationClickable: true,
            uniqueNavElements: true,
            spaceBetween: 30
        });
        var swiper = new Swiper('.swiper-container-4', {
            pagination: '.b4-page',
            slidesPerView: 1,
            slidesPerColumn: 1,
            autoplay:1000,
            autoplayDisableOnInteraction : false,
            paginationClickable: true,
            uniqueNavElements: true,
            spaceBetween: 30
        });


        $(".b2-select span").on("click", function (even) {
            event.stopPropagation();
            mySwiper();
            var num = $(this).index();
            $(this).addClass("b2-current").siblings("span").removeClass("b2-current");
            $(".b2").eq(num).fadeIn().siblings(".b2").hide();
        });
        $(".b-crrow").on("click", function () {
            if ($(this).hasClass("onCheck")) {
                $(this).removeClass("onCheck");
                $(this).attr("src","/wap/images/b-crrow.png");
                $(this).parent().parent().parent().children(".banner2-wrap").slideDown();
            } else {
                $(this).addClass("onCheck");
                $(this).attr("src","/wap/images/b-crrow2.png");
                $(this).parent().parent().parent().children(".banner2-wrap").slideUp();
            }

        })
    })
</script>
</html>