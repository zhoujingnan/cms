<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>左侧导航menu</title>
<link href="{{asset('css/css.css')}}" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="{{asset('js/sdmenu.js')}}"></script>
<script type="text/javascript">
	// <![CDATA[
	var myMenu;
	window.onload = function() {
		myMenu = new SDMenu("my_menu");
		myMenu.init();
	};
	// ]]>
</script>
<style type=text/css>
html{ SCROLLBAR-FACE-COLOR: #538ec6; SCROLLBAR-HIGHLIGHT-COLOR: #dce5f0; SCROLLBAR-SHADOW-COLOR: #2c6daa; SCROLLBAR-3DLIGHT-COLOR: #dce5f0; SCROLLBAR-ARROW-COLOR: #2c6daa;  SCROLLBAR-TRACK-COLOR: #dce5f0;  SCROLLBAR-DARKSHADOW-COLOR: #dce5f0; overflow-x:hidden;}
body{overflow-x:hidden; background:url({{asset('images/main/leftbg.jpg')}}) left top repeat-y #f2f0f5; width:194px;}
</style>
</head>
<body onselectstart="return false;" ondragstart="return false;" oncontextmenu="return false;">
<div id="left-top">
	<div><img src="{{asset('images/main/member.gif')}}" width="44" height="44" /></div>
    <span>用户：admin<br>角色：超级管理员</span>
</div>
    <div style="float: left" id="my_menu" class="sdmenu">
      <div class="collapsed">
        <span>网站管理</span>
        <a href="{{url('backnet')}}" target="mainFrame" onFocus="this.blur()">后台首页</a>
        <a href="{{url('backnet/list')}}" target="mainFrame" onFocus="this.blur()">列表页</a>
        <a href="{{url('backnet/info')}}" target="mainFrame" onFocus="this.blur()">列表详细页</a>
        <a href="{{url('backnet/message')}}" target="mainFrame" onFocus="this.blur()">留言页</a>
        <a href="{{url('backnet/menu')}}" target="mainFrame" onFocus="this.blur()">栏目管理</a>
      </div>
      <div>
        <span>管理员管理</span>
        <a href="main.html" target="mainFrame" onFocus="this.blur()">分组权限</a>
        <a href="main_list.html" target="mainFrame" onFocus="this.blur()">级别权限</a>
        <a href="main_info.html" target="mainFrame" onFocus="this.blur()">角色管理</a>
        <a href="main.html" target="mainFrame" onFocus="this.blur()">自定义权限</a>
      </div>
      <div>
        <span>栏目管理</span>
        <a href="{{asset('backcolumn')}}" target="mainFrame" onFocus="this.blur()">栏目列表</a>
        <a href="{{asset('backmember')}}" target="mainFrame" onFocus="this.blur()">会员管理</a>
        <a href="main_list.html" target="mainFrame" onFocus="this.blur()">课堂管理</a>
        <a href="main_info.html" target="mainFrame" onFocus="this.blur()">故事管理</a>
        <a href="main.html" target="mainFrame" onFocus="this.blur()">活动管理</a>
      </div>
      <div>
        <span>广告管理</span>
        <a href="main.html" target="mainFrame" onFocus="this.blur()">分组权限</a>
        <a href="main_list.html" target="mainFrame" onFocus="this.blur()">级别权限</a>
        <a href="main_info.html" target="mainFrame" onFocus="this.blur()">角色管理</a>
        <a href="main.html" target="mainFrame" onFocus="this.blur()">自定义权限</a>
      </div>
      <div>
        <span>留言管理</span>
        <a href="main.html" target="mainFrame" onFocus="this.blur()">分组权限</a>
        <a href="main_list.html" target="mainFrame" onFocus="this.blur()">级别权限</a>
        <a href="main_info.html" target="mainFrame" onFocus="this.blur()">角色管理</a>
        <a href="main.html" target="mainFrame" onFocus="this.blur()">自定义权限</a>
      </div>
      <div>
        <span>友情链接</span>
        <a href="main.html" target="mainFrame" onFocus="this.blur()">分组权限</a>
        <a href="main_list.html" target="mainFrame" onFocus="this.blur()">级别权限</a>
        <a href="main_info.html" target="mainFrame" onFocus="this.blur()">角色管理</a>
        <a href="main.html" target="mainFrame" onFocus="this.blur()">自定义权限</a>
      </div>     
    </div>
</body>
</html>