/**
 * Created by Administrator on 2016/9/6.
 */
(function (doc, win) {
    var docEl = doc.documentElement,
        resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
        recalc = function () {
            var clientWidth = docEl.clientWidth;
            if (!clientWidth) return;
            docEl.style.fontSize = 40 * (clientWidth / 750) + 'px';
            //console.log(40 * (clientWidth / 750))
        };

    if (!doc.addEventListener) return;
    win.addEventListener(resizeEvt, recalc, false);
    doc.addEventListener('DOMContentLoaded', recalc, false);
})(document, window);
//设置自适应圆形高度
window.onload=function(){
    var ct_he=$(".ct-head");
    var tc_im=$(".tc-img");
    if(ct_he){
        ct_he.css("height",ct_he.css("width"));
    }
    if(tc_im){
        tc_im.css("height",tc_im.css("width"));
    }
};