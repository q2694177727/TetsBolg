
@section('content')
    <div class="layui-fluid">
        <div class="layui-row">
            <form class="layui-form">
                @csrf

                <input type="hidden" name="article_type_id" value="{{$info->article_type_id}}">
                <div class="layui-form-item">
                    <label for="article_name" class="layui-form-label">
                        文章类型</label>
                    <div class="layui-input-block">
                        <input type="text" id="article_type_name" name="article_type_name" required="" lay-verify="required" value="{{$info->article_type_name}}" autocomplete="off" class="layui-input"></div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label"></label>
                    <button class="layui-btn" lay-filter="add" lay-submit="">确定</button>
                </div>
            </form>
        </div>
    </div>
    <script>layui.use(['form', 'layer','jquery'],
            function() {
                $ = layui.jquery;
                var form = layui.form,
                    layer = layui.layer;

                //自定义验证规则
                form.verify({
                    nikename: function(value) {
                        if (value.length < 5) {
                            return '昵称至少得5个字符啊';
                        }
                    },
                    pass: [/(.+){6,12}$/, '密码必须6到12位'],
                    repass: function(value) {
                        if ($('#L_pass').val() != $('#L_repass').val()) {
                            return '两次密码不一致';
                        }
                    }
                });

                //监听提交
                form.on('submit(add)',
                    function(data) {
                        console.log(data.field);
                        $.ajax({
                            type: 'POST',
                            url: '/api/article/editArticleType',
                            data: data.field,
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
                                            //关闭当前frame
                                            xadmin.close();

                                            // 可以对父窗口进行刷新
                                            xadmin.father_reload();
                                        });
                                }else{
                                    layer.msg(data.msg)
                                }
                            },
                            error: function(xhr, type){
                                alert('Ajax error!')
                            }
                        });


                        return false;
                    });

            });</script>



@endsection

@include('admin.common.head')