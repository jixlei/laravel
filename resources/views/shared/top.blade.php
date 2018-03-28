<div class="header">
	<div class="container">
		<!--start-header-->
		
		<!--start-logo-->
		<div class="logo">
			<a href="/">河南洛阳拖拉机制造厂</a>
		</div>
		<!--End-logo-->

		<!--start-share-->
		<div class="top-search-social-nav">
			@include('shared.bshare')
			<!-- <ul>
				<li class="active">
					<a href="#">
						<img src="{{ asset('images/facebook.png') }}" title="Facebook" alt="">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="{{ asset('images/twitter.png') }}" title="Twitter" alt="">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="{{ asset('images/gpluse.png') }}" title="Googlepluse" alt="">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="{{ asset('images/rss.png') }}" title="Rss" alt="">
					</a>
				</li>
			</ul> -->
		</div>
		<!-- <div class="clearfix"> </div> -->
		<!--End-share-->
	</div>
</div>
<!--End-header-->
<div class="top-nav">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
				aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="home">
					<a href="/">首页</a>
				</li>
				<li class="">
					<a href="{{ route('product') }}">产品</a>
				</li>
				<li class="">
					<a href="{{ route('services') }}">服务</a>
				</li>
				<li class="">
					<a href="{{ route('contact') }}">联系我们</a>
				</li>
				<li class="">
					<a href="{{ route('about') }}">关于我们</a>
				</li>
			</ul>
		</div>
	</div>
</div>