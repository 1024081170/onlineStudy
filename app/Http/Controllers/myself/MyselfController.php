<?php

namespace App\Http\Controllers\myself;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//个人中心模块
class MyselfController extends Controller
{
    //个人中心页面
    public function mycourse(){
        return view('myself.mycourse');
    }
}
