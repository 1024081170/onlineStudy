<?php

namespace App\Http\Controllers\article;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(){
        return view('article.index');
    }
    //详情
    public function detail(){
        return view('article.detail');
    }
}
