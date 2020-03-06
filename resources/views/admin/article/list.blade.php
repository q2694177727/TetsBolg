@section('content')
<div class="x-nav">

    <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="icon iconfont" style="line-height: 30px">&#xe6aa;</i></a>
</div>
<div class="x-body">
    <div class="layui-card-header">
        <button class="layui-btn" onclick="xadmin.open('添加','/shovain/article/adds')"><i class="layui-icon"></i>添加</button>
    </div>
    <table id="demo" lay-filter="test"></table>
</div>
<script type="text/html" id="switchTpl">
    <bottom class="layui-btn" onclick="xadmin.open('查看','{{ url("/shovain/article/info")}}?id=@{{d.article_id}}')" >查看</bottom>
</script>
<script>
    layui.use('table', function(){
        var table = layui.table;

        //第一个实例
        table.render({
            elem: '#demo'
            ,height: 550
            ,limits:[10,30,60,90,99999]
            ,url: '/api/article/list' //数据接口
            ,method:"GET"
            ,page: true //开启分页
            ,cols: [[ //表头
                {field:'article_name', width:240, title: '文章标题'},
                {field:'created_at', width: 200, title: '创建时间'},
                {field:'article_type_id', width: 200, title: '文章类型'},
                {field:'article_easy', minWidth: 200, title: '文章简介'},
                {width:280,templet: '#switchTpl',title:'操作'}
            ]]
        });

    });


</script>
@endsection
@include('admin.common.head')
