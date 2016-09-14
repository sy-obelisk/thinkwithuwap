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
    <title>最新资讯</title>
</head>
<body>
<!--内页头部-->
<header class=" pd-0 bg-1">
    <div class="header-2">
        <a class="tb tl" href="javascript:history.go(-1)"><img class="reBack" src="/wap/images/reBack.png" alt=""></a>
        <span class=" tb header-tit tm">最新资讯</span>
        <a class="tr tb" href="/menu.html">
            <img class="menu-icon" src="/wap/images/menu.png" alt="">
        </a>
    </div>
</header>
<!--内页头部 END-->
<!--banner-->
<div style="width: 100%;overflow: hidden">
    <div class="swiper-container-1 banner-wrap relative">
        <div class="swiper-wrapper">
            <div class="swiper-slide banner"><a href="#"><img src="/wap/images/n-1.png" alt=""></a></div>
            <div class="swiper-slide banner"><a href="#"><img src="/wap/images/n-1.png" alt=""></a></div>
            <div class="swiper-slide banner"><a href="#"><img src="/wap/images/n-1.png" alt=""></a></div>
        </div>
        <div class="n1-page swiper-pagination"></div>
    </div>
    <script language="javascript">
        var mySwiper = new Swiper('.swiper-container-1', {
            loop: false,
            pagination: '.n1-page',
        })
    </script>
</div>
<!--banner END-->
<div class="news-wrap bg-1 pd-0 mg-t1">
    <div class="news-select tm">
        <span class="inb" style="background: #FB4C53">
            <img class="n-select-img" src="/wap/images/n-2.png" alt="">
            <i class="inb ani triangle" style=" border-top:0.5rem solid #FB4C53;display: block;"></i>
        </span>
        <span class="inb" style="background: #4E7EF5">
            <img class="n-select-img" src="/wap/images/n-3.png" alt="">
             <i class="inb ani triangle" style=" border-top:0.5rem solid #4E7EF5;"></i>
        </span>
        <span class="inb" style="background:#6A67CD ">
            <img class="n-select-img" src="/wap/images/n-4.png" alt="">
             <i class="inb ani triangle" style=" border-top:0.5rem solid #6A67CD;"></i>
        </span>
    </div>
    <div data-value="178,118" class="n-wrap" style="padding-top: 0.3rem;display: block;">
        <ul class="topic-wrap bg-1 pd-1">
            <?php
            $data = \app\modules\wap\models\Content::getContent(['fields' => 'abstract','pageStr' => 1,'category' => "178,118",'pageSize' => 5]);
            $total = $data['total'];
            $count = $data['count'];
            unset($data['count']);
            unset($data['total']);
            unset($data['pageStr']);
            foreach($data as $k => $v) {
                ?>
                <li>
                    <h1 class="topic"><?php echo $v['name']?></h1>

                    <p class="ellipsis topic-de"><?php echo $v['abstract']?></p>

                    <p class="topic-time">时间：<?php echo $v['createTime']?></p>
                </li>
            <?php
            }
?>
        </ul>
        <div class="class-page tm">
            <a data-value="1" class="tl changePage" href="javascript:;">首页</a>
            <a data-value="0" class="changePage" href="javascript:;">上一页</a>
            <a class="tm" href="javascript:;">1/<?php echo $total?></a>
            <a data-value="2" class="tm changePage" href="javascript:;">下一页</a>
            <a data-value="<?php echo $total?>" class="total tr changePage" href="javascript:;">末页</a>
        </div>
    </div>
    <div data-value="177,118" class="n-wrap" style="padding-top: 0.3rem;">
        <ul class="topic-wrap bg-1 pd-1">
            <?php
            $data = \app\modules\wap\models\Content::getContent(['fields' => 'abstract','pageStr' => 1,'category' => "177,118",'pageSize' => 5]);
            $total = $data['total'];
            $count = $data['count'];
            unset($data['count']);
            unset($data['total']);
            unset($data['pageStr']);
            foreach($data as $k => $v) {
                ?>
                <li>
                    <h1 class="topic"><?php echo $v['name']?></h1>

                    <p class="ellipsis topic-de"><?php echo $v['abstract']?></p>

                    <p class="topic-time">时间：<?php echo $v['createTime']?></p>
                </li>
            <?php
            }
            ?>
        </ul>
        <div class="class-page tm">
            <a data-value="1" class="tl changePage" href="javascript:;">首页</a>
            <a data-value="0" class="changePage" href="javascript:;">上一页</a>
            <a class="tm" href="javascript:;">1/<?php echo $total?></a>
            <a data-value="2" class="tm changePage" href="javascript:;">下一页</a>
            <a data-value="<?php echo $total?>" class="total tr changePage" href="javascript:;">末页</a>
        </div>
    </div>
    <div data-value="105,118" class="n-wrap" style="padding-top: 0.3rem;">
        <ul class="topic-wrap bg-1 pd-1">
            <?php
            $data = \app\modules\wap\models\Content::getContent(['fields' => 'abstract','pageStr' => 1,'category' => "105,118",'pageSize' => 5]);
            $total = $data['total'];
            $count = $data['count'];
            unset($data['count']);
            unset($data['total']);
            unset($data['pageStr']);
            foreach($data as $k => $v) {
                ?>
                <li>
                    <h1 class="topic"><?php echo $v['name']?></h1>

                    <p class="ellipsis topic-de"><?php echo $v['abstract']?></p>

                    <p class="topic-time">时间：<?php echo $v['createTime']?></p>
                </li>
            <?php
            }
            ?>
        </ul>
        <div class="class-page tm">
            <a data-value="1" class="tl changePage" href="javascript:;">首页</a>
            <a data-value="0" class="changePage" href="javascript:;">上一页</a>
            <a class="tm" href="javascript:;">1/<?php echo $total?></a>
            <a data-value="2" class="tm changePage" href="javascript:;">下一页</a>
            <a data-value="<?php echo $total?>" class="total tr changePage" href="javascript:;">末页</a>
        </div>
    </div>
</div>
<!--footer-->
<?php use app\commands\front\FooterWidget;?>
<?php FooterWidget::begin();?>
<?php FooterWidget::end();?>
<!--footer End-->
</body>
<script>
    $(function () {
        $('.news-select span').on("click", function () {
            var num = $(this).index();
            $(".n-wrap").eq(num).fadeIn().siblings(".n-wrap").hide();
            $(this).siblings("span").children(".triangle").hide();
            $(this).children(".triangle").show();

        })

        $("body").on("click",".changePage",function(){
            var _this = this;
            var category = $(this).closest('.n-wrap').attr('data-value');
            var page = $(this).attr('data-value');
            var total = $(this).siblings('.total').attr('data-value');
            if(page <1){
                return false;
            }
            if(page > total){
                return false;
            }
            var pageSize = 6;
            $.post('/wap/api/change-content',{fields:'abstract',page:page,pageSize:pageSize,category:category},function(re){
                var dataStr = '<ul class="topic-wrap bg-1 pd-1">';
                for(i=0;i<re.data.length;i++){
                    dataStr += '<li>';
                    dataStr += '<h1 class="topic">'+re.data[i].name+'</h1>';

                    dataStr += '<p class="ellipsis topic-de">'+re.data[i].abstract+'</p>';

                    dataStr += '<p class="topic-time">时间：'+re.data[i].createTime+'</p>';
                    dataStr += '</li>';
                }
                dataStr +='</ul> <div class="class-page tm">';
                dataStr +=re.str;
                dataStr +='</div>';
                $(_this).closest('.n-wrap').html(dataStr);
            },'json')
        })
    })
</script>
</html>