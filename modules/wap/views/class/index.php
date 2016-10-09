
    <!-- Basic Page Needs
     ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="申友公开课,申友在线课程,申友开课信息,申友排课,申友课表,申友GMAT">
    <meta name="description" content="申友教育为您提供申友公开课的开课时间,申友公开课的课程安排,申友公开课报名方式等课程信息,欢迎来电咨询。">
    <meta name="title" content="申友在线课堂-申友教育">
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
    <title>申友在线课堂-申友教育</title>
</head>
<body>
<!--内页头部-->
<header class=" pd-0 bg-1">
    <div class="header-2">
        <a class="tb tl" href="javascript:history.go(-1)"><img class="reBack" src="/wap/images/reBack.png" alt=""></a>
        <span class=" tb header-tit tm">申友课堂</span>
        <a class="tr tb" href="menu.html">
            <img class="menu-icon" src="/wap/images/menu.png" alt="">
        </a>
    </div>
</header>
<!--内页头部 END-->
<div><img src="/wap/images/sy-1.png" alt=""></div>
<div class="mg-t1 class-wrap bg-1">
    <div class="class-select-wrap">
        <span class=" class-current inb">全部公开课</span>
        <span class="inb">留学</span>
        <span class="inb">GMAT</span>
        <span class="inb">托福</span>
    </div>
    <div data-value="list4" class="class-list-wrap" style="display: block">
        <ul class="class-list">
            <?php
            $data = \app\modules\wap\models\Content::getContent(['pageStr' => 1,'fields' => 'url,place,time', 'category' => '107', 'category_extend' =>"178,115,116",'pageSize' => 6]);
            $total = $data['total'];
            $count = $data['count'];
            unset($data['count']);
            unset($data['total']);
            unset($data['pageStr']);
            foreach ($data as $v) {
                ?>
                <li>
                    <div class="class-img fl">
                        <a href="#"><img src="<?php echo Yii::$app->params['PC'].$v['image']?>" alt=""></a>
                    </div>
                    <div class="class-info fr">
                        <h1 class="class-tit ellipsis"><?php echo $v['name']?></h1>

                        <p class="class-time">时间：<?php echo $v['time']?></p>
                        <a class="inb class-btn" href="#">查看详情</a>
                    </div>
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
    <div data-value="list5" class="class-list-wrap">
        <ul class="class-list">
            <?php
            $data = \app\modules\wap\models\Content::getContent(['pageStr' => 1,'fields' => 'url,place,time', 'category' => '107,178','pageSize' => 6]);
            $total = $data['total'];
            $count = $data['count'];
            unset($data['count']);
            unset($data['total']);
            unset($data['pageStr']);
            foreach ($data as $v) {
                ?>
                <li>
                    <div class="class-img fl">
                        <a href="#"><img src="<?php echo Yii::$app->params['PC'].$v['image']?>" alt=""></a>
                    </div>
                    <div class="class-info fr">
                        <h1 class="class-tit ellipsis"><?php echo $v['name']?></h1>

                        <p class="class-time">时间：<?php echo $v['time']?></p>
                        <a class="inb class-btn" href="#">查看详情</a>
                    </div>
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
    <div data-value="list6" class="class-list-wrap">
        <ul class="class-list">
            <?php
            $data = \app\modules\wap\models\Content::getContent(['pageStr' => 1,'fields' => 'url,place,time', 'category' => '107,115','pageSize' => 6]);
            $total = $data['total'];
            $count = $data['count'];
            unset($data['count']);
            unset($data['total']);
            unset($data['pageStr']);
            foreach ($data as $v) {
                ?>
                <li>
                    <div class="class-img fl">
                        <a href="#"><img src="<?php echo Yii::$app->params['PC'].$v['image']?>" alt=""></a>
                    </div>
                    <div class="class-info fr">
                        <h1 class="class-tit ellipsis"><?php echo $v['name']?></h1>

                        <p class="class-time">时间：<?php echo $v['time']?></p>
                        <a class="inb class-btn" href="#">查看详情</a>
                    </div>
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
    <div data-value="list7" class="class-list-wrap">
        <ul class="class-list">
            <?php
            $data = \app\modules\wap\models\Content::getContent(['pageStr' => 1,'fields' => 'url,place,time', 'category' => '107,116','pageSize' => 6]);
            $total = $data['total'];
            $count = $data['count'];
            unset($data['count']);
            unset($data['total']);
            unset($data['pageStr']);
            foreach ($data as $v) {
                ?>
                <li>
                    <div class="class-img fl">
                        <a href="#"><img src="<?php echo Yii::$app->params['PC'].$v['image']?>" alt=""></a>
                    </div>
                    <div class="class-info fr">
                        <h1 class="class-tit ellipsis"><?php echo $v['name']?></h1>

                        <p class="class-time">时间：<?php echo $v['time']?></p>
                        <a class="inb class-btn" href="#">查看详情</a>
                    </div>
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
<div class="pd1 mg-t1 bg-col-1" style="padding-bottom: 0">
    <p class="col-name inb">留学产品</p>
</div>
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
</section>
<div class="class-link bg-1 clearfix">
    <a class="inb" href="/GMAT.html">
        <img src="/wap/images/sy-3.png" alt="">
    </a>
    <a class="inb" href="/TOEFL.html">
        <img src="/wap/images/sy-4.png" alt="">
    </a>
</div>
<!--footer-->
<?php use app\commands\front\FooterWidget;?>
<?php FooterWidget::begin();?>
<?php FooterWidget::end();?>
<!--footer End-->
</body>
<script>
    $(function () {
        $('.class-select-wrap span').on("click", function () {
            var num = $(this).index();
            $(this).addClass("class-current").siblings("span").removeClass("class-current");
            $(".class-list-wrap").eq(num).fadeIn().siblings(".class-list-wrap").hide();
        })

        $("body").on("click",".changePage",function(){
            var _this = this;
            var list = $(this).closest('.class-list-wrap').attr('data-value');
            var page = $(this).attr('data-value');
            var total = $(this).siblings('.total').attr('data-value');
            if(page <1){
                return false;
            }
            if(page > total){
                return false;
            }
            var pageSize = 6;
            $.post('/wap/api/change-content',{fields:'url,place,time',page:page,pageSize:pageSize,list:list},function(re){
                var dataStr = '<ul class="class-list">';
                for(i=0;i<re.data.length;i++){
                    dataStr += '<li>';
                    dataStr += '<div class="class-img fl">';
                    dataStr += '<a href="#"><img src="<?php echo Yii::$app->params['PC']?>'+re.data[i].image+'" alt=""></a>';
                    dataStr += '</div>';
                    dataStr += '<div class="class-info fr">';
                    dataStr += '<h1 class="class-tit ellipsis">'+re.data[i].name+'</h1>';

                    dataStr += '<p class="class-time">时间：'+re.data[i].time+'</p>';
                    dataStr += '<a class="inb class-btn" href="#">查看详情</a>';
                    dataStr += '</div>';
                    dataStr += '</li>';
                }
                dataStr +='</ul> <div class="class-page tm">';
                dataStr +=re.str;
                dataStr +='</div>';
                $(_this).closest('.class-list-wrap').html(dataStr);
            },'json')
        })
    })
</script>
</html>