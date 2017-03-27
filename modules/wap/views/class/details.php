
    <title>申友课堂</title>
    <link rel="stylesheet" href="/wap/css/reset.css" />
    <link rel="stylesheet" href="/wap/css/common.css" />
    <link rel="stylesheet" href="/wap/css/swiper-3.3.1.min.css" />
    <link rel="stylesheet" type="text/css" href="/wap/css/newCommon.css"/>
    <link rel="stylesheet" type="text/css" href="/wap/css/classDetail.css"/>
</head>
<body>
<!--内页头部-->
<header class="pd-0 details-top bc-175">
    <div class="header-2">
        <a class="tb tl" href="javascript:history.go(-1)"><img class="reBack" src="/wap/images/pratices-arrow-left.png" alt=""></a>
        <span class="tb header-tit tm">申友课堂</span>
        <span class="tr tb"></span>
    </div>
</header>
<!--内容区-->
<div class="class-content">
    <div class="class-top">
        <div class="class-title">
            <h3><?php echo $data[0]['name']?></h3>
            <ul class="dis-flex">
                <li>开课时间：<?php echo $data[0]['time']?></li>
                <li>时长：<?php echo $data[0]['score']?></li>
                <li>
                    <?php
                    if(!empty($data[0]['url'])) {
                        ?>
                        <img src="/wap/images/class-icon1.png"/>
                        <a href="/class/back/<?php echo $data[0]['id']?>.html">课程回放</a>
                    <?php
                    }
                    ?>
                </li>
            </ul>
        </div>
<!--    <img src="--><?php //echo Yii::$app->params['PC'].$data[0]['image']?><!--"/>-->
        <p class="class-details">
            <?php echo str_replace('src="/files','src="'.Yii::$app->params['PC'].'/files',$data[0]['synopsis']);?>
        </p>
    </div>
    <!--您可能感兴趣的-->
    <div class="interest">
        <div class="int-top dis-flex">
            <div>
                <img src="/wap/images/class-interest.png"/>
                <h3>您可能感兴趣的</h3>
            </div>
            <a href="/class.html">更多</a>
        </div>o
        <div class="int-content">
            <ul class="clearfix">
                <?php
                $inter = \app\modules\wap\models\Content::getContent(['order'=>'c.viewCount DESC','fields' => 'place,time,','category' => '107','limit' => "0,2",'where' => 'c.catId != 190']);
                foreach($inter as $v){
                ?>
                <li>
                    <a href="/class/details/<?php echo $v['id']?>.html"><img src="<?php echo Yii::$app->params['PC'].$v['image']?>"/></a>
                    <div class="int-love">
                        <div class="class-yy dis-flex">
                            <span><?php echo $v['name']?></span>
                            <div>
                                <img src="/wap/images/class-icon2.png"/>
                                <span><?php echo $v['place']?></span>
                            </div>
                        </div>
                        <p>
                            <?php echo $v['time']?>
                        </p>
                        <p class="class-bao dis-flex">
<!--                            <a href="#">报名</a>-->
                            <a href="/class/details/<?php echo $v['id']?>.html">详情</a>
                        </p>
                    </div>
                </li>
                <?php
                }
                ?>
            </ul>
            <ul class="clearfix">
                <?php
                $inter = \app\modules\wap\models\Content::getContent(['order'=>'c.viewCount DESC','fields' => 'place,time,','category' => '107','limit' => "2,2",'where' => 'c.catId != 190']);
                foreach($inter as $v){
                    ?>
                    <li>
                        <a href="/class/details/<?php echo $v['id']?>.html"><img src="<?php echo Yii::$app->params['PC'].$v['image']?>"/></a>
                        <div class="int-love">
                            <div class="class-yy dis-flex">
                                <span><?php echo $v['name']?></span>
                                <div>
                                    <img src="/wap/images/class-icon2.png"/>
                                    <span><?php echo $v['place']?></span>
                                </div>
                            </div>
                            <p>
                                <?php echo $v['time']?>
                            </p>
                            <p class="class-bao dis-flex">
                                <!--                            <a href="#">报名</a>-->
                                <a href="/class/details/<?php echo $v['id']?>.html">详情</a>
                            </p>
                        </div>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>

</div>
<div class="footer" style="height: 2rem; background: #080808;"></div>
</body>
<script type="text/javascript" src="/wap/js/jquery-1.12.2.min.js"></script>
<script src="/wap/js/swiper-3.3.1.jquery.min.js"></script>
</html>
