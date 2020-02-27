<?php

namespace App\Http\Controllers\Index;

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
        $data    =    DB::selectOne("select * from article as a , article_type as types   where  a.article_type_id = types.article_type_id  and `article_id`= ".$id);
        dump($data);
    }
}
