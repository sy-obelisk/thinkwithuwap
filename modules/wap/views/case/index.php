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
    <meta name="keywords" content="留学学习经验,留学学习心得,gmat高分经验,留学备考经验,gmat高分学员备考经验">
    <meta name="description" content="申友教育为您提供留学成功申请案例,高分学子案例,高分心得,申请技巧,备考经验等学员信息,更多信息欢迎来电咨询。">
    <meta name="title" content="留学成功案例_留学经验分享-申友教育">
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
    <title>留学成功案例_留学经验分享-申友教育</title>
</head>
<body>
<!--内页头部-->
<header class=" pd-0 bg-1">
    <div class="header-2">
        <a class="tb tl" href="javascript:history.go(-1)"><img class="reBack" src="/wap/images/reBack.png" alt=""></a>
        <span class=" tb header-tit tm">案例中心</span>
        <a class="tr tb" href="/menu.html">
            <img class="menu-icon" src="/wap/images/menu.png" alt="">
        </a>
    </div>
</header>
<!--内页头部 END-->
<div class="case-wrap">
    <div class="pd-1"><img src="/wap/images/sub-tit.png" alt=""></div>
    <ul class="ct-user-list tm clearfix mg-t1">
        <?php
        $data = \app\modules\wap\models\Content::getContent(['pageStr' => 1,'fields' => 'score,abroadSchool','category' => "178,102",'pageSize'=>9]);
        $total = $data['total'];
        $count = $data['count'];
        unset($data['count']);
        unset($data['total']);
        unset($data['pageStr']);
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
</div>
<div class="bg-1 pd-0">
    <div class="case-select">
        <span class="case-current">全部</span>
        <span>GMAT案例</span>
        <span>托福案例</span>
    </div>
    <div data-value="list1" class="class-list-wrap list1" style="display: block">
        <ul class="class-list">
            <?php
            $data = \app\modules\wap\models\Content::getContent(['pageStr' => 1,'fields' => 'score','category' => "102",'extend_category' => "115,116",'pageSize'=>4]);
            $total = $data['total'];
            $count = $data['count'];
            unset($data['count']);
            unset($data['total']);
            unset($data['pageStr']);
            foreach($data as $v) {
                ?>
                <li>
                    <div class="class-img fl">
                        <a href="#"><img src="<?php echo Yii::$app->params['PC'].$v['image']?>" alt=""></a>
                    </div>
                    <div class="class-info fr">
                        <h1 class="class-tit"><?php echo $v['title']?></h1>
                        <a class="inb case-btn" href="#">成绩：<?php echo $v['score']?></a>
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
    <div data-value="list2" class="class-list-wrap list2">
        <ul class="class-list">
            <?php
            $data = \app\modules\wap\models\Content::getContent(['pageStr' => 1,'fields' => 'score','category' => "102,115",'pageSize'=>4]);
            $total = $data['total'];
            $count = $data['count'];
            unset($data['count']);
            unset($data['total']);
            unset($data['pageStr']);
            foreach($data as $v) {
                ?>
                <li>
                    <div class="class-img fl">
                        <a href="#"><img src="<?php echo Yii::$app->params['PC'].$v['image']?>" alt=""></a>
                    </div>
                    <div class="class-info fr">
                        <h1 class="class-tit"><?php echo $v['title']?></h1>
                        <a class="inb case-btn" href="#">成绩：<?php echo $v['score']?></a>
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
    <div data-value="list3" class="class-list-wrap list3">
        <ul class="class-list">
        <?php
        $data = \app\modules\wap\models\Content::getContent(['pageStr' => 1,'fields' => 'score','category' => "102,116",'pageSize'=>4]);
        $total = $data['total'];
        $count = $data['count'];
        unset($data['count']);
        unset($data['total']);
        unset($data['pageStr']);
        foreach($data as $v) {
            ?>
            <li>
                <div class="class-img fl">
                    <a href="#"><img src="<?php echo Yii::$app->params['PC'].$v['image']?>" alt=""></a>
                </div>
                <div class="class-info fr">
                    <h1 class="class-tit"><?php echo $v['title']?></h1>
                    <a class="inb case-btn" href="#">成绩：<?php echo $v['score']?></a>
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
        $('.case-select span').on("click", function () {
            var num = $(this).index();
            $(this).addClass("case-current").siblings("span").removeClass("case-current");
            $(".class-list-wrap").eq(num).fadeIn().siblings(".class-list-wrap").hide();
        })

        //感言分页
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
            var pageSize = 4;
            $.post('/wap/api/change-content',{fields:'score',page:page,pageSize:pageSize,list:list},function(re){
                var dataStr = '<ul class="class-list">';
                for(i=0;i<re.data.length;i++){
                    dataStr += '<li>';
                    dataStr += '<div class="class-img fl">';
                    dataStr+='<a href="#"><img src="<?php echo Yii::$app->params['PC']?>'+re.data[i].image+'" alt=""></a>';
                    dataStr+='</div>';
                    dataStr +='<div class="class-info fr">';
                    dataStr +='<h1 class="class-tit">'+re.data[i].title+'</h1>';
                    dataStr +='<a class="inb case-btn" href="#">成绩：'+re.data[i].score+'</a>';
                    dataStr +='</div>';
                    dataStr +='</li>';
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