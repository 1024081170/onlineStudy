<!doctype html>
<html><!-- InstanceBegin template="/Templates/dwt.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>在线学习平台-@yield('title')</title>

<link rel="stylesheet" href="/css/tab.css" media="screen">
<script src="/js/jquery-1.8.0.min.js"></script>
<script src="/js/jquery.tabs.js"></script>
<script src="/js/mine.js"></script>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

</head>

<body>

<div class="head" id="fixed">
	<div class="nav">
    	<span class="navimg"><a href="/"><img border="0" src="/images/logo.png"></a></span>
        <ul class="nag">
        	<li><a href="/course" class="link1 current">课程</a></li>
            <li><a href="/article" class="link1">资讯</a></li>
            <li><a href="/teacher" class="link1">讲师</a></li>
            <li><a href="" class="link1" target="_blank">题库！</a></li>
            <li><a href="" class="link1" target="_blank">问答！</a></li>

        </ul>
        <span class="massage">
            <!--<span class="select">
        	<a href="#" class="sort">课程</a>
        	<input type="text" value="关键字"/>
            <a href="#" class="sellink"></a>
            <span class="sortext">
            	<p>课程</p>
                <p>题库</p>
                <p>讲师</p>
            </span>
        </span>-->
        	<a href="/login" class="link2 he">登录</a>
            <a href="/login/register" class="link2 he">注册</a>
{{--            <a href="mycourse.html" style="width:70px" class="link2 he ico" target="_blank">个人中心</a>--}}
        </span>
    </div>
</div>


{{--主体内容--}}
@yield('content')
{{--主体内容--}}



<div class="clearh"></div>
<div class="foot">
<div class="fcontainer">
      <div class="fwxwb">
	       <div class="fwxwb_1">
		       <span>关注微信</span><img width="95" alt="" src="/images/num.png">
		   </div>
           <div>
               <span>关注微博</span><img width="95" alt="" src="/images/wb.png">
		   </div>
      </div>
      <div class="fmenu">
	     <p><a href="#">关于我们</a> | <a href="#">联系我们</a> | <a href="#">优秀讲师</a> | <a href="#">帮助中心</a> | <a href="#">意见反馈</a> | <a href="#">加入我们</a></p>
      </div>
      <div class="copyright">
        <div><a href="/">谋刻网</a>所有&nbsp;晋ICP备12006957号-9</div>
      </div>
    </div>
</div>
<!--右侧浮动-->
<div class="rmbar">
	<span class="barico qq" style="position:relative">
	<div  class="showqq">
	   <p>官方客服QQ:<br>335049335</p>
	</div>
	</span>
	<span class="barico em" style="position:relative">
	  <img src="/images/num.png" width="75" class="showem">
	</span>
	<span class="barico wb" style="position:relative">
	  <img src="/images/wb.png" width="75" class="showwb">
	</span>
	<span class="barico top" id="top">置顶</span>
</div>
</body>

<!-- InstanceEnd --></html>
