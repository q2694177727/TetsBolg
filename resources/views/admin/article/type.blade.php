@section('content')
    <div class="x-nav">
        <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
            <i class="icon iconfont" style="line-height: 30px">&#xe6aa;</i></a>
    </div>
    <div class="x-body">
        <div class="layui-card-header">
            <button class="layui-btn" onclick="xadmin.open('添加','/shovain/article/typeadds')"><i class="layui-icon"></i>添加</button>
        </div>
        <table id="demo" lay-filter="test"></table>
    </div>
    <script type="text/html" id="switchTpl">
        <bottom class="layui-btn" onclick="xadmin.open('查看','{{ url("/shovain/article/typeinfo")}}?id=@{{d.article_type_id}}')" >查看</bottom>
        <bottom class="layui-btn layui-btn-danger" onclick="delType('@{{d.article_type_id}}')" >删除</bottom>
    </script>
    <script>
        layui.use('table', function(){
            var table = layui.table;

            //第一个实例
            table.render({
                elem: '#demo'
                ,height: 550
                ,limits:[10,30,60,90,99999]
                ,url: '/api/article/type' //数据接口
                ,method:"GET"
                ,page: true //开启分页
                ,cols: [[ //表头
                    {field:'article_type_name', width: 200, title: '文章类型'},
                    {width:280,templet: '#switchTpl',title:'操作'}
                ]]
            });

        });
        function delType(id){
            layer.confirm('确定要删除吗?', {
                btn: ['确定','点错了'] //按钮
            }, function(){
                $.ajax({
                    type: 'POST',
                    url: '/api/article/delArticleType',
                    data: {"article_type_id":id},
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    success: function(data){
                        if(data.code==1){
                            layer.alert(data.msg, {
                                    icon: 6,
                                    time:1500
                                },
                                function() {
                                    // 可以对父窗口进行刷新
                                    window.location.reload();
                                });
                        }else{
                            layer.msg(data.msg)
                        }
                    },
                    error: function(xhr, type){
                        alert('Ajax error!')
                    }
                });
            }, function(){
            });



        }

    </script>
@endsection
@include('admin.common.head')
