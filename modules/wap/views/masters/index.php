
    <!-- Basic Page Needs
     ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="gmat名师,托福名师,留学顾问,海外mentor,雷哥gmat,申友团队">
    <meta name="description" content="申友教育拥有国内专业的留学服务团队,团队顾问精通其申请方向内的细节工作任务,比其他留学顾问更有效,更精准地定位申请,大大提高成功率。">
    <meta name="title" content="gmat名师_托福名师_留学顾问-申友教育">
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
    <title>gmat名师_托福名师_留学顾问-申友教育</title>
</head>
<body>
<!--内页头部-->
<header class=" pd-0 bg-1">
    <div class="header-2">
        <a class="tb tl" href="javascript:history.go(-1)"><img class="reBack" src="/wap/images/reBack.png" alt=""></a>
        <span class=" tb header-tit tm">名师云集</span>
        <a class="tr tb" href="/menu.html">
            <img class="menu-icon" src="/wap/images/menu.png" alt="">
        </a>
    </div>
</header>
<!--内页头部 END-->
<div class="tm tc-select pd-0">
    <span class="inb tc-current">留学顾问</span>
    <span class="inb">GMAT名师</span>
    <span class="inb">托福名师</span>
    <span class="inb">Mentor</span>
</div>
<div class="bg-1 pd-0">
    <div class="tc-wrap" data-value="140" style="display: block">
        <ul class="tc-list">
            <?php
            $data = \app\modules\wap\models\Content::getContent(['pageStr' => 1,'fields' => 'abstract,job','category' => "140",'pageSize'=>6]);
            $total = $data['total'];
            $count = $data['count'];
            unset($data['count']);
            unset($data['total']);
            unset($data['pageStr']);
            foreach($data as $v) {
                ?>
                <li>
                    <div class="tc-img inb">
                        <a href="/teachers/<?php echo $v['id']?>.html"><img src="<?php echo Yii::$app->params['PC'].$v['image']?>" alt=""></a>
                    </div>
                    <div class="tc-info inb clearfix">
                        <div class="tc-info-top">
                            <div class="inb">
                                <p class="tc-cm"><?php echo $v['name']?></p>

                                <p class="tc-em"><?php echo $v['title']?></p>
                            </div>
                            <div class="inb tc-lev fr"><?php echo $v['job']?></div>
                        </div>
                        <div class="tc-de clearfix">
                            <span class="ellipsis-2 inb tc-de-text"><?php echo $v['abstract']?></span>
                        </div>
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
    <div class="tc-wrap" data-value="139">
        <ul class="tc-list">
            <?php
            $data = \app\modules\wap\models\Content::getContent(['pageStr' => 1,'fields' => 'abstract,job','category' => "139",'pageSize'=>6]);
            $total = $data['total'];
            $count = $data['count'];
            unset($data['count']);
            unset($data['total']);
            unset($data['pageStr']);
            foreach($data as $v) {
                ?>
                <li>
                    <div class="tc-img inb">
                        <a href="/teachers/<?php echo $v['id']?>.html"><img src="<?php echo Yii::$app->params['PC'].$v['image']?>" alt=""></a>
                    </div>
                    <div class="tc-info inb clearfix">
                        <div class="tc-info-top">
                            <div class="inb">
                                <p class="tc-cm"><?php echo $v['name']?></p>

                                <p class="tc-em"><?php echo $v['title']?></p>
                            </div>
                            <div class="inb tc-lev fr"><?php echo $v['job']?></div>
                        </div>
                        <div class="tc-de clearfix">
                            <span class="ellipsis-2 inb tc-de-text"><?php echo $v['abstract']?></span>
                        </div>
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
    <div class="tc-wrap" data-value="141">
        <ul class="tc-list">
            <?php
            $data = \app\modules\wap\models\Content::getContent(['pageStr' => 1,'fields' => 'abstract,job','category' => "141",'pageSize'=>6]);
            $total = $data['total'];
            $count = $data['count'];
            unset($data['count']);
            unset($data['total']);
            unset($data['pageStr']);
            foreach($data as $v) {
                ?>
                <li>
                    <div class="tc-img inb">
                        <a href="/teachers/<?php echo $v['id']?>.html"><img src="<?php echo Yii::$app->params['PC'].$v['image']?>" alt=""></a>
                    </div>
                    <div class="tc-info inb clearfix">
                        <div class="tc-info-top">
                            <div class="inb">
                                <p class="tc-cm"><?php echo $v['name']?></p>

                                <p class="tc-em"><?php echo $v['title']?></p>
                            </div>
                            <div class="inb tc-lev fr"><?php echo $v['job']?></div>
                        </div>
                        <div class="tc-de clearfix">
                            <span class="ellipsis-2 inb tc-de-text"><?php echo $v['abstract']?></span>
                        </div>
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
    <div class="tc-wrap" data-value="246">
        <ul class="tc-list">
            <?php
            $data = \app\modules\wap\models\Content::getContent(['pageStr' => 1,'fields' => 'abstract,job','category' => "246",'pageSize'=>6]);
            $total = $data['total'];
            $count = $data['count'];
            unset($data['count']);
            unset($data['total']);
            unset($data['pageStr']);
            foreach($data as $v) {
                ?>
                <li>
                    <div class="tc-img inb">
                        <a href="/teachers/<?php echo $v['id']?>.html"><img src="<?php echo Yii::$app->params['PC'].$v['image']?>" alt=""></a>
                    </div>
                    <div class="tc-info inb clearfix">
                        <div class="tc-info-top">
                            <div class="inb">
                                <p class="tc-cm"><?php echo $v['name']?></p>

                                <p class="tc-em"><?php echo $v['title']?></p>
                            </div>
                            <div class="inb tc-lev fr"><?php echo $v['job']?></div>
                        </div>
                        <div class="tc-de clearfix">
                            <span class="ellipsis-2 inb tc-de-text"><?php echo $v['abstract']?></span>
                        </div>
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
<!--footer-->
<?php use app\commands\front\FooterWidget;?>
<?php FooterWidget::begin();?>
<?php FooterWidget::end();?>
<!--footer End-->
</body>
<script>
    $(function () {
        $('.tc-select span').on("click", function () {
            var num = $(this).index();
            $(this).addClass("tc-current").siblings("span").removeClass("tc-current");
            $(".tc-wrap").eq(num).fadeIn().siblings(".tc-wrap").hide();
        })

        //感言分页
        $("body").on("click",".changePage",function(){
            var _this = this;
            var category = $(this).closest('.tc-wrap').attr('data-value');
            var page = $(this).attr('data-value');
            var total = $(this).siblings('.total').attr('data-value');
            if(page <1){
                return false;
            }
            if(page > total){
                return false;
            }
            var pageSize = 6;
            $.post('/wap/api/change-content',{fields:'abstract,job',page:page,pageSize:pageSize,category:category},function(re){
                var dataStr = '<ul class="tc-list">';
                for(i=0;i<re.data.length;i++){
                    dataStr += '<li>';
                    dataStr += '<div class="tc-img inb">';
                    dataStr += '<a href="/teachers/'+re.data[i].id+'.html"><img src="<?php echo Yii::$app->params['PC']?>'+re.data[i].image+'" alt=""></a>';
                    dataStr += '</div>';
                    dataStr += '<div class="tc-info inb clearfix">';
                    dataStr += '<div class="tc-info-top">';
                    dataStr += '<div class="inb">';
                    dataStr += '<p class="tc-cm">'+re.data[i].name+'</p>';

                    dataStr += '<p class="tc-em">'+re.data[i].title+'</p>';
                    dataStr += '</div>';
                    dataStr += '<div class="inb tc-lev fr">'+re.data[i].job+'</div>';
                    dataStr += '</div>';
                    dataStr += '<div class="tc-de clearfix">';
                    dataStr += '<span class="ellipsis-2 inb tc-de-text">'+re.data[i].abstract+'</span>';
                    dataStr += '</div>';
                    dataStr += '</div>';
                    dataStr += '</li>';
                }
                dataStr +='</ul> <div class="class-page tm">';
                dataStr +=re.str;
                dataStr +='</div>';
                $(_this).closest('.tc-wrap').html(dataStr);
            },'json')
        })
    })
</script>
</html>