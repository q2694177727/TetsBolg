
<!-- Javascript -->
<script src="/plugins/jquery-3.3.1.min.js"></script>
<script src="/plugins/popper.min.js"></script>
<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
<script src="/js/demo/style-switcher.js"></script>

<footer class="footer text-center py-2 theme-bg-dark">
    <small class="copyright">Designed with <i class="fas fa-heart"></i> by 3rdwavemedia for developers / More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></small>
</footer>

<script>
    // 如果高度不足一个屏幕的话让footer到最底部
    var nowh    =   $(window).height()
    var articleh    =  $("article").height()
    if((articleh-136) <nowh){
        $("article").height($(window).height()-136)
    }
    $(window).resize(function () {          //当浏览器大小变化时
        var nowh    =   $(window).height()
        var articleh    =  $("article").height()
        if((articleh-136) <nowh){
            $("article").height($(window).height()-136)
        }
    });
    $("article").resize(function () {          //当浏览器大小变化时 更改大小 有时会产生BUG  此监听器为处理此BUG
        var nowh    =   $(window).height()
        var articleh    =  $("article").height()
        if((articleh-136) <nowh){
            $("article").height($(window).height()-136)
        }
    });
    /*
    * 图片太大处理尺寸
    * */

    var imgnum  =   $("img").length
    var cw  =   $(".container").width()
    if(  imgnum>1){
        //查找图片
        for (i=2;i<imgnum;i++){
            nowimgw     =    $("img").eq(i-1).width()
            if(nowimgw>cw){
                $("img").eq(i-1).width(cw)
            }
        }
    }
    $(window).resize(function () {          //当浏览器大小变化时 更改大小 有时会产生BUG  此监听器为处理此BUG

        var imgnum  =   $("img").length
        var cw  =   $(".container").width()
        if(  imgnum>1){
            //查找图片
            for (i=2;i<imgnum;i++){
                nowimgw     =    $("img").eq(i-1).width()
                if(nowimgw>cw){
                    $("img").eq(i-1).width(cw)
                }
            }
        }
    });


</script>
