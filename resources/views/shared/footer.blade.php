<div class="footer">
		<div class="container">
			<div class="col-md-4 footer-grid">
				<h3>{{ $footer['about']->title }}</h3>
				<p>{{ $footer['about']->summary }}</p>
				<a href="#">ReadMore</a>
			</div>
			<div class="col-md-4 footer-grid center-grid">
				<h3>{{ $footer['contact']->title }}</h3>
				<ul>
					<li>
						<a href="#">电话：{{ $footer['contact']->phone }}</a>
					</li>
					<li>
						<a href="#">Q Q：{{ $footer['contact']->qq }}</a>
					</li>
					<li>
						<a href="#">邮箱：{{ $footer['contact']->email }}</a>
					</li>
					<li>
						<a href="#">地址：{{ $footer['contact']->address }}</a>
					</li>
				</ul>
			</div>
			<div class="col-md-4 footer-grid">
				<h3>关注我们</h3>
				<ul class="share">
					<li>
						<img class="weibo_icon" src="{{ asset('images/share1.png') }}" alt="">
					</li>
					<li>
						<img class="qq_icon" src="{{ asset('images/share2.png') }}" alt="">
					</li>
					<li>
						<img class="wechat_icon" src="{{ asset('images/share4.png') }}" alt="">
					</li>
				</ul>
				<div class="code_wrap">
					<ul class="code">
						<li><img class="weibo" src="{{ asset('images/weibo1.png') }}" alt=""></li>
						<li><img class="qq" src="{{ asset('images/qq1.png') }}" alt=""></li>
						<li><img class="wechat" src="{{ asset('images/wechat1.png') }}" alt=""></li>
					</ul>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="copy-right">
		<p>Copyright &copy; 2018.Cxxx 订单单独的大撒的发生单独的</p>
	</div>

<script>
/*底部二维码*/
$(".weibo_icon").hover(function(){
	$(".weibo").fadeIn(500);
	$(".qq,.twitter,.wechat").fadeOut(0);
	$(".code_wrap").css("z-index",200);
},function(){
	$(".weibo").fadeOut(0);
	$(".code_wrap").css("z-index",50);
});

$(".qq_icon").hover(function(){
	$(".qq").fadeIn(500);
	$(".weibo,.twitter,.wechat").fadeOut(0);
	$(".code_wrap").css("z-index",200);
},function(){
	$(".qq").fadeOut(0);
	$(".code_wrap").css("z-index",50);
});
$(".wechat_icon").hover(function(){
	$(".wechat").fadeIn(500);
	$(".weibo,.qq,.twitter").fadeOut(0);
	$(".code_wrap").css("z-index",200);
},function(){
	$(".wechat").fadeOut(0);
	$(".code_wrap").css("z-index",50);
});
$(".weibo,.twitter,.wechat").hover(function(){
	$(this).fadeIn(0);
	$(".code_wrap").css("z-index",200);
},function(){
	$(this).fadeOut(500);
	$(".code_wrap").css("z-index",50);
});

</script>