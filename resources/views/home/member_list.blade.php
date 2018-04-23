<!DOCTYPE html>
<html>
<head>
<title>member</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Obdurate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
<style>
	.div_img{
		background: white;
		width:250px;
		height:300px;
		float: left;
		margin-left: 33px;
		margin-top: 10px;
	}
	.img:hover{
		transform: scale(1.2);
		webkit-transition: all 1.5s ease-in-out;
		o-transform: scale(1.2);
		-ms-transform: scale(1.2);
		moz-transform: scale(1.2);
		webkit-transform: scale(1.2);
		moz-transition: all 1.5s ease-in-out;
		ms-transition: all 1.5s ease-in-out;
		o-transition: all 1.5s ease-in-out;
		transition: all 1.5s ease-in-out;
	}

</style>
</head>

<body>
<!-- header-nav -->
	<div class="header-nav">
		<div style="margin-left:103px;float: left">
			<img src="{{asset('images/logo.png')}}" alt="" width="150px">
		</div>		
		<div class="container">
			<nav class="navbar navbar-default">

				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo">
						<a class="navbar-brand" href="index.html">勇敢说爱，快乐脱单<span>我们用心服务专业</span></a>
					</div>
				</div>


				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="{{url('/homeindex/index')}}">首页</a></li>
						<li><a href="{{url('/homeabout/index')}}">关于</a></li>
						<li class="active"><a href="#">会员</a></li>
						<li><a href="{{url('homeserver/index')}}">服务</a></li>
						<li><a href="{{url('homestory/index')}}">love story</a></li>
						<li><a href="{{url('homecontact/index')}}">联系我们</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->

				<!-- search -->
				<div class="head-right">
					<div id="sb-search" class="sb-search">
						<!-- <form>
							<input class="sb-search-input" placeholder="Search" type="search" name="search" id="search">
							<input class="sb-search-submit" type="submit" value="">
							<span class="sb-icon-search"> </span>
						</form> -->
					</div>
				</div>
				<!-- //search -->
					<!--search-scripts-->
						<script src="{{asset('js/classie.js')}}"></script>
						<script src="{{asset('js/uisearch.js')}}"></script>
							<script>
								new UISearch( document.getElementById( 'sb-search' ) );
							</script>
					<!--//search-scripts-->
			</nav>
		</div>
	</div>
<!-- //header-nav -->
<!-- banner -->
	<div class="banner-contact">
		<div class="container">
			<div class="banner-contact-info">
				<h3>认真科学谈恋爱，幸福长久过一生</h3>
				<p>但在某些情况下其职责的需要，经常会出现的乐趣已经被否定，或避免乐趣和烦恼的一些事情还没有被接受。</p>
			</div>
		</div>
	</div>
<!-- //banner -->
<!--typography-page -->
	<div class="typo">
		<div class="container">
			@foreach($member_data as $key =>$val)
			<div class="div_img">
				<a href="tencent://message/?uin=768100410Site=">   
					<img class="img" style="border-radius:9px" src="{{asset($val['member_img'])}}" alt="" width="250" height="220px">
				</a>
				<span style="font-size: 20px">
					{{$val['member_name']}}
					&nbsp;
					{{$val['member_age']}}岁
					<span style="font-size: 14px;color: #ccc;padding-left:7px;">
						期望一年内结婚
					</span>
				</span>
				<br>
				<span style="line-height: 20px;">
					{{$val['member_address']}}
					&nbsp;&nbsp;&nbsp;&nbsp;
					{{$val['member_money']}}
				</span>
			</div>
			@endforeach
		</div>
	</div>
<!-- //typography-page -->
<!-- footer -->
	<div class="footer" style="position:relative;">
	<div class="advertising" style="position:absolute;left:0;top:10%;width:150px;height:300px;">
		@foreach($left_ad_data as $k => $v)
		@if($v['ad_type']==1)
			<p style="width:150px;height:50px" title="{{$v['ad_desc']}}"><a href="http://{{$v['ad_link']}}">{{$v['ad_content']}}</a></p>
		@else
			<p style="width:150px;height:50px" title="{{$v['ad_desc']}}"><a href="http://{{$v['ad_link']}}"><img src="{{asset($v['ad_content'])}}" width="150" height="50" /></a></p>
		@endif
		@endforeach
	</div>
	<div class="advertising" style="position:absolute;right:0;top:10%;width:150px;height:300px;">
	@foreach($right_ad_data as $k => $v)
		@if($v['ad_type']==1)
			<p style="width:150px;height:50px" title="{{$v['ad_desc']}}"><a href="http://{{$v['ad_link']}}">{{$v['ad_content']}}</a></p>
		@else
			<p style="width:150px;height:50px" title="{{$v['ad_desc']}}"><a href="http://{{$v['ad_link']}}"><img src="{{asset($v['ad_content'])}}" width="150" height="50" /></a></p>
		@endif
		@endforeach
	</div>
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-4 footer-grid">
					<div class="footer-logo">
						<a href="index.html">Charm <span>我们在我们的专业服务</span></a>
					</div>
				</div>
				<div class="col-md-4 footer-grid">
					<h4>Call Us <span>{{$net_data[0]['net_phone']}}</span></h4>
					<p>My Company,875 jewel Road <span>8907 Ukrain.</span></p>
					<ul class="social-icons">
						<li><a href="#" class="p"> </a></li>
						<li><a href="#" class="facebook"> </a></li>
						<li><a href="#" class="twitter"> </a></li>
						<li><a href="#" class="in"> </a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-grid">
					<ul>
						<li class="active"><a href="#">首页</a></li>
						<li><a href="{{url('/homeabout/index')}}">关于</a></li>
						<li><a href="{{url('/homemember/index')}}">会员</a></li>
						<li><a href="{{url('homeserver/index')}}">服务</a></li>
						<li><a href="{{url('homestory/index')}}">love story</a></li>
						<li><a href="{{url('homecontact/index')}}">联系我们</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="footer-copy">
		<div class="container">
			<p>Copyright &copy; 2016.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
			<p>友情链接：@foreach($link_data as $v => $val)
					@if($val['link_type']==1)
					<a href="http://{{$val['net_url']}}">{{$val['net_logo']}}</a>
					@else
					<a href="http://{{$val['net_url']}}">
					<img src="{{asset($val['net_logo'])}}" width="100" height="50" />
					</a>
					@endif
					@endforeach
			</p>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="{{asset('js/bootstrap.js')}}"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>