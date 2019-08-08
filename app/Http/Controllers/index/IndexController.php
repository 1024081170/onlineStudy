<?php

namespace App\Http\Controllers\index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//主页模块
class IndexController extends Controller
{
    //主页面
    public function index(){
        return view('/index/index');
    }



    //资讯页面
    public function articlelist(){
        return view('/index/articlelist');
    }

    //资讯详情页
    public function article(){
        return view('/index/article');
    }

    //讲师页面
    public function teacherlist(){
        return view('/index/teacherlist');
    }

    //讲师详情页面
    public function teacher(){
        return view('/index/teacher');
    }

    //课程详情
    public function coursecont(){
        return view('/index/coursecont');
    }

    //加入学习
    public function coursecont1(){
        return view('/index/coursecont1');
    }

    //视频页面
    public function video(){
        return view('/index/video');
    }
}
