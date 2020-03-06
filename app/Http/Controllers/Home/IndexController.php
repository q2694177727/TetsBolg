<?php
namespace App\Http\Controllers\Home;
use Illuminate\Routing\Controller as BaseController;
class IndexController extends CommonController {

    public function index(){

        return view("admin.index");
    }
    public function welcome(){
        echo url("/shovain/article/info");exit;
    }
}