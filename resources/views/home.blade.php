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
                <img src="{{ getimage_path($img->image) }}" alt="{{ $img->title }}">
            </li>
            @endforeach
        </ul>
        <!-- Slideshow 2 -->
    </div>
    <!--End-image-slider-->
    <div class="content">
        <div class="container">
            <div class="grids">
                <h4>What We Do</h4>
                <h5> </h5>
                <div class="clearfix"> </div>
                <div class="section group">
                    <div class="col-md-3 we-do">
                        <div class="active-grid">
                            <h3>
                                <img src="images/g1.png" title="support" alt="">Nemo enim</h3>
                            <p>Lorem ipsum dolor quis nostrudx ea comvoluptate velit esse cillum nulla pariatur.</p>
                        </div>
                    </div>
                    <div class="col-md-3 we-do">
                        <div class="active-grid">
                            <h3>
                                <img src="images/g2.png" title="Destinations" alt="">Temporibus</h3>
                            <p>comvoluptate velit esse cillum nulla Lorem ipsum dolor quis nostrudx ea pariatur.</p>
                        </div>
                    </div>
                    <div class="col-md-3 we-do">
                        <div class="active-grid">
                            <h3>
                                <img src="images/g3.png" title="Events" alt="">Quis autem</h3>
                            <p>Lorem ipsum dolor quis nostrudx ea comvoluptate velit esse cillum nulla pariatur.</p>
                        </div>
                    </div>
                    <div class="col-md-3 we-do">
                        <div class="active-grid">
                            <h3>
                                <img src="images/g4.png" title="Plans" alt="">Neque porr</h3>
                            <p>Lorem ipsum dolor quis nostrudx ea comvoluptate velit esse cillum nulla pariatur.</p>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="big-button">
                <div class="big-b-text">
                    <p>Lorem Ipsum is simply text of typesetting industry</p>
                    <span>comvoluptate velit esse cillum dolore eu fugiat....</span>
                </div>
                <div class="big-b-btn">
                    <a href="#">Read More</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="recent-places">
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
            </div>
        </div>
    </div>
@endsection
