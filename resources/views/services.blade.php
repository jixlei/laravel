@extends('layouts.app')

@section('title', 'services')

@section('content')
<div class="content">
    <div class="container">
        <!--start-services-->
        <div class="services">
            <h4>我们的服务</h4>
            <h5> </h5>
            <div class="clearfix"> </div>
            <div class="section group">
                <div class="col-md-6 listview_1_of_2">
                    <div class="images_1_of_2">
                        <div class="listimg listimg_2_of_1">
                            <img src="images/s1.jpg" alt="">
                        </div>
                        <div class="text list_2_of_1">
                            <h3>Lorem Ipsum is simply</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            <div class="button">
                                <span>
                                    <a href="#">Read More</a>
                                </span>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-6 listview_1_of_2">
                    <div class="images_1_of_2">
                        <div class="listimg listimg_2_of_1">
                            <img src="images/s2.jpg" alt="">
                        </div>
                        <div class="text list_2_of_1">
                            <h3>Lorem Ipsum is simply</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            <div class="button">
                                <span>
                                    <a href="#">Read More</a>
                                </span>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="section group">
                <div class="col-md-6 listview_1_of_2">
                    <div class="images_1_of_2">
                        <div class="listimg listimg_2_of_1">
                            <img src="images/s3.jpg" alt="">
                        </div>
                        <div class="text list_2_of_1">
                            <h3>Lorem Ipsum is simply</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            <div class="button">
                                <span>
                                    <a href="#">Read More</a>
                                </span>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-6 listview_1_of_2">
                    <div class="images_1_of_2">
                        <div class="listimg listimg_2_of_1">
                            <img src="images/s4.jpg" alt="">
                        </div>
                        <div class="text list_2_of_1">
                            <h3>Lorem Ipsum is simply</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            <div class="button">
                                <span>
                                    <a href="#">Read More</a>
                                </span>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="section group">
                <div class="col-md-6 listview_1_of_2">
                    <div class="images_1_of_2">
                        <div class="listimg listimg_2_of_1">
                            <img src="images/s1.jpg" alt="">
                        </div>
                        <div class="text list_2_of_1">
                            <h3>Lorem Ipsum is simply</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            <div class="button">
                                <span>
                                    <a href="#">Read More</a>
                                </span>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-6 listview_1_of_2">
                    <div class="images_1_of_2">
                        <div class="listimg listimg_2_of_1">
                            <img src="images/s2.jpg" alt="">
                        </div>
                        <div class="text list_2_of_1">
                            <h3>Lorem Ipsum is simply</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            <div class="button">
                                <span>
                                    <a href="#">Read More</a>
                                </span>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!--End-services-->
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
    </div>
</div>
@endsection