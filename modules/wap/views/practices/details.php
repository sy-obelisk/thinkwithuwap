    <title>背景提升详情页</title>
    <link rel="stylesheet" href="/wap/css/reset.css" />
    <link rel="stylesheet" href="/wap/css/common.css" />
    <link rel="stylesheet" href="/wap/css/swiper-3.3.1.min.css" />
    <link rel="stylesheet" href="/wap/css/practicesDetail.css" />
</head>
<body>
<!--内页头部-->
<header class="pd-0 details-top bc-175">
    <div class="header-2">
        <a class="tb tl" href="javascript:history.go(-1)"><img class="reBack" src="/wap/images/pratices-arrow-left.png" alt=""></a>
        <span class="tb header-tit tm">背景提升</span>
        <span class="tr tb"></span>
    </div>
</header>
<!--文章开始-->
<div class="details-text pd-10">
    <h2><?php echo $details[0]['name']?></h2>
    <ul>
        <li>浏览次数：<span><?php echo $details[0]['viewCount']?></span></li>
        <li>日期：<span><?php echo $details[0]['time']?></span></li>
    </ul>
    <?php echo str_replace('src="/files','src="'.Yii::$app->params['PC'].'/files',$details[0]['synopsis']);?>
</div>
<!--文章结束-->
<!--推荐项目开始-->
<div class="details-item">
    <div class="top1 bc-175 dis-flex">
        <div class="top1-left">
            <img src="/wap/images/pratices-detail-hand.png" alt="" />
            <h3>推荐项目</h3>
        </div>
    </div>
    <div class="swiper-container item-con">
        <div class="swiper-wrapper">
            <?php
                for($i=0;$i<2;$i++) {
                    ?>
                    <ul class="swiper-slide">
                        <li>
                            <a href="/practices/<?php echo $hot[$i*3]['id']?>.html"><img src="<?php echo Yii::$app->params['PC'].$hot[$i*3]['image']?>" alt=""/></a>
                            <h4><?php echo $hot[$i*3]['name']?></h4>

                            <p>时间：<span><?php echo $hot[$i*3]['time']?></span></p>
                            <a href="/practices/<?php echo $hot[$i*3]['id']?>.html">查看详情</a>
                        </li>
                        <li>
                            <a href="/practices/<?php echo $hot[$i*3+1]['id']?>.html"><img src="<?php echo Yii::$app->params['PC'].$hot[$i*3+1]['image']?>" alt=""/></a>
                            <h4><?php echo $hot[$i*3+1]['name']?></h4>

                            <p>时间：<span><?php echo $hot[$i*3+1]['time']?></span></p>
                            <a href="/practices/<?php echo $hot[$i*3+1]['id']?>.html">查看详情</a>
                        </li>
                        <li>
                            <a href="/practices/<?php echo $hot[$i*3+2]['id']?>.html"><img src="<?php echo Yii::$app->params['PC'].$hot[$i*3+2]['image']?>" alt=""/></a>
                            <h4><?php echo $hot[$i*3+2]['name']?></h4>

                            <p>时间：<span><?php echo $hot[$i*3+2]['time']?></span></p>
                            <a href="/practices/<?php echo $hot[$i*3+2]['id']?>.html">查看详情</a>
                        </li>
                    </ul>
                <?php
                }
            ?>
        </div>
        <div class="swiper-pagination item-page"></div>
    </div>
</div>
<!--推荐项目结束-->
<!--立即报名开始-->
<div class="details-apply">
    <div class="top1 bc-175 dis-flex">
        <div class="top1-left">
            <img src="/wap/images/pratices-detail-hand.png" alt="" />
            <h3>立即报名</h3>
        </div>
    </div>
    <div class="apply-write">
        <div class="apply-write-bg clearfix">
            <ul class="write-lf fl">
                <li>名额有限</li>
                <li>先抢先得</li>
            </ul>
            <div class="write-rg fr">
                <ul>
                    <li>

                        <label for="username">姓名：</label>
                        <input type="text" class="app-int" id="username"/>
                        <i>*&nbsp;</i>
                    </li>
                    <li>
                        <label for="tel">电话：</label>
                        <input type="text" class="app-int" id="tel"/>
                        <i>*&nbsp;</i>
                    </li>
                    <li>
                        <label for="age">年龄：</label>
                        <input type="text" class="app-int" id="age"/>
                    </li>
                    <li>
                        <label for="country">所在城市：</label>
                        <input type="text" class="app-int" id="city"/>
                    </li>
                    <li>
                        <label for=country"">游学意向国家：</label>
                        <input type="text" class="app-int" id="country"/>
                    </li>
                    <li style="position: relative;">
                        <label for="sex">性别：</label>
                        <select name="sex" class="inf-select" id="sex">
                            <option value="男">男</option>
                            <option value="女">女</option>
                        </select>
                        <span class="sanjiao"></span>
                    </li>
                    <li style="position: relative;">
                        <label for="stage">身份：</label>
                        <select name="stage" class="inf-select" id="stage">
                            <option value="在职">在职</option>
                            <option value="学生">学生</option>
                            <option value="其他">其他</option>
                        </select>
                        <span class="sanjiao"></span>
                    </li>
                </ul>
                <h2 id="submit">点击提交</h2>
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="/wap/js/jquery-1.12.2.min.js"></script>
<script src="/wap/js/swiper-3.3.1.jquery.min.js"></script>
<script>
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
        };
        function apply(){
            var name = $('#username').val();
            var tel = $('#tel').val();
            var age = $('#age').val();
            var sex = $('#sex').val();
            var city = $('#city').val();
            var stage = $('#stage').val();
            var country = $('#country').val();
            var extend = new Array();
            if (name == "") {
                alert("请输入姓名");
                return false;
            }
            if (tel == ""){
                alert("请输入电话");
                return false;
            }
//            if (country = "") {
//                alert("请输入国家");
//            }
            extend.push(age);
            extend.push(city);
            extend.push(country);
            extend.push(sex);
            extend.push(stage);
            $.post('http://www.thinkwithu.com/cn/api/wap-practice',
                {
                    name:name,
                    phone:tel,
                    extendVal:extend
                },function(rel){
                    alert(rel.message);
                    window.location.reload();
                },"json")
        };
        function kong(){
            $('.app-int').val("");
        }
        $('#submit').click(function(){
            apply();
            kong();
        })
    })

</script>
</html>
