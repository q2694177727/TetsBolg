<?php
namespace App\Http\Controllers\Home;
use App\Models\Article;
use App\Models\ArticleType;
use Illuminate\Routing\Controller as BaseController;
class ArticleController extends CommonController {

    public function lists(){
        return view("admin.article.list");
    }
    public function info(){
        $data   =   [];
        $data["article_type"]   =   ArticleType::all();
        $data["info"]   =   Article::find(request("id"));
        return view("admin.article.info",$data);
    }
    public function adds(){
        $data   =   [];
        $data["article_type"]   =   ArticleType::all();
        return view("admin.article.adds",$data);
    }
    public function types(){
        return view("admin.article.type");
    }
    public function typeinfo(){
        $data   =   ArticleType::find(request("id"));
        return view("admin.article.typeinfo",["info"=>$data]);
    }
    public function typeadds(){
        return view("admin.article.typeadds");
    }
}