<!DOCTYPE html>
<html lang="en">
@include('index.head')
<body>

@include('index.header')
<div class="main-wrapper">

    <article class="blog-post px-3 py-5 p-md-5">
        <div class="container">
            <header class="blog-post-header">
                <h2 class="title mb-2">{{$data->article_name}}</h2>
                <div class="meta mb-3"><span class="date">Published {{ getSortTime(time()-strtotime($data->created_at)) }} </span><span class="time">ago {{ getSortTime(time()-strtotime($data->now_read_time)) }} read</span><span class="comment"><a href="#">{{$data->article_type_name}}</a></span></div>
            </header>

            <div class="blog-post-body">
                @php
                echo $data->article_content;
                @endphp

            </div>

            <nav class="blog-nav nav nav-justified my-5">
                @if($previous==null)
                    <a class="nav-link-next nav-item nav-link rounded-right" href="/article/{{$next}}">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
                @elseif($next==null)
                    <a class="nav-link-prev nav-item nav-link rounded-left" href="/article/{{$previous}}">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
                @else
                    <a class="nav-link-prev nav-item nav-link rounded-left" href="/article/{{$previous}}">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
                    <a class="nav-link-next nav-item nav-link rounded-right" href="/article/{{$next}}">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
                @endif

            </nav>
        </div><!--//container-->
    </article>



    @include('index.footer')

</div><!--//main-wrapper-->


<!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->
<div id="config-panel" class="config-panel d-none d-lg-block">
    <div class="panel-inner">
        <a id="config-trigger" class="config-trigger config-panel-hide text-center" href="#"><i class="fas fa-cog fa-spin mx-auto" data-fa-transform="down-6" ></i></a>
        <h5 class="panel-title">Choose Colour</h5>
        <ul id="color-options" class="list-inline mb-0">
            <li class="theme-1 active list-inline-item"><a data-style="assets/css/theme-1.css" href="#"></a></li>
            <li class="theme-2  list-inline-item"><a data-style="assets/css/theme-2.css" href="#"></a></li>
            <li class="theme-3  list-inline-item"><a data-style="assets/css/theme-3.css" href="#"></a></li>
            <li class="theme-4  list-inline-item"><a data-style="assets/css/theme-4.css" href="#"></a></li>
            <li class="theme-5  list-inline-item"><a data-style="assets/css/theme-5.css" href="#"></a></li>
            <li class="theme-6  list-inline-item"><a data-style="assets/css/theme-6.css" href="#"></a></li>
            <li class="theme-7  list-inline-item"><a data-style="assets/css/theme-7.css" href="#"></a></li>
            <li class="theme-8  list-inline-item"><a data-style="assets/css/theme-8.css" href="#"></a></li>
        </ul>
        <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
    </div><!--//panel-inner-->
</div><!--//configure-panel-->



<!-- Javascript -->
<script src="/plugins/jquery-3.3.1.min.js"></script>
<script src="/plugins/popper.min.js"></script>
<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Page Specific JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/highlight.min.js"></script>

<!-- Custom JS -->
<script src="/js/blog.js"></script>

<!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
<script src="/js/demo/style-switcher.js"></script>






</body>
</html>
