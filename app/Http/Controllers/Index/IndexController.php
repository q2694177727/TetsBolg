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

class IndexController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        $search     =   "%".request("search","")."%";

        $totalNum  =    Article::where("article_name","LIKE",$search)->orWhere("article_easy","LIKE",$search)->count();
        $limit  =   request("limit",15);
        $page   =   request("page",1);
        $totalPage  =   ceil($totalNum/$limit);

        if($page<0){
            $page   =   1;
        }
        if($page>$totalPage){
            $page   =   $totalPage;
        }
        if($limit<0){
            $limit   =   15;
        }
        if($limit>100){
            $limit   =   15;
        }

       $data   =   Article::where("article_name","LIKE",$search)->orWhere("article_easy","LIKE",$search)->offset(($page-1)*$limit)->limit($limit)->get();

       return  view("index.index",["data"=>$data,'page'=>$page,"totalPage"=>$totalPage,"limit"=>$limit]);
    }
}
