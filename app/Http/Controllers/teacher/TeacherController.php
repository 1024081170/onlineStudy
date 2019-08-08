<?php

namespace App\Http\Controllers\teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    public function index(){
        return view('teacher.index');
    }
    public function detail(){
        return view('teacher.detail');
    }
}
