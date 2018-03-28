<div class="footer">
		<div class="container">
			<div class="col-md-4 footer-grid">
				<h3>{{ $footer['about']->title }}</h3>
				<p>{{ $footer['about']->summary }}</p>
				<a href="#">更多</a>
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
                <li><img class="shareicon" src="images/share1.png" alt="" data-img="images/weibo1.png"></li>
                <li><img class="shareicon" src="images/share2.png" alt="" data-img="images/qq1.png"></li>
                <li><img class="shareicon" src="images/share3.png" alt="" data-img="images/twitter1.png"></li>
                <li><img class="shareicon" src="images/share4.png" alt="" data-img="images/wechat1.png"></li>
            </ul>
            <div class="share_image">
							<img class="shareimg" src="images/weibo1.png" alt="">
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
	$(".shareicon").hover(function() {
			$(".shareimg").attr('src', $(this).data('img'));
			$(".shareimg").fadeIn(500);
	}, function() {
	});
</script>