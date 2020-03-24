<!DOCTYPE html>
<html class="x-admin-sm">
<head>
    <meta charset="UTF-8">
    <title>Admin for Shovain</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <link rel="stylesheet" href="/css/font.css">
    <link rel="stylesheet" href="/css/xadmin.css">
    <script src="/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/js/xadmin.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="layui-fluid">
    <div class="layui-row layui-col-space15">
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-body ">
                    <blockquote class="layui-elem-quote">欢迎管理员：
                        <span class="x-red">{{$user->name}}</span>！当前时间:{{date("Y-m-d H:i:s",time())}}
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-header">数据统计</div>
                <div class="layui-card-body ">
                    <ul class="layui-row layui-col-space10 layui-this x-admin-carousel x-admin-backlog">
                        <li class="layui-col-md2 layui-col-xs6">
                            <a href="javascript:;" class="x-admin-backlog-body">
                                <h3>文章数</h3>
                                <p>
                                    <cite>{{ App\Models\Article::count() }}</cite></p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-header">系统信息</div>
                <div class="layui-card-body ">
                    <table class="layui-table">
                        <tbody>
                        <tr>
                            <th>后台版本</th>
                            <td>1.0.1</td></tr>
                        <tr>
                            <th>服务器地址</th>
                            <td>{{$_SERVER["HTTP_HOST"]}}</td></tr>
                        <tr>
                            <th>操作系统</th>
                            <td>{{$_SERVER["OS"]}}</td></tr>
                        <tr>
                            <th>运行环境</th>
                            <td>{{$_SERVER["SERVER_SOFTWARE"]}}</td></tr>
                        <tr>
                            <th>PHP版本</th>
                            <td>{{PHP_VERSION}}</td></tr>
                        <tr>
                            <th>PHP运行方式</th>
                            <td>{{$_SERVER["GATEWAY_INTERFACE"]}}</td></tr>
                        <tr>
                            <th>MYSQL版本</th>
                            <td>{{\Illuminate\Support\Facades\DB::select("select VERSION() as version")[0]->version }}</td></tr>
                        <tr>
                            <th>Laravel版本</th>
                            <td>{{ \Illuminate\Foundation\Application::VERSION }}</td></tr>
                        <tr>
                            <th>上传附件限制</th>
                            <td>{{ini_get("upload_max_filesize")}}</td></tr>
                        <tr>
                            <th>执行时间限制</th>
                            <td>{{ini_get("max_execution_time")}}s</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-header">开发团队</div>
                <div class="layui-card-body ">
                    <table class="layui-table">
                        <tbody>
                        <tr>
                            <th>版权所有</th>
                            <td>shovain
                                <a >访问官网</a></td>
                        </tr>
                        <tr>
                            <th>开发者</th>
                            <td>shovain(2694177727@qq.com)</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <style id="welcome_style"></style>
        <div class="layui-col-md12">
            <blockquote class="layui-elem-quote layui-quote-nm">感谢layui,百度Echarts,jquery,本系统由x-admin提供技术支持。</blockquote></div>
    </div>
</div>
</div>
</body>
</html>