
@section('content')
    <div class="layui-fluid">
        <div class="layui-row">
            <form class="layui-form">
                @csrf

                <input type="hidden" name="article_id" value="{{$info->article_id}}">
                <div class="layui-form-item">
                    <label for="article_name" class="layui-form-label">
                       文章标题</label>
                    <div class="layui-input-block">
                        <input type="text" id="article_name" name="article_name" required="" lay-verify="required" value="{{$info->article_name}}" autocomplete="off" class="layui-input"></div>
                </div>

                <div class="layui-form-item layui-form-text">
                    <label class="layui-form-label">文章简介</label>
                    <div class="layui-input-block">
                        <textarea name="article_easy" placeholder="请输入内容" class="layui-textarea">{{$info->article_easy}}</textarea>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">文章类型</label>
                    <div class="layui-input-inline" style="position: relative;z-index: 10000;">
                        <select name="article_type_id" lay-verify="required">
                            @foreach ($article_type as $key=>$val)
                                @if($val->article_type_id == $info->article_type_id)
                                    <option value="{{$val->article_type_id}}" selected>{{$val->article_type_name}}</option>
                                @else
                                    <option value="{{$val->article_type_id}}">{{$val->article_type_name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
                <script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
                <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
                <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
                <script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>
                <div class="layui-form-item layui-form-text">
                    <label class="layui-form-label">文章简介</label>
                    <div class="layui-input-block">
                    <script id="editor" name="article_content" type="text/plain" style="width:1024px;height:500px;">@php echo $info->article_content @endphp</script>
                        </div>
                </div>

                    <script type="text/javascript">

                    //实例化编辑器
                    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
                    var ue = UE.getEditor('editor');

                    </script>


                    <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label"></label>
                    <button class="layui-btn" lay-filter="add" lay-submit="">确定</button></div>
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
                            url: '/api/article/editArticle',
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