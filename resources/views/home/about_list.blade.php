<!DOCTYPE html>
<html>
<head>
<title>About</title>
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
</head>

<body>
<!-- header-nav -->
	<div class="header-nav">
		<div style="margin-left:103px;float: left">
			<img src="{{asset('images/logo.png')}}" alt="" width="150px">
		</div>		
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo">
						<a class="navbar-brand" href="index.html">勇敢说爱，快乐脱单 <span>我们在我们的服务专业</span></a>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="{{url('/homeindex/index')}}">首页</a></li>
						<li class="active"><a href="#">关于</a></li>
						<li><a href="{{url('/homemember/index')}}">会员</a></li>
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
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
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
<!-- about -->
	<div class="about">
		<div class="container">
			<h3><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>关于我们</h3>
			<p class="sint">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et
					voluptates repudiandae sint et molestiae non recusandae.</p>
			<div class="about-grids">
				<div class="col-md-4 about-grid-left">
					<img src="images/6.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-8 about-grid-right">
					<h4>sint et molestiae non recusandae</h4>
					<p>To take a trivial example, which of us ever undertakes laborious physical exercise,
						except to obtain some advantage from it? But who has any right to find fault with a man
						who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain
						that produces no resultant pleasure.</p>
					<ul class="social-icons">
						<li><a href="#" class="p"> </a></li>
						<li><a href="#" class="facebook"> </a></li>
						<li><a href="#" class="twitter"> </a></li>
						<li><a href="#" class="in"> </a></li>
					</ul>
					<div class="progress lines">
					  <div class="progress-bar lin" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
						60%
					  </div>
					</div>
					<div class="progress lines1">
					  <div class="progress-bar lin" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
						30%
					  </div>
					</div>
					<div class="progress line">
					  <div class="progress-bar lin" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
						80%
					  </div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<!-- //about -->
<!-- about-bottom -->
	<div class="about-bottom">
		<div class="container">
			<h3><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>欢迎来到我们的传播！</h3>
			<p class="sint">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et
					voluptates repudiandae sint et molestiae non recusandae.</p>
			<div class="about-bottom-grids">
				<div class="col-md-4 about-bottom-grid">
					<div class="about-bottom-grid-rel">
						<p>01.</p>
						<div class="about-bottom-grid-rel-pos">
							<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
								voluptatibus maiores alias consequatur aut perferendis doloribus
								asperiores repellat.</p>
							<div class="more">
								<a href="#" class="hvr-wobble-skew">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 about-bottom-grid">
					<div class="about-bottom-grid-rel">
						<p>02.</p>
						<div class="about-bottom-grid-rel-pos">
							<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
								voluptatibus maiores alias consequatur aut perferendis doloribus
								asperiores repellat.</p>
							<div class="more">
								<a href="#" class="hvr-wobble-skew">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 about-bottom-grid">
					<div class="about-bottom-grid-rel">
						<p>03.</p>
						<div class="about-bottom-grid-rel-pos">
							<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
								voluptatibus maiores alias consequatur aut perferendis doloribus
								asperiores repellat.</p>
							<div class="more">
								<a href="#" class="hvr-wobble-skew">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about-bottom -->
<!-- features -->
	<div class="features">
		<div class="container">
			<div class="features-grids">
				<div class="features-grid-left">
					<h1>aut perferendis maiores</h1>
					<h2>Hic tenetur a sapiente delectus</h2>
					<p>No one rejects, dislikes, or avoids pleasure itself, because it is
						pleasure, but because those who do not know how to pursue pleasure.</p>
					<ul class="social-icons">
						<li><a href="#" class="p"> </a></li>
						<li><a href="#" class="facebook"> </a></li>
						<li><a href="#" class="twitter"> </a></li>
						<li><a href="#" class="in"> </a></li>
					</ul>
				</div>
				<div class="features-grid-right">
					<div class="features-grid-right-text">
						<h4>Mechanical Engineer</h4>
						<p>Encounter consequences that are extremely painful.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //features -->
<!-- team -->
	<div class="team">
		<div class="container">
			<h3><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>认识我们的团队</h3>
			<p class="sint">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et
					voluptates repudiandae sint et molestiae non recusandae.</p>
			<div class="team-grids">
				<div class="col-md-3 team-grid">
					<img src="images/10.png" alt=" " class="img-responsive" />
					<h4>Micheal - <span>Manager</span></h4>
					<p>Ut enim ad minima veniam, quis nostrum voluptatibus occaecat cupidatat exercitationem ullam.</p>
				</div>
				<div class="col-md-3 team-grid">
					<img src="images/12.png" alt=" " class="img-responsive" />
					<h4>Laura - <span>Staff</span></h4>
					<p>Ut enim ad minima veniam, quis nostrum voluptatibus occaecat cupidatat exercitationem ullam.</p>
				</div>
				<div class="col-md-3 team-grid">
					<img src="images/13.png" alt=" " class="img-responsive" />
					<h4>Rosy - <span>Staff</span></h4>
					<p>Ut enim ad minima veniam, quis nostrum voluptatibus occaecat cupidatat exercitationem ullam.</p>
				</div>
				<div class="col-md-3 team-grid">
					<img src="images/11.png" alt=" " class="img-responsive" />
					<h4>Smithy - <span>Staff</span></h4>
					<p>Ut enim ad minima veniam, quis nostrum voluptatibus occaecat cupidatat exercitationem ullam.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-4 footer-grid">
					<div class="footer-logo">
						<a href="index.html">Obdurate <span>We are professional in our service</span></a>
					</div>
				</div>
				<div class="col-md-4 footer-grid">
					<h4>Call Us <span>+0809 657 890</span></h4>
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
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="services.html">Services</a></li>
						<li><a href="projects.html">Projects</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="footer-copy">
		<div class="container">
			<p>Copyright &copy; 2016.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
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