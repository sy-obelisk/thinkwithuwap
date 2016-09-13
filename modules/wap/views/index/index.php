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
    <-- ================================================== -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <!-- 让360双核浏览器用webkit内核渲染页面
     <-- ================================================== -->
    <meta name="renderer" content="webkit">
    <!-- Mobile Specific Metas
     <-- ================================================== -->
    <!-- !!!注意 minimal-ui 是IOS7.1的新属性，最小化浏览器UI -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/wap/css/reset.css">
    <link rel="stylesheet" href="/wap/css/main.css">
    <link rel="stylesheet" href="/wap/css/swiper-3.3.1.min.css">
    <script src="/wap/js/jquery-1.12.2.min.js"></script>
    <script src="/wap/js/swiper-3.3.1.jquery.min.js"></script>
    <title>首页</title>
</head>
<body>
<!--header-->
<header class="bg-col-1 relative pd1 clearfix">
    <a class="inb logo" href="#"><img src="/wap/images/logo.png" alt=""></a>
    <div class="inb search-wrap">
        <img class="search-1" src="/wap/images/search.png" alt="">
        <form action="javascript:;" class="form-wrap">
            <input class="inb" type="search" placeholder="输入你想查询的内容">
        </form>
    </div>
    <a class="menu fr inb" href="menu.html">
        <img src="/wap/images/menu.png" alt="">
    </a>
    <div class="menu-wrap ani"></div>
</header>
<!--header END-->
<!--侧边栏-->
<div class="sidebar-wrap">

    <a href="http://looyuoms7731.looyu.com/chat/chat/p.do?_server=0&c=20001277&f=10057560&g=10060013&refer=meiguoliuxue" target="_blank"><img src="/wap/images/onLine.png" alt=""></a>
    <a href="tel:400-600-1123"><img src="/wap/images/tel-2.png" alt=""></a>
</div>
<!--侧边栏 End-->
<!--banner-->
<div class="relative" style="width: 100%;overflow: hidden;">
    <div class="swiper-container-1 banner-wrap">
        <div class="swiper-wrapper">
            <?php
            $data = \app\modules\cn\models\Content::getContent(['fields' => 'url','category' => "190,223",'pageSize' => 5]);
            foreach($data as $v) {
                ?>
                <div class="swiper-slide banner"><a href="#"><img src="/wap/images/banner-1.png" alt=""></a></div>
            <?php
            }
            ?>
        </div>
        <div class="baner-page swiper-pagination"></div>
    </div>
</div>
<!--banner END-->
<!--分类-->
<nav>
    <ul class="nav-list tm clearfix pd1">
        <li>
            <a href="consult.html">
                <div class="nav-icon">
                    <img src="/wap/images/icon-1.png" alt="">
                    <img class="hot ani" src="/wap/images/hot.png" alt="">
                </div>
            </a>
            <p class="nav-name">留学咨询</p>
        </li>
        <li>
            <a href="gmat-subjects.html">
                <div class="nav-icon">
                    <img src="/wap/images/icon-2.png" alt="">
                    <img class="hot ani" src="/wap/images/hot.png" alt="">
                </div>
            </a>
            <p class="nav-name">GMAT</p>
        </li>
        <li>
            <a href="toefl-sub.html">
                <div class="nav-icon">
                    <img src="/wap/images/icon-3.png" alt="">
                </div>
            </a>
            <p class="nav-name">托福</p>
        </li>
        <li>
            <a href="sy-class.html">
                <div class="nav-icon"><img src="/wap/images/icon-4.png" alt=""></div>
            </a>
            <p class="nav-name">申友课堂</p>
        </li>
        <li>
            <a href="school-search.html">
                <div class="nav-icon">
                    <img src="/wap/images/icon-5.png" alt="">
                    <img class="hot ani" src="/wap/images/hot.png" alt="">
                </div>
            </a>
            <p class="nav-name">院校搜索</p>
        </li>
        <li>
            <a href="bg-boost.html">
                <div class="nav-icon"><img src="/wap/images/icon-6.png" alt=""></div>
            </a>
            <p class="nav-name">背景提升</p>
        </li>
        <li>
            <a href="case-center.html">
                <div class="nav-icon"><img src="/wap/images/icon-7.png" alt=""></div>
            </a>
            <p class="nav-name">案例中心</p>
        </li>
        <li>
            <a href="teacher-gathered.html">
                <div class="nav-icon"><img src="/wap/images/icon-8.png" alt=""></div>
            </a>
            <p class="nav-name">名师云集</p>
        </li>
    </ul>
