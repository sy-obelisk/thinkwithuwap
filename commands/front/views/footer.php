<div class="footer">
    <div class="footerFont">
        <ul>
            <li>
                <ol class="olTwo">
                    <li><a href="/USA.html">美&nbsp;&nbsp;&nbsp;&nbsp;国</a></li>
                    <li><a href="/UK.html">英&nbsp;&nbsp;&nbsp;&nbsp;国</a></li>
                    <li><a href="/HK.html">香&nbsp;&nbsp;&nbsp;&nbsp;港</a></li>
                    <li><a href="/AUS.html">澳&nbsp;&nbsp;&nbsp;&nbsp;洲</a></li>
                    <li><a href="/COUNTRY.html">其&nbsp;&nbsp;&nbsp;&nbsp;他</a></li>
                </ol>
            </li>
            <li>
                <ol class="olTwo twoDiff">
                    <li><a href="/public-class.html">GMAT课堂</a></li>
                    <li><a href="/gmatsheet.html">GMAT开班查询</a></li>
                    <li><a href="/public-class.html">托福公开课</a></li>
                    <li><a href="/toeflsheet.html ">托福开班查询</a></li>
                    <li><a href="/case.html">高分案例</a></li>
                </ol>
            </li>
            <li>
                <ol class="olThree threeML">
                    <li><a href="/Undergraduate.html">本科留学</a></li>
                    <li><a href="/Postgraduate.html">硕士留学</a></li>
                    <li><a href="/Doctor.html">博士留学</a></li>
                    <li><a href="/practices.html">游学服务</a></li>

                </ol>
            </li>
            <li>
                <ol class="olThree threeDiff">
                    <li>
                        <a href="/schools.html">院校搜索</a>
                        <a href="/study-aboard/assistance.html" class="mla">留学方案</a>
                    </li>
                    <li>
                        <a href="/problem.html">每日一题</a>
                        <a href="/public-class.html" class="mla">申友课堂</a>
                    </li>
                    <li>
                        <a href="/mentor.html">Mentor&nbsp;&nbsp;</a>
                        <a href="/practices.html" class="mla">实习资源</a>
                    </li>
                    <li>
                        <a href="/question.html">留学问答</a>
                        <a href="/evaluation.html" class="mla">留学评估</a>
                    </li>

                </ol>
            </li>
            <li>
                <ol class="olTwo">
                    <li><a href="/about-thinku.html">申友介绍</a></li>
                    <li><a href="/teachers/interviews.html">名师文档</a></li>
                    <li><a href="/about-thinku.html">行业资质</a></li>
                    <li><a href="/joinus.html">加入我们</a></li>
                    <li><a href="/contactus.html">联系我们</a></li>
                </ol>
            </li>
        </ul>
    </div>
    <div style="clear: both"></div>
    <div class="footerPhone">
        <b>400-600-1123</b>
        <ul>
            <li>
                 <div class="left-ewm">

                     <img src="/cn/images/index_erweima01.jpg" alt="申友GMAT"/>
                 </div>
                 <div class="right-font">
                     <span>申友GMAT</span>
                 </div>
            </li>
            <li>
                <div class="left-ewm">

                    <img src="/cn/images/index_erweima02.jpg" alt="申友留学"/>
                </div>
                <div class="right-font">
                    <span>申友留学</span>
                </div>
            </li>
            <li>
                <div class="left-ewm">

                    <img src="/cn/images/index_erweima03.png" alt="托福100"/>
                </div>
                <div class="right-font">
                    <span>托福100</span>
                </div>
            </li>
        </ul>
    </div>
    <div style="clear: both"></div>
</div>
<div class="smallFoot">
    <p>
        <b>友情链接：</b>
        <?php
        $data = \app\modules\cn\models\Content::getContent(['fields' =>'url', 'category' => '220']);
        foreach($data as $k => $v) {
            ?>
            <a href="<?php echo $v['url']?>" target="_blank"><?php echo $v['name']?> <?php echo ($k+1 != count($data))?'|':''?></a>
        <?php
        }
        ?>
    </p>
    <span>Copyright © 2015 All Right Reserved 申友教育 版权所有
        <a target="_blank" href="http://www.miitbeian.gov.cn/">京ICP备16000003号</a>
        <span>京公网安备 11010802018491</span>
        <a target="_blank" href="/cn/index/disclaimer">免责声明</a>
    </span>
</div>