<?php
namespace App\Http\Controllers\Home;
use Illuminate\Routing\Controller as BaseController;
class CommonController extends BaseController{
    public function __construct()
    {
        $this->middleware('auth');
    }

}