</nav>
<!--分类 END-->
<!--栏目-->
<div class="pd1 bg-col-1">
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
                <a href="content-1.html"><img src="/wap/images/cp-1.png" alt=""></a>
                <p class="must">必选项目</p>
            </div>
            <p class="cp-tit">A类卓越菁英</p>
            <p class="cp-describe">进入申请年 大三大四</p>
        </div>
        <div class="classify-wrap inb tm">
            <div class="cp-img">
                <a href="content-2.html"><img src="/wap/images/cp-2.png" alt=""></a>
                <p class="must">必选项目</p>
            </div>
            <p class="cp-tit">B类梦想起航</p>
            <p class="cp-describe">有一年以上升学准备时间</p>
        </div>
        <div class="classify-wrap inb tm">
            <div class="cp-img">
                <a href="content-3.html"><img src="/wap/images/cp-1.png" alt=""></a>
            </div>
            <p class="cp-tit">C类名校直通车</p>
            <p class="cp-describe">申请美英港热门名校</p>
        </div>
        <div class="classify-wrap inb tm">
            <div class="cp-img">
                <a href="content-4.html"><img src="/wap/images/cp-1.png" alt=""></a>
                <p class="must">精英申请者必选项目</p>
            </div>
            <p class="cp-tit">D类助力传奇</p>
            <p class="cp-describe">有强烈要求的Master/MBA/PHD</p>
        </div>
    </div>
    <div class="content">
        <ul class="other-list">
            <li class="">
                <a href="USA.html">
                    <div class="c2-icon inb"><img src="/wap/images/icon-9.png" alt=""></div>
                    <div class="inb">
                        <p class="other-tit">美国申请方案</p>
                        <p class="other-de color-1">Top30/50商学院申请计划</p>
                    </div>
                </a>
            </li>
            <li class="">
                <a href="gas-station.html">
                    <div class="c2-icon inb"><img src="/wap/images/icon-10.png" alt=""></div>
                    <div class="inb">
                        <p class="other-tit">单项加油站</p>
                        <p class="other-de color-2">定制个性化文书、网申、面试、签证等服务</p>
                    </div>
                </a>
            </li>
            <li class="">
                <a href="advantage.html">
                    <div class="c2-icon inb"><img src="/wap/images/icon-11.png" alt=""></div>
                    <div class="inb">
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
</section>
<section class="bg-col-2">
    <div class="pd1"><p class="col-name inb">GMAT培训</p></div>
    <div class="gmat-wrap pd2 clearfix">
        <div class="gmat-left fl" style="width: 40%">
            <a href="gmat-subjects.html#gmat-open"><img src="/wap/images/icon-12.png" alt=""></a>
        </div>
        <div class="gmat-right fr" style="width: 58%">
            <div class="r-top">
                <a href="gmat-week.html"><img src="/wap/images/icon-13.png" style="width: 48.5%" alt=""></a>
                <a href="gmat-summer.html"><img src="/wap/images/icon-14.png" style="width: 48.5%" alt=""></a>
            </div>
            <a href="gmat-vip.html"><img src="/wap/images/icon-15.png" alt=""></a>
        </div>
    </div>
    <div class="pd1"><p class="col-name inb">托福培训</p></div>
    <div class="train-wrap pd2 clearfix">
        <div class="fl train-text-wrap" style="background: #77A42E">
            <a href="toefl-sub.html#tf-open">
                <img src="/wap/images/search-2.png" style="width: 1.65rem" alt="">
                <div class="inb train-text">
                    <p class="train-tit">托福开班查询</p>
                    <p class="train-de">5大班型 超大课时量</p>
                </div>
            </a>
        </div>
        <div class="fr train-text-wrap" style="background: #FF9933">
            <img src="/wap/images/p1.png" style="width: 1.83rem" alt="">
            <div class="inb train-text">
                <p class="train-tit">托福 VIP</p>
                <p class="train-de">高效提升 高能冲刺</p>
            </div>
        </div>
    </div>
