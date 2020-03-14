<?php

namespace App\Http\Controllers\Index;

use App\Models\Article;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class ArticleController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function info($id){
        $data   =   Article::with("article_type")->find( $id);
        /*
         * 上一页
         * */
        $previous   = Article::where("article_id","<",$id)->orderBy("article_id","desc")->value("article_id");

        /*
         * 下一页
         * */
        $next   =   Article::where("article_id",">",$id)->orderBy("article_id","asc")->value("article_id");
        return view("article.info",["data"=>$data,"previous"=>$previous,"next"=>$next]);
    }
}
