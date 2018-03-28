@extends('layouts.app')

@section('title', 'about')

@section('content')
<div class="content">
    <div class="container">
        <!--start-about-->
        <div class="about">
            <div class="about-grids">
                <div class="col-md-4 about-grid">
                    <h3>我们的历史</h3>
                    <h5> </h5>
                    <div class="clearfix"> </div>
                    <a href="#"><img src="images/slider1.jpg" class="img-responsive" alt=""></a>
                    <span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam.</span>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam,
                        feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies
                        mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi,
                        condimentum.</p>
                    <a class="button1" href="#">更多</a>
                </div>
                <div class="col-md-4 about-grid center-grid1">
                    <h3>为什么选择我们</h3>
                    <h5> </h5>
                    <div class="clearfix"> </div>
                    <p>Pellenn dimentum sed, commodo vitae, ornare sit amet,lit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis
                        tempus lacus enim ac dui.</p>
                    <label>exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</label>
                    <p>tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies
                        eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
                    <label>exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</label>
                    <p>tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies
                        eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
                </div>
                <div class="col-md-4 about-grid last-grid">
                    <h3>我们的团队</h3>
                    <h5> </h5>
                    <div class="clearfix"> </div>
                    <div class="about-team">
                        <div class="client">
                            <div class="about-team-left">
                                <a href="#">
                                    <img src="images/c1.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="about-team-right">
                                <p>tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies
                                    eget, tempor sit amet, ante.</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="client">
                            <div class="about-team-left">
                                <a href="#">
                                    <img src="images/c2.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="about-team-right">
                                <p>tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies
                                    eget, tempor sit amet, ante.</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="client">
                            <div class="about-team-left">
                                <a href="#">
                                    <img src="images/c1.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="about-team-right">
                                <p>tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies
                                    eget, tempor sit amet, ante.</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="client">
                            <div class="about-team-left">
                                <a href="#">
                                    <img src="images/c2.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="about-team-right">
                                <p>tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies
                                    eget, tempor sit amet, ante.</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!--End-about-->
        <div class="clearfix"> </div>
        <div class="recent-places">
            <h4>我们的工作</h4>
            <h5> </h5>
            <div class="clearfix"> </div>
            @foreach ($work as $wk)
            <div class="col-md-3 holder smooth">
                <img src="{{ getimage_path($wk->image) }}" alt="{{ $wk->title }}">
                <div class="go-top">
                    <h3>{{ $wk->title }}</h3>
                    <p>{{ $wk->summary }}</p>
                    <a href="#">更多</a>
                </div>
            </div>
            @endforeach
            <div class="clearfix"> </div>
        </div>
        <!-- <div class="recent-places">
            <h4>Our Work</h4>
            <h5> </h5>
            <div class="clearfix"> </div>
            <div class="col-md-3 holder smooth">
                <img src="images/p1.jpg" alt="Web Tutorial Plus - Demo">
                <div class="go-top">
                    <h3>Image Description</h3>
                    <p>
                        This is the description of this image. You may use.
                    </p>
                    <a href="#">ReadMore</a>
                </div>
            </div>
            <div class="col-md-3 holder smooth">
                <img src="images/p2.jpg" alt="Web Tutorial Plus - Demo">
                <div class="go-top">
                    <h3>Image Description</h3>
                    <p>
                        This is the description of this image. You may use.
                    </p>
                    <a href="#">ReadMore</a>
                </div>
            </div>
            <div class="col-md-3 holder smooth">
                <img src="images/p3.jpg" alt="Web Tutorial Plus - Demo">
                <div class="go-top">
                    <h3>Image Description</h3>
                    <p>
                        This is the description of this image. You may use.
                    </p>
                    <a href="#">ReadMore</a>
                </div>
            </div>
            <div class="col-md-3 holder smooth last-grid">
                <img src="images/p4.jpg" alt="Web Tutorial Plus - Demo">
                <div class="go-top">
                    <h3>Image Description</h3>
                    <p>
                        This is the description of this image. You may use.
                    </p>
                    <a href="#">ReadMore</a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div> -->
    </div>
</div>
@endsection