</section>
<!--内容 End-->
<!--广告-->
<div class="mg">
    <a href="tel:400-600-1123"><img src="/wap/images/tel.png" alt=""></a>
</div>
<!--广告 End-->
<!--案例库-->
<div class="pd1 bg-col-1">
    <p class="col-name inb">申友案例库</p>
    <div class="inb fr">
        <div class="icon inb">
            <a href="teacher-gathered.html">
                <img src="/wap/images/more-2.png" style="width: 0.6rem;" alt="">
                <span class=" r-name inb">名师团队</span>
            </a>
        </div>

    </div>
</div>
<section style="padding: 0 0.625rem;" class="mg bg-col-1">
    <div class="pd3">
        <div class="select-wrap s2 tl clearfix">
            <span class="inb current">留学案例</span>
            <span class="inb">GMAT案例</span>
            <span class="inb">托福案例</span>
        </div>
        <!--选项卡-->
        <div class="anli-wrap clearfix" style="display: block;">
            <div class="swiper-container-2 anli-banner">
                <div class="swiper-wrapper">
                    <div class="swiper-slide a-banner clearfix">
                        <div class="anli-show fl tm">
                            <div class="ali-img"><img src="/wap/images/c-2.png" alt=""></div>
                            <p class="anli-moj ellipsis-2 tl">1攻克数学，600到700的完美升华</p>
                            <div class="inb anli-mark">成绩：GMAT710</div>
                        </div>
                        <div class="anli-show fr tm">
                            <div class="ali-img"><img src="/wap/images/c-2.png" alt=""></div>
                            <p class="anli-moj ellipsis-2 tl">攻克数学，600到700的完美升华</p>
                            <div class="inb anli-mark">成绩：GMAT710</div>
                        </div>
                    </div>
                    <div class="swiper-slide a-banner clearfix">
                        <div class="anli-show fl tm">
                            <div class="ali-img"><img src="/wap/images/c-2.png" alt=""></div>
                            <p class="anli-moj ellipsis-2 tl">攻克数学，600到700的完美升华</p>
                            <div class="inb anli-mark">成绩：GMAT710</div>
                        </div>
                        <div class="anli-show fr tm">
                            <div class="ali-img"><img src="/wap/images/c-2.png" alt=""></div>
                            <p class="anli-moj ellipsis-2 tl">攻克数学，600到700的完美升华</p>
                            <div class="inb anli-mark">成绩：GMAT710</div>
                        </div>
                    </div>
                    <div class="swiper-slide a-banner clearfix">
                        <div class="anli-show fl tm">
                            <div class="ali-img"><img src="/wap/images/c-2.png" alt=""></div>
                            <p class="anli-moj ellipsis-2 tl">攻克数学，600到700的完美升华</p>
                            <div class="inb anli-mark">成绩：GMAT710</div>
                        </div>
                        <div class="anli-show fr tm">
                            <div class="ali-img"><img src="/wap/images/c-2.png" alt=""></div>
                            <p class="anli-moj ellipsis-2 tl">攻克数学，600到700的完美升华</p>
                            <div class="inb anli-mark">成绩：GMAT710</div>
                        </div>
                    </div>

                </div>
                <div class="anli-page-2 swiper-pagination"></div>
            </div>
        </div>
        <div class="anli-wrap clearfix">
            <div class="swiper-container-3 anli-banner">
                <div class="swiper-wrapper">
                    <div class="swiper-slide a-banner clearfix">
                        <div class="anli-show fl tm">
                            <div class="ali-img"><img src="/wap/images/c-2.png" alt=""></div>
                            <p class="anli-moj ellipsis-2 tl">2攻克数学，600到700的完美升华</p>
                            <div class="inb anli-mark">成绩：GMAT710</div>
                        </div>
                        <div class="anli-show fr tm">
                            <div class="ali-img"><img src="/wap/images/c-2.png" alt=""></div>
                            <p class="anli-moj ellipsis-2 tl">攻克数学，600到700的完美升华</p>
                            <div class="inb anli-mark">成绩：GMAT710</div>
                        </div>
                    </div>
                    <div class="swiper-slide a-banner clearfix">
                        <div class="anli-show fl tm">
                            <div class="ali-img"><img src="/wap/images/c-2.png" alt=""></div>
                            <p class="anli-moj ellipsis-2 tl">攻克数学，600到700的完美升华</p>
                            <div class="inb anli-mark">成绩：GMAT710</div>
                        </div>
                        <div class="anli-show fr tm">
                            <div class="ali-img"><img src="/wap/images/c-2.png" alt=""></div>
                            <p class="anli-moj ellipsis-2 tl">攻克数学，600到700的完美升华</p>
                            <div class="inb anli-mark">成绩：GMAT710</div>
                        </div>
                    </div>
                    <div class="swiper-slide a-banner clearfix">
                        <div class="anli-show fl tm">
                            <div class="ali-img"><img src="/wap/images/c-2.png" alt=""></div>
                            <p class="anli-moj ellipsis-2 tl">攻克数学，600到700的完美升华</p>
                            <div class="inb anli-mark">成绩：GMAT710</div>
                        </div>
                        <div class="anli-show fr tm">
                            <div class="ali-img"><img src="/wap/images/c-2.png" alt=""></div>
                            <p class="anli-moj ellipsis-2 tl">攻克数学，600到700的完美升华</p>
                            <div class="inb anli-mark">成绩：GMAT710</div>
                        </div>
                    </div>

                </div>
                <div class="anli-page-3 swiper-pagination"></div>
            </div>
        </div>
        <div class="anli-wrap clearfix">
            <div class="swiper-container-4 anli-banner">
                <div class="swiper-wrapper">
                    <div class="swiper-slide a-banner clearfix">
                        <div class="anli-show fl tm">
                            <div class="ali-img"><img src="/wap/images/c-2.png" alt=""></div>
                            <p class="anli-moj ellipsis-2 tl">3攻克数学，600到700的完美升华</p>
                            <div class="inb anli-mark">成绩：GMAT710</div>
                        </div>
                        <div class="anli-show fr tm">
                            <div class="ali-img"><img src="/wap/images/c-2.png" alt=""></div>
                            <p class="anli-moj ellipsis-2 tl">攻克数学，600到700的完美升华</p>
                            <div class="inb anli-mark">成绩：GMAT710</div>
                        </div>
                    </div>
                    <div class="swiper-slide a-banner clearfix">
                        <div class="anli-show fl tm">
                            <div class="ali-img"><img src="/wap/images/c-2.png" alt=""></div>
                            <p class="anli-moj ellipsis-2 tl">攻克数学，600到700的完美升华</p>
                            <div class="inb anli-mark">成绩：GMAT710</div>
                        </div>
                        <div class="anli-show fr tm">
                            <div class="ali-img"><img src="/wap/images/c-2.png" alt=""></div>
                            <p class="anli-moj ellipsis-2 tl">攻克数学，600到700的完美升华</p>
                            <div class="inb anli-mark">成绩：GMAT710</div>
                        </div>
                    </div>
                    <div class="swiper-slide a-banner clearfix">
                        <div class="anli-show fl tm">
                            <div class="ali-img"><img src="/wap/images/c-2.png" alt=""></div>
                            <p class="anli-moj ellipsis-2 tl">攻克数学，600到700的完美升华</p>
                            <div class="inb anli-mark">成绩：GMAT710</div>
                        </div>
                        <div class="anli-show fr tm">
                            <div class="ali-img"><img src="/wap/images/c-2.png" alt=""></div>
                            <p class="anli-moj ellipsis-2 tl">攻克数学，600到700的完美升华</p>
                            <div class="inb anli-mark">成绩：GMAT710</div>
                        </div>
                    </div>
                </div>
                <div class="anli-page-4 swiper-pagination"></div>
            </div>
        </div>

    </div>

    <!--End-->

