
    <title>名师云集</title>
    <link rel="stylesheet" href="/wap/css/reset.css" />
    <link rel="stylesheet" href="/wap/css/common.css" />
    <link rel="stylesheet" href="/wap/css/swiper-3.3.1.min.css" />
    <link rel="stylesheet" type="text/css" href="/wap/css/newCommon.css"/>
    <link rel="stylesheet" href="/wap/css/teacherDetail.css" />
</head>
<body>
<header class="pd-0 details-top bc-175">
    <div class="header-2">
        <a class="tb tl" href="javascript:history.go(-1)"><img class="reBack" src="/wap/images/pratices-arrow-left.png" alt=""></a>
        <span class="tb header-tit tm">名师云集</span>
        <span class="tr tb"></span>
    </div>
</header>
<!--老师介绍-->
<div class="tea-content">
    <div class="teacher-top clearfix font-5">
        <img src="<?php echo Yii::$app->params['PC'].$data['image']?>" alt="" />
        <ul>
            <li>
                姓名：<span><?php echo $data['name']?></span>
            </li>
            <li>
                职位：<span><?php echo $data['job']?></span>
            </li>
            <li>
                <img src="/wap/images/teacher-liao.png"/>
                <a href="http://p.qiao.baidu.com/im/index?siteid=9946474&ucid=3827656&cp=&cr=&cw=">和老师聊聊</a>
            </li>
        </ul>
    </div>
    <div class="teacher-intro font-5">
        <?php echo $data['description']?>
    </div>
<!--    <div class="teacher-assess font-5">-->
<!--        <h4>代表案例：</h4>-->
<!--        <p>武汉理工大学 电子信息 USC南加州大学录取</p>-->
<!--        <p>武汉理工大学 电子信息 USC南加州大学录取</p>-->
<!--        <p>武汉理工大学 电子信息 USC南加州大学录取</p>-->
<!--        <p>武汉理工大学 电子信息 USC南加州大学录取</p>-->
<!--    </div>-->
<!--    <div class="teacher-address font-5">-->
<!--        <h4>联系方式:</h4>-->
<!--        <p>地址：<span>武汉市珞喻路889号融众国际1201室</span></p>-->
<!--        <p>QQ：<span>521475486</span></p>-->
<!--    </div>-->
</div>
<!--名师云集-->
<div class="teacher-all">
    <div class="tea-all-top">
        <div class="top-left">
            <img src="/wap/images/teacher-icon2.png"/>
            <h3>名师云集</h3>
        </div>
        <a href="#">更多</a>
    </div>
    <div class="swiper-container swi-pdbotton">
        <div class="swiper-wrapper">
            <?php
            $data = \app\modules\wap\models\Content::getContent(['fields' => 'abstract,job','category' => "140",'pageSize'=>8]);
            for($i=0;$i<4;$i++){
                ?>
                <ul class="swiper-slide clearfix">
                    <li>
                        <img src="<?php echo Yii::$app->params['PC'].$data[$i*2]['image']?>"/>

                        <div>
                            <p>姓名：<span><?php echo $data[$i*2]['name']?></span></p>

                            <p>职位：<span><?php echo $data[$i*2]['job']?></span></p>

                            <p class="clearfix"><a href="#" class="fr">在线咨询</a></p>
                        </div>
                    </li>
                    <li>
                        <img src="<?php echo Yii::$app->params['PC'].$data[$i*2+1]['image']?>"/>
                        <div>
	                        <p>姓名：<span><?php echo $data[$i*2+1]['name']?></span></p>
	
	                        <p>职位：<span><?php echo $data[$i*2+1]['job']?></span></p>
	
	                        <p class="clearfix"><a href="#" class="fr">在线咨询</a></p>
                        </div>
                    </li>
                </ul>
            <?php

            }
            ?>
        </div>
        <div class="swiper-pagination item-page"></div>
    </div>
</div>
<!--footer-->
<?php use app\commands\front\FooterWidget;?>
<?php FooterWidget::begin();?>
<?php FooterWidget::end();?>
<!--footer End-->
</body>
<script type="text/javascript" src="/wap/js/jquery-1.12.2.min.js"></script>
<script src="/wap/js/swiper-3.3.1.jquery.min.js"></script>
<script src="/wap/js/common.js"></script>
<script type="text/javascript">
    $(function(){
        mySwiper();
        function mySwiper(){
            var swiper = new Swiper('.swiper-container', {
                pagination: '.b2-page',
                slidesPerView: 1,
                slidesPerColumn: 1,
                observer:true,
                observeParents:true,
                autoplay:2000,
                autoplayDisableOnInteraction : false,
                paginationClickable: true,
                pagination : '.swiper-pagination',
                uniqueNavElements: true,
                spaceBetween: 30
            });
        }
    })
</script>
</html>
