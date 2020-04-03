<?php
namespace app\soxun\controller;
/*
 * 所有后台用到的API都在这
 *
 * POST接口 首字母大写
 * GET接口  首字母小写
 * */

use app\common\controller\Base;
use app\common\model\DownloadType;
use think\App;
use think\facade\Request;
use app\common\model\Admin;
class Api extends Common{
    /*
     * 登录验证
     * */
    public function  Login(){
        //先查找数据库里是否存在,如不存在则再走系统最高权限人
        $data   =   input("post.");
        $login  =   db("admin")->where("a_name",$data['username'])->find();
        if(!empty($login)){
            //存在用户
            if(Admin::en_pass($data['password'])==$login['a_password']){
                //存在且密码正确
                cookie('admin',$data['username']);
                cookie('role',1);
                cookie("basemsg","登录成功");
                return $this->base::success("登录成功!");
            }
        }
        //未登录成功或未存在账号的
        if($data['username']==$this->sitebase['admin']['user']){
            if($data['password']==$this->sitebase['admin']['pass']){
                cookie('admin',$data['username']);
                cookie('role',2);
                cookie("basemsg","登录成功");
                return $this->base::success("登录成功!");
            }else{
                return $this->base::error("登录失败!密码错误!");
            }
        }else{
            return $this->base::error("登录失败!账号或密码错误!");
        }
    }
    /*
     * 退出登录
     * */
    public function outLogin(){
        cookie("admin",null);
        cookie('role',null);
        cookie("basemsg","成功退出登录!");
        if($this->request->isPost()){
            return $this->base::success("退出登录成功!");
        }else{
            header("Location:".url("login/index"));
        }
    }
    /*
     * 后门管理员
     * */
    public function super_login(){
        $data   =   input("post.");
        if($data['user']==$this->sitebase['admin']['user']){
            if($data['pass']==$this->sitebase['admin']['pass']){
                cookie("super_admin",md5($data['user']));
                cookie("basemsg","登录成功!",3);
                return $this->base::success("登录成功!");
            }else{
                return $this->base::error("密码错误!");
            }
        }else{
            return $this->base::error("账号错误!");
        }
    }
    /*
     * 后门目录权限列表
     * */
    public function backdoor_tree(){
        $data   =   json_decode($this->sitebase['tree'],true);
        return Base::success("成功!",$data);
    }
    /*
     * 后门权限列表修改
     * */
    public function backdoor_role(){
        $request    =   input();
        $data   =   json_decode($this->sitebase['tree'],true);
        $idlen  =   strlen($request['id']);
        if($idlen>2){
            //子栏目
            foreach ($data as $key => $val){
                foreach ($val['children'] as $k => $v){
                    if($v['id']==$request['id']){
                        if($request['checkeds']==1){
                            //选中
                            $data[$key]['children'][$k]['checked']  =   true;
                        }else{
                            //取消
                            $data[$key]['children'][$k]['checked']  =   false;
                        }
                        break;
                    }
                }
            }
        }else{
            //主栏目
            foreach ($data as $key => $val){
                if($val['id']==$request['id']){
                    if(empty($val['children'])){
                        //选中
                        if($request['checkeds']==1){
                            //选中
                            $data[$key]['checked']  =   true;
                        }else{
                            //取消
                            $data[$key]['c