</section>
<!--案例库 End-->
<!--最新资讯-->
<div class="pd1 bg-col-1">
    <p class="col-name inb">最新资讯</p>
    <div class="inb fr">
        <div class="icon inb">
            <a href="news.html"><span class=" r-name inb">全部 ></span></a>
        </div>

    </div>
</div>
<section class="pd2 mg bg-col-1">
    <div class="select-wrap s1">
        <span class="inb current">留学动态</span>
        <span class="inb">考试动态</span>
        <span class="inb">申友专题</span>
    </div>
    <!--选项卡-->
    <div class="info-select-wrap" style="display: block;">
        <div class="info-wrap">
            <div class="info-img inb"><img src="/wap/images/c-1.png" alt=""></div>
            <div class="info-text inb">
                <h1 class="info-tit">2016申友GMAT网络年会</h1>
                <p class="info-de ellipsis-2">内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容 内容内容内容内容内容内容内容内容内容</p>
                <p class="time">2016-05-06</p>
            </div>
        </div>
        <div class="info-wrap">
            <div class="info-img inb"><img src="/wap/images/c-1.png" alt=""></div>
            <div class="info-text inb">
                <h1 class="info-tit">2016申友GMAT网络年会</h1>
                <p class="info-de ellipsis-2">内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容 内容内容内容内容内容内容内容内容内容</p>
                <p class="time">2016-05-06</p>
            </div>
        </div>
        <div class="info-wrap">
            <div class="info-img inb"><img src="/wap/images/c-1.png" alt=""></div>
            <div class="info-text inb">
                <h1 class="info-tit">2016申友GMAT网络年会</h1>
                <p class="info-de ellipsis-2">内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容 内容内容内容内容内容内容内容内容内容</p>
                <p class="time">2016-05-06</p>
            </div>
        </div>
    </div>
    <div class="info-select-wrap">
        <div class="info-wrap">
            <div class="info-img inb"><img src="/wap/images/c-1.png" alt=""></div>
            <div class="info-text inb">
                <h1 class="info-tit">2016申友GMAT网络年会</h1>
                <p class="info-de ellipsis-2">内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容 内容内容内容内容内容内容内容内容内容</p>
                <p class="time">2016-05-06</p>
            </div>
        </div>
        <div class="info-wrap">
            <div class="info-img inb"><img src="/wap/images/c-1.png" alt=""></div>
            <div class="info-text inb">
                <h1 class="info-tit">2016申友GMAT网络年会</h1>
                <p class="info-de ellipsis-2">内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容 内容内容内容内容内容内容内容内容内容</p>
                <p class="time">2016-05-06</p>
            </div>
        </div>
        <div class="info-wrap">
            <div class="info-img inb"><img src="/wap/images/c-1.png" alt=""></div>
            <div class="info-text inb">
                <h1 class="info-tit">2016申友GMAT网络年会</h1>
                <p class="info-de ellipsis-2">内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容 内容内容内容内容内容内容内容内容内容</p>
                <p class="time">2016-05-06</p>
            </div>
        </div>
    </div>
    <div class="info-select-wrap">
        <div class="info-wrap">
            <div class="info-img inb"><img src="/wap/images/c-1.png" alt=""></div>
            <div class="info-text inb">
                <h1 class="info-tit">2016申友GMAT网络年会</h1>
                <p class="info-de ellipsis-2">内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容 内容内容内容内容内容内容内容内容内容</p>
                <p class="time">2016-05-06</p>
            </div>
        </div>
        <div class="info-wrap">
            <div class="info-img inb"><img src="/wap/images/c-1.png" alt=""></div>
            <div class="info-text inb">
                <h1 class="info-tit">2016申友GMAT网络年会</h1>
                <p class="info-de ellipsis-2">内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容 内容内容内容内容内容内容内容内容内容</p>
                <p class="time">2016-05-06</p>
            </div>
        </div>
        <div class="info-wrap">
            <div class="info-img inb"><img src="/wap/images/c-1.png" alt=""></div>
            <div class="info-text inb">
                <h1 class="info-tit">2016申友GMAT网络年会</h1>
                <p class="info-de ellipsis-2">内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容 内容内容内容内容内容内容内容内容内容</p>
                <p class="time">2016-05-06</p>
            </div>
        </div>
    </div>


