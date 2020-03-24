<?php
namespace App\Http\Controllers\Home;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class IndexController extends CommonController {

    public function index(){
        $user = Auth::user();
        return view("admin.index",["user"=>$user]);
    }
    public function welcome(){
        $user = Auth::user();
        return view("admin.welcome",["user"=>$user]);
    }
}