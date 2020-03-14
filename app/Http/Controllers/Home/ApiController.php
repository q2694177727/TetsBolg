<?php
namespace App\Http\Controllers\Home;
use App\Models\Article;
use Illuminate\Routing\Controller as BaseController;

class ApiController extends BaseController {

    public function articleList(){
        $data   =   Article::with("article_type")->offset((request("page",1)-1)*request("limit",15))->limit(request("limit",15))->get();
        return ["code"=>0,"count"=>count($data),"data"=>$data];
    }
    public function addArticle(){
        $model  =   new Article();
        $model->article_name    =   request("article_name");
        $model->article_type_id    =   request("article_type_id");
        $model->article_easy   =   request("article_easy");
        $res    =   $model->save();
        if($res){
            return json_encode(["code"=>1,"msg"=>"增加成功！"]);
        }else{
            return json_encode(["code"=>-1,"msg"=>"增加失败！"]);
        }
    }
    public function editArticle(){
        $res  =   Article::where("article_id",request("article_id"))->update([
            "article_name"    =>   request("article_name"),
            "article_type_id"    =>   request("article_type_id"),
            "article_easy"   =>   request("article_easy"),
            "article_content"   =>   request("article_content"),
        ]);
        if($res){
            return json_encode(["code"=>1,"msg"=>"修改成功！"]);
        }else{
            return json_encode(["code"=>-1,"msg"=>"修改失败！"]);
        }
    }
}