</section>
<!--最新资讯 End-->
<!--版权-->
<div class="tm bg-col-1 pd1">
    <p class="ft-tit">申友教育 高端留学与GT培训品牌</p>
    <div><a class="pc-enter inb" href="#">电脑版入口</a></div>
    <p class="copyright">Copyrigth © 2016 All Right Reserved 申友教育 版权所</p>
</div>
<!--版权 End-->
<!--footer-->
<footer class="tm">
    <a class="inb f-list" href="index.html">
        <img src="/wap/images/icon-16.png" style="width: 1.15rem" alt="">
        <p class="ft-name">首页</p>
    </a>
    <img src="/wap/images/line.png" style="height: 1.35rem" alt="">
    <a class="inb f-list" href="tel:400-600-1123">
        <img src="/wap/images/icon-17.png" style="width: 1.15rem" alt="">
        <p class="ft-name">电话咨询</p>
    </a>
    <img src="/wap/images/line.png" style="height: 1.35rem" alt="">
    <a class="inb f-list" href="http://looyuoms7731.looyu.com/chat/chat/p.do?_server=0&c=20001277&f=10057560&g=10060013&refer=meiguoliuxue">
        <img src="/wap/images/icon-18.png" style="width: 1.15rem" alt="">
        <p class="ft-name">在线咨询</p>
    </a>
    <img src="/wap/images/line.png" style="height: 1.35rem" alt="">
    <a class="inb f-list" href="contact.html">
        <img src="/wap/images/icon-19.png" style="width: 1.15rem" alt="">
        <p class="ft-name">全国分支</p>
    </a>
