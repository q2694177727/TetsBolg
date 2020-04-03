<?php
namespace App\Http\Controllers\Home;
use App\Models\Article;
use App\Models\ArticleType;
use Illuminate\Routing\Controller as BaseController;

class ApiController extends BaseController {

    public function articleList(){
        $count  =   Article::count();
        $data   =   Article::with("article_type")->offset((request("page",1)-1)*request("limit",15))->orderByDesc("article_id")->limit(request("limit",15))->get();
        return ["code"=>0,"count"=>$count,"data"=>$data];
    }
    public function addArticle(){
        $model  =   new Article();
        $model->article_name    =   request("article_name");
        $model->article_type_id    =   request("article_type_id");
        $model->article_easy   =   request("article_easy");
        $model->article_content   =   request("article_content");
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
    public function articleListType(){
        $data   =   ArticleType::all();
        return ["code"=>0,"count"=>count($data),"data"=>$data];
    }

    public function addArticleType(){
        $model  =   new ArticleType();
        $model->article_type_name    =   request("article_type_name");
        $res    =   $model->save();
        if($res){
            return json_encode(["code"=>1,"msg"=>"增加成功！"]);
        }else{
            return json_encode(["code"=>-1,"msg"=>"增加失败！"]);
        }
    }
    public function editArticleType(){
        $res  =   ArticleType::where("article_type_id",request("article_type_id"))->update([
            "article_type_name"    =>   request("article_type_name"),
        ]);
        if($res){
            return json_encode(["code"=>1,"msg"=>"修改成功！"]);
        }else{
            return json_encode(["code"=>-1,"msg"=>"修改失败！"]);
        }
    }

    public function delArticleType(){
        $res  =   ArticleType::destroy(request("article_type_id"));
        if($res){
            return json_encode(["code"=>1,"msg"=>"删除成功！"]);
        }else{
            return json_encode(["code"=>-1,"msg"=>"删除失败！"]);
        }
    }

}