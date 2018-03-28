@extends('layouts.app')

@section('title', 'product')

@section('style')
<link href="{{ asset('css/swipebox.css') }}" rel="stylesheet">
@endsection

@push('scripts')
<script src="{{ asset('js/jquery.swipebox.min.js') }}"></script>
<script type="text/javascript">
    jQuery(function ($) {
        $(".swipebox").swipebox();
    });
</script>
@endpush

@section('content')
<div class="content">
    <div class="container">
        <!--start-image-gallery-->
        <div class="gallerys">
            <h3>产品</h3>
            <h5> </h5>
            <div class="clearfix"> </div>
            <div class="row">
                @foreach ($products as $parr)
                <div class="gallery-grids">
                    @foreach ($parr as $product)
                    <div class="col-md-4 gallery-grid" style="margin-top:25px;">
                        <a href="{{ getimage_path($product->image) }}" class="b-link-stripe b-animate-go  swipebox img-responsive" title="{{ $product->title }}">
                            <img src="{{ getimage_path($product->image) }}" class="img-responsive" alt="">
                        </a>
                        <h4>{{ $product->title }}</h4>
                        <p>{{ $product->summary }}</p>
                        <div class="gallery-button"><a href="#">更多</a></div>
                    </div>
                    @endforeach    
                </div>
                @endforeach

            </div>
            
            <div class="clear"> </div>
            <div class="row">
                <div class="projects-bottom-paination">
                    {{ $links }}
                </div>

            </div>
        </div>
        <!--End-image-gallery-->
        <div class="clearfix"> </div>
    </div>
</div>
@endsection