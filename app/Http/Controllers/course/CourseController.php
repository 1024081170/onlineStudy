<?php

namespace App\Http\Controllers\course;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    //课程首页
    public function index(){
        return view('course.index');
    }
    //课程详情
    public function coursecont(){
        return view('course.coursecont');
    }
    //加入课程
    public function coursecont1(){
        return view('course.coursecont1');
    }
    //视频页
    public function video(){
        return view('course.video');
    }
}
