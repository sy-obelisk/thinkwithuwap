<div class="success-assess">
    <div class="title">
        <img src="/wap/images/success-assess.jpg"/>
        <h3>留学评估</h3>
    </div>
    <div class="assess-write">
        <p>
            <span>提前规划，免费评估</span><br />
            <span>让你的留学快人一步</span>
        </p>
        <ul>
            <li><input type="text" id="username" placeholder="姓名"/></li>
            <li><input type="text" id="tel" placeholder="电话"/></li>
            <li><input type="text" id="email" placeholder="邮箱"/></li>
            <li><input type="text" id="country" placeholder="意向国家"/></li>
            <li><input type="text" id="classes" placeholder="目标课程"/></li>
            <li><button onclick="assess()">立即预约</button></li>
        </ul>
    </div>
</div>
<script type="text/javascript">
    function assess(){
        var name = $('#username').val(),
            tel = $('#tel').val(),
            email = $('#email').val(),
            country = $('#country').val(),
            classess = $('#classes').val();
        var   extend = new Array();
        if (name == "") {
            alert("请输入姓名");
            return false;
        }
        if (tel == ""){
            alert('请输入电话');
            return false
        }
        if(email == ""){
            alert('请输入邮箱');
            return false
        }
        extend.push(email);
        if (country == ""){
            alert('请输入意向国家');
            return false
        }
        extend.push(country);
        if (classess == "") {
            alert('请输入目标课程');
            return false
        }
        extend.push(classess);
        console.log(extend);
        $.post('http://www.thinkwithu.com/cn/api/wap-assess',
            {
                name:name,
                phone:tel,
                extendVal:extend
            },function(rel){
                alert(rel.message);
                window.location.reload()
            },"json")
    }
</script>