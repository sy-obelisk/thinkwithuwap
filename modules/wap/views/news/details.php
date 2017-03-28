    <title>动态</title>
    <link rel="stylesheet" href="/wap/css/reset.css" />
    <link rel="stylesheet" href="/wap/css/common.css" />
    <link rel="stylesheet" href="/wap/css/swiper-3.3.1.min.css" />
    <link rel="stylesheet" type="text/css" href="/wap/css/newCommon.css"/>
    <link rel="stylesheet" href="/wap/css/successDetail.css" />
</head>
<body>
<header class="pd-0 details-top bc-175">
    <div class="header-2">
        <a class="tb tl" href="javascript:history.go(-1)"><img class="reBack" src="/wap/images/pratices-arrow-left.png" alt=""></a>
        <span class="tb header-tit tm">动态</span>
        <span class="tr tb"></span>
    </div>
</header>
<!--文章-->
<div class="success-text">
    <div class="text-top">
        <div class="text-title">
            <h2><?php echo $data[0]['name']?></h2>
            <ul class="clearfix dis-flex">
                <li>阅读次数：<span><?php echo $data[0]['viewCount']?></span></li>
                <li>时间：<span><?php echo $data[0]['createTime']?></span></li>
                <li>来源：<span>申友教育</span></li>
            </ul>
        </div>
    </div>
    <div class="text-content">
        <p class="text-1"> <?php echo $data[0]['abstract']?></p>
        <?php echo $data[0]['description']?>
    </div>
    <div class="text-next clearfix">
        <?php if(count($next)>0) { ?>
            <a href="/news/details/<?php echo $next[0]['id']?>.html">下一篇：<span><?php echo $next[0]['name']?></span></a>
        <?php
        }
        ?>
        <?php if(count($prev)>0) { ?>
            <a href="/news/details/<?php echo $prev[0]['id']?>.html">上一篇：<span><?php echo $prev[0]['name']?></span></a>
        <?php
        }
        ?>
    </div>
</div>
<!--文章结束-->
<!--相关阅读-->
<div class="success-about">
    <div class="title">
        <img src="/wap/images/success-about.jpg"/>
        <h3>相关阅读</h3>
    </div>
    <ul>
        <?php
            foreach($correlation as $v) {
                ?>
                <li class="border"><a href="/news/details/<?php echo $v['id']?>.html"><?php echo $v['name']?></a></li>
            <?php
            }
        ?>
    </ul>
</div>
<!--相关阅读结束-->
<!--留学评估-->
<?php use app\commands\front\BottomWidget;?>
<?php BottomWidget::begin();?>
<?php BottomWidget::end();?>
<!--底部栏-->
<div class="footer"></div>
</body>
    <script type="text/javascript" src="/wap/js/jquery-1.12.2.min.js"></script>
    <script src="/wap/js/swiper-3.3.1.jquery.min.js"></script>
</html>
