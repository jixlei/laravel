@extends('layouts.app')

@section('title', 'about')

@section('content')
<div class="content">
    <div class="container">
        <!--start-about-->
        <div class="about">
            <div class="about-grids">
                <div class="col-md-4 about-grid">
                    <h3>{{ $history->title }}</h3>
                    <h5> </h5>
                    <div class="clearfix"> </div>
                    <a href="#"><img src="{{ getimage_path($history->image) }}" class="img-responsive" alt="{{ $history->title }}"></a>
                    <span>{{ $history->summary }}</span>
                    <p>{!! $history->content !!}</p>
                    <a class="button1" href="#">更多</a>
                </div>
                <div class="col-md-4 about-grid center-grid1">
                    <h3>{{ $choose->title }}</h3>
                    <h5> </h5>
                    <div class="clearfix"> </div>
                    <p>{{ $choose->summary }}</p>
                    <p>{!! $choose->content !!}</p>
                </div>
                <div class="col-md-4 about-grid last-grid">
                    <h3>我们的团队</h3>
                    <h5> </h5>
                    <div class="clearfix"> </div>
                    <div class="about-team">
                        @foreach ($team as $tm)
                        <div class="client">
                            <div class="about-team-left">
                                <a href="#">
                                    <img src="{{ getimage_path($tm->image) }}" class="img-responsive" alt="{{ $tm->title }}">
                                </a>
                            </div>
                            <div class="about-team-right">
                                <p>{{ $tm->summary }}</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        @endforeach
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