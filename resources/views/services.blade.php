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
             @foreach ($services as $sarr)
             <div class="section group">
                @foreach ($sarr as $service)
                <div class="col-md-6 listview_1_of_2">
                    <div class="images_1_of_2">
                        <div class="listimg listimg_2_of_1">
                            <img src="{{ getimage_path($service->image) }}" alt="{{ $service->title }}">
                        </div>
                        <div class="text list_2_of_1">
                            <h3>{{ $service->title }}</h3>
                            <p>{{ $service->summary }}</p>
                            <div class="button">
                                <span><a href="#">更多</a></span>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                @endforeach    
            </div>
            @endforeach
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