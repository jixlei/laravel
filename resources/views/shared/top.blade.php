<div class="header">
	<div class="container">
		<!--start-header-->
		
		<!--start-logo-->
		<div class="logo">
			<a href="/">Steel Industry</a>
		</div>
		<!--End-logo-->

		<!--start-top-nav-->
		<div class="top-search-social-nav">
			<ul>
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
			</ul>
		</div>
		<div class="clearfix"> </div>
		<!--End-top-nav-->
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
					<a href="/">Home</a>
				</li>
				<li class="">
					<a href="{{ route('about') }}">About</a>
				</li>
				<li class="">
					<a href="{{ route('services') }}">Services</a>
				</li>
				<li class="">
					<a href="{{ route('product') }}">Product</a>
				</li>
				<li class="">
					<a href="{{ route('contact') }}">Contact</a>
				</li>
			</ul>
		</div>
	</div>
</div>