<!DOCTYPE html>
<html lang="en">
@include('index.head')
<body>

@include('index.header')

<div class="main-wrapper">
    <section class="cta-section theme-bg-light py-5">
        <div class="container text-center">
            <h2 class="heading">Shovain's Bolg</h2>
            <div class="intro">Welcome to my blog. I hope you are happy.</div>
            <form class="signup-form form-inline justify-content-center pt-3">
                <div class="form-group">
                    <label class="sr-only" for="search">Search</label>
                    <input type="text" id="search" name="search" class="form-control mr-md-1 semail" placeholder="Enter search">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div><!--//container-->
    </section>
    <section class="blog-list px-3 py-5 p-md-5">
        <div class="container">
            @foreach($data as $vo)
                <div class="item mb-5">
                    <div class="media">
                        @if( !empty($vo->article_img))
                            <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="{{$vo->article_img}}" alt="image">
                        @endif
                        <div class="media-body">
                            <h3 class="title mb-1"><a href="{{ route("article.info",["id"=>$vo->article_id ])  }}">{{$vo->article_name}}</a></h3>
                            <div class="meta mb-1"><span class="date">Published {{ getSortTime(time()-strtotime($vo->created_at)) }} </span><span class="time">ago {{ getSortTime(time()-strtotime($vo->now_read_time)) }} read</span><span class="comment"><a href="#">{{$vo["article_type"]["article_type_name"]}}</a></span></div>
                            <div class="intro">{{$vo->article_easy}}</div>
                            <a class="more-link" href="{{ route("article.info",["id"=>$vo->article_id ])  }}">Read more &rarr;</a>
                        </div><!--//media-body-->
                    </div><!--//media-->
                </div><!--//item-->
            @endforeach

            <nav class="blog-nav nav nav-justified my-5">
                @if($totalPage==1 || $totalPage==0)
                    @elseif($page==1)
                    <a class="nav-link-next nav-item nav-link rounded" href="?page={{$page+1}}&limit={{$limit}}">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
                    @elseif($totalPage==$page)
                    <a class="nav-link-prev nav-item nav-link  rounded" href="?page={{$page-1}}&limit={{$limit}}">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
                    @else
                    <a class="nav-link-prev nav-item nav-link rounded-left" href="?page={{$page-1}}&limit={{$limit}}">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
                    <a class="nav-link-next nav-item nav-link rounded-right" href="?page={{$page+1}}&limit={{$limit}}">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
                @endif

            </nav>

        </div>
    </section>
@include('index.footer')

</div><!--//main-wrapper-->




<!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->
<div id="config-panel" class="config-panel d-none d-lg-block">
    <div class="panel-inner">
        <a id="config-trigger" class="config-trigger config-panel-hide text-center" href="#"><i class="fas fa-cog fa-spin mx-auto" data-fa-transform="down-6" ></i></a>
        <h5 class="panel-title">Choose Colour</h5>
        <ul id="color-options" class="list-inline mb-0">
            <li class="theme-1 active list-inline-item"><a data-style="/css/theme-1.css" href="#"></a></li>
            <li class="theme-2  list-inline-item"><a data-style="/css/theme-2.css" href="#"></a></li>
            <li class="theme-3  list-inline-item"><a data-style="/css/theme-3.css" href="#"></a></li>
            <li class="theme-4  list-inline-item"><a data-style="/css/theme-4.css" href="#"></a></li>
            <li class="theme-5  list-inline-item"><a data-style="/css/theme-5.css" href="#"></a></li>
            <li class="theme-6  list-inline-item"><a data-style="/css/theme-6.css" href="#"></a></li>
            <li class="theme-7  list-inline-item"><a data-style="/css/theme-7.css" href="#"></a></li>
            <li class="theme-8  list-inline-item"><a data-style="/css/theme-8.css" href="#"></a></li>
        </ul>
        <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
    </div><!--//panel-inner-->
</div><!--//configure-panel-->





<script>
    // 如果高度不足一个屏幕的话让footer到最底部
    var nowh    =   $(window).height()
    var articleh    =  $(".blog-list").height()
    if((articleh-361) <nowh){
        $(".blog-list").height($(window).height()-361)
    }
    $(window).resize(function () {          //当浏览器大小变化时
        var nowh    =   $(window).height()
        var articleh    =  $(".blog-list").height()
        if((articleh-361) <nowh){
            $(".blog-list").height($(window).height()-361)
        }
    });
    $(".blog-list").resize(function () {          //当浏览器大小变化时 更改大小 有时会产生BUG  此监听器为处理此BUG
        var nowh    =   $(window).height()
        var articleh    =  $(".blog-list").height()
        if((articleh-361) <nowh){
            $(".blog-list").height($(window).height()-361)
        }
    });



</script>





</body>
</html>
