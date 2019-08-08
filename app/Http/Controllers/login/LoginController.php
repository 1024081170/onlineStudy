<?php

namespace App\Http\Controllers\login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

//登陆模块
class LoginController extends Controller
{
    //登陆页面
    public function login(){
        return view('/login/login');
    }

    //注册页面
    public function register(){
        return view('/login/register');
    }
}
