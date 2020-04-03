           unset($data['file']);
            }
			if($data['auth_type']==0){
				$data['auth']=0;
				unset($data['auth_type']);
			}else{
				$data['auth']=implode(',',$data['auth']);
				unset($data['auth_type']);
			}
            if(isset($data['download_id'])){
                $res    =   \app\common\model\Download::update($data);
                if($res){
                    return Base::success("修改成功");
                }else{
                    return Base::error("修改失败");
                }
            }else{
                $res    =   \app\common\model\Download::create($data);
                if($res){
                    return Base::success("添加成功");
                }else{
                    return Base::error("添加失败");
                }
            }

        }
    }
    /*
     * 管理员角色权限列表
     * */
    public function roleList(){
        $data   =   json_decode($this->sitebase['tree'],true);
        $id     =   input('id');
        cookie('checks',null);
        cookie('check',null);
        if(empty($id)){
            //不存在ID 则将所有选中的取消 然后返回
            foreach ($data as $key => $val){
               unset($data[$key]['checked']);
                if(!empty($data[$key]['children'])){
                    //存在子栏目
                    foreach ($data[$key]['children'] as $k => $v){
                        unset($data[$key]['children'][$k]['checked']);
                    }
                }
            }
            $checks     =   '';
        }else{
            $datas    =   db('auth_group')->where('group_id',$id)->find();
            if(empty($datas)){
                return Base::error("参数错误!");
            }
            $tes        =   $datas['rules'];
            $role   =   explode(',',$tes);
            foreach ($data as $key => $val){
                if(in_array($data[$key]['id'],$role)){
                    $data[$key]['checked']=true;
                    $check[]   =   $data[$key]['id'];
                }else{
                    $data[$key]['checked']=false;
                }
                if(!empty($data[$key]['children'])){
                    //存在子栏目
                    foreach ($data[$key]['children'] as $k => $v){
                        unset( $data[$key]['children'][$k]['checked']);
                        if(in_array( $data[$key]['children'][$k]['id'],$role)){
                            $data[$key]['children'][$k]['checked']=true;
                            $check[]   =  $data[$key]['children'][$k]['id'];
                        }else{
                            $data[$key]['checked']=false;
                            $data[$key]['children'][$k]['checked']=false;
                        }
                    }
                }
                if(empty($check)){
                    $checks =   "";
                }else{
                    $checks     =   