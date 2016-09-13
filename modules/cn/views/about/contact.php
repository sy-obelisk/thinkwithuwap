
    <link rel="stylesheet" href="/cn/css/contactUs.css"/>

<!-----------------------------导航end------------------------------>


<div class="quesAcontent">
    <div class="contentLeft">
        <div class="contactContent">
            <div class="con-top">
             <span>全国免费咨询热线：400-600-1123<br>
             (公司全称：北京九州申友教育咨询有限公司)</span>
            </div>
            <div class="con-boc">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['fields' => "email,metroRoutes,busRoutes,landmark,phone,place",'category' => '210']);
                        foreach($data as $k => $v) {
                            ?>
                            <li>
                                <div class="con-leftImg">
                                    <img src="<?php echo $v['image']?>" alt="城市照片">
                                    <h4><?php echo $v['name']?>服务中心</h4>
                                </div>
                                <div class="con-rightC">
                         <ul>
<li><?php echo $v['phone']?"电话：".$v['phone']:''?></li>
<li><?php echo $v['email']?"邮箱：".$v['email']:''?></li>
<li><?php echo $v['place']?"地址：".$v['place']:''?></li>
<li><?php echo $v['landmark']?"周围地标：".$v['landmark']:''?></li>
<li><?php echo $v['busRoutes']?"公交路线：<pre>".$v['busRoutes'].'</pre>':''?>
</li>
                             <li><?php echo $v['metroRoutes']?"地铁路线：".$v['metroRoutes']:''?></li>


                         </ul>
                                </div>
                                <div style="clear: both"></div>
                            </li>
                        <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <?php use app\commands\front\RightWidget;?>
    <?php RightWidget::begin();?>
    <?php RightWidget::end();?>
    <div style="clear: both"></div>
</div>