</footer>
<!--footer End-->

</body>
<script>
    $(function () {
        var mySwiper = new Swiper('.swiper-container-1', {
            loop: true,
            observer: true,
            autoplay:1000,
            observeParents: true,
            paginationClickable: true,
            pagination: '.baner-page',
        });
        var mySwiper = new Swiper('.swiper-container-2', {
            loop: true,
            observer: true,
            autoplay:2000,
            observeParents: true,
            paginationClickable: true,
            pagination: '.anli-page-2',
        });
        var mySwiper = new Swiper('.swiper-container-3', {
            loop: true,
            observer: true,
            autoplay:2000,
            observeParents: true,
            paginationClickable: true,
            pagination: '.anli-page-3',
        });
        var mySwiper = new Swiper('.swiper-container-4', {
            loop: true,
            observer: true,
            autoplay:2000,
            observeParents: true,
            paginationClickable: true,
            pagination: '.anli-page-4',
        });

        $(".select-wrap span").on("click", function () {
            $(this).addClass("current").siblings("span").removeClass("current");
        });
        $(".s1 span").on("click", function () {
            var num = $(this).index();
            $(".info-select-wrap").eq(num).fadeIn().siblings(".info-select-wrap").hide();
        });
        $(".s2 span").on("click", function () {
            var num = $(this).index();
            $(".anli-wrap").eq(num).fadeIn().siblings(".anli-wrap").hide();
        })
    })
</script>
</html>