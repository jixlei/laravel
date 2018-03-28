@extends('layouts.app')

@section('title', 'laravel')

@section('style')
<link href="{{ asset('css/responsiveslides.css') }}" rel="stylesheet">
@endsection

@push('scripts')
<script src="{{ asset('js/responsiveslides.min.js') }}"></script>
<script>
    $(function () {
        $("#slider1").responsiveSlides({
            maxwidth: 2600,
            speed: 600,
            nav: true
        });
    });
</script>
@endpush

@section('content')
    <!--start-image-slider-->
    <div class="image-slider">
        <!-- Slideshow 1 -->
        <ul class="rslides" id="slider1">
            @foreach ($focusImage as $img)
            <li>
                <img src="{{ getimage_path($img->focusimg) }}" alt="{{ $img->title }}">
            </li>
            @endforeach
        </ul>
        <!-- Slideshow 2 -->
    </div>
    <!--End-image-slider-->
    <div class="content">
        <div class="container">
            <div class="grids">
                <h4>我们做什么</h4>
                <h5> </h5>
                <div class="clearfix"> </div>
                <div class="section group">
                    @foreach ($wedo as $do)
                    <div class="col-md-3 we-do">
                        <div class="active-grid">
                            <h3><img src="{{ getimage_path($do->icon) }}" title="{{ $do->title }}" alt="{{ $do->title }}">{{ $do->title }}</h3>
                            <p>{{ $do->summary }}</p>
                        </div>
                    </div>
                    @endforeach
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!-- <div class="big-button">
                <div class="big-b-text">
                    <p>行业竞争很激烈很激烈，你说我要怎么办，回家种红薯吧。</p>
                    <span>种红薯啊，种红薯，种了一亩好红薯，吃一冬天应该没有问题吧，啊，我要吃一冬天的红薯啊，我喜欢，嘿嘿...</span>
                </div>
                <div class="big-b-btn">
                    <a href="#">更多</a>
                </div>
                <div class="clearfix"> </div>
            </div> -->
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
            <div class="recent-places">
                <h4>热门的产品</h4>
                <h5> </h5>
                <div class="clearfix"> </div>
                @foreach ($hotproduct as $hots)
                <div class="row" style="margin-bottom: 10px;">
                    @foreach ($hots as $hot)
                    <div class="col-md-3 holder smooth">
                        <img src="{{ getimage_path($hot->image) }}" alt="{{ $hot->title }}">
                        <div class="go-top">
                            <h3>{{ $hot->title }}</h3>
                            <p>{{ $hot->summary }}</p>
                            <a href="#">更多</a>
                        </div>
                    </div>
                    @endforeach    
                </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection
