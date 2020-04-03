 * 新闻提交  新增或修改
     * */
    public function newsEdit(){
        if($this->request->isPost()){
            $data   =   input();
            if(isset($data['file'])){
                unset($data['file']);
            }
			if($data['auth_type']==0){
				$data['auth']=0;
				unset($data['auth_type']);
			}else{
				$data['auth']=implode(',',$data['auth']);
				unset($data['auth_type']);
			}
            if(isset($data['n_id'])){
                $res    =   db('news')->where('n_id',$data['n_id'])->update($data);
                if($res){
                    return Base::success("修改成功");
                }else{
                    return Base::error("修改失败");
                }
            }else{

       