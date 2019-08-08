<?php
//首页
    Route::get('/','index\IndexController@index');

//登陆模块路由组
Route::prefix('login')->group(function(){
    //登陆页面
    Route::get('/','login\LoginController@login');

    //注册页面
    Route::get('register','login\LoginController@register');
});

//课程模块
Route::prefix('course')->group(function(){
    //课程首页
    Route::get('/','course\CourseController@index');
    //课程详情
    Route::get('coursecont','course\CourseController@coursecont');
    //加入学习
    Route::get('coursecont1','course\CourseController@coursecont1');
    //视频页面
    Route::get('video','course\CourseController@video');
});

//资讯页面
Route::prefix('article')->group(function(){
    //咨询页
    Route::get('/','article\ArticleController@index');
    Route::get('detail','article\ArticleController@detail');
});

//讲师页
Route::prefix('teacher')->group(function(){
    //首页
    Route::get('/','teacher\TeacherController@index');
    //详情页
    Route::get('detail','teacher\TeacherController@detail');

});

//个人中心
Route::prefix('myself')->group(function(){
    //主页面
    Route::get('mycourse','myself\MyselfController@mycourse');

});
