<!DOCTYPE html>
<html lang="en">
@include('index.head')
<body>

<header class="header text-center">
    <h1 class="blog-name pt-lg-4 mb-0"><a href="index.html">Shovain's  Blog</a></h1>

    <nav class="navbar navbar-expand-lg navbar-dark" >

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navigation" class="collapse navbar-collapse flex-column" >
            <div class="profile-section pt-3 pt-lg-0">
                <img class="profile-image mb-3 rounded-circle mx-auto" src="/images/profile.png" alt="image" >

                <div class="bio mb-3">仅记录个人心得<br><a href="about.html">关于更多</a></div><!--//bio-->
                <ul class="social-list list-inline py-3 mx-auto">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
                </ul><!--//social-list-->
                <hr>
            </div><!--//profile-section-->

            <ul class="navbar-nav flex-column text-left">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html"><i class="fas fa-home fa-fw mr-2"></i>Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog-post.html"><i class="fas fa-bookmark fa-fw mr-2"></i>Blog Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html"><i class="fas fa-user fa-fw mr-2"></i>About Me</a>
                </li>
            </ul>

            <div class="my-2 my-md-3">
                <a class="btn btn-primary" href="/" target="_blank">Get in Touch</a>
            </div>
        </div>
    </nav>
</header>

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
                            <div class="meta mb-1"><span class="date">Published 2 days ago</span><span class="time">5 min read</span><span class="comment"><a href="#">{{$vo->article_type_name}}</a></span></div>
                            <div class="intro">{{$vo->article_easy}}</div>
                            <a class="more-link" href="{{ route("article.info",["id"=>$vo->article_id ])  }}">Read more &rarr;</a>
                        </div><!--//media-body-->
                    </div><!--//media-->
                </div><!--//item-->
            @endforeach

            <nav class="blog-nav nav nav-justified my-5">
                <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
                <a class="nav-link-next nav-item nav-link rounded" href="blog-list.html">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
            </nav>

        </div>
    </section>

    <footer class="footer text-center py-2 theme-bg-dark">

        <small class="copyright">Designed with <i class="fas fa-heart"></i> by 3rdwavemedia for developers / More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></small>

    </footer>

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



<!-- Javascript -->
<script src="/plugins/jquery-3.3.1.min.js"></script>
<script src="/plugins/popper.min.js"></script>
<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
<script src="/js/demo/style-switcher.js"></script>






@include('index.footer')
</body>
</html>
