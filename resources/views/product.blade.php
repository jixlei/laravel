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
            <h3>GALLERY</h3>
            <h5> </h5>
            <div class="clearfix"> </div>
            <div class="gallery-grids">
                <div class="col-md-4 gallery-grid">
                    <a href="images/g1.jpg" class="b-link-stripe b-animate-go  swipebox img-responsive" title="Image Title" class="b-link-stripe b-animate-go  swipebox"
                        title="Image Title">
                        <img src="images/g1.jpg" class="img-responsive" alt="">
                    </a>
                    <h4>Aenean nonummy hendrerit</h4>
                    <p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum
                        sociis natoque penatibus et magnis dis parturient montes.</p>
                    <div class="gallery-button">
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-md-4 gallery-grid grid2">
                    <a href="images/slider3.jpg" class="b-link-stripe b-animate-go  swipebox  img-responsive" title="Image Title" class="b-link-stripe b-animate-go  swipebox"
                        title="Image Title">
                        <img src="images/slider3.jpg" class="img-responsive" alt="">
                    </a>
                    <h4>nonummy hendrerit mauris</h4>
                    <p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum
                        sociis natoque penatibus et magnis dis parturient montes.</p>
                    <div class="gallery-button">
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-md-4 gallery-grid">
                    <a href="images/g1.jpg" class="b-link-stripe b-animate-go  swipebox  img-responsive" title="Image Title" class="b-link-stripe b-animate-go  swipebox"
                        title="Image Title">
                        <img src="images/g1.jpg" class="img-responsive" alt="">
                    </a>
                    <h4>hendrerit mauris. Phasellus</h4>
                    <p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum
                        sociis natoque penatibus et magnis dis parturient montes.</p>
                    <div class="gallery-button">
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="gallery-grids">
                <div class="col-md-4 gallery-grid">
                    <a href="images/g1.jpg" class="b-link-stripe b-animate-go  swipebox  img-responsive" title="Image Title" class="b-link-stripe b-animate-go  swipebox"
                        title="Image Title">
                        <img src="images/g1.jpg" class="img-responsive" alt="">
                    </a>
                    <h4>Fusce suscipit varius mi. Cum</h4>
                    <p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum
                        sociis natoque penatibus et magnis dis parturient montes.</p>
                    <div class="gallery-button">
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-md-4 gallery-grid grid2">
                    <a href="images/slider3.jpg" class="b-link-stripe b-animate-go  swipebox  img-responsive" title="Image Title" class="b-link-stripe b-animate-go  swipebox"
                        title="Image Title">
                        <img src="images/slider3.jpg" class="img-responsive" alt="">
                    </a>
                    <h4>sociis natoque penatibus et</h4>
                    <p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum
                        sociis natoque penatibus et magnis dis parturient montes.</p>
                    <div class="gallery-button">
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-md-4 gallery-grid">
                    <a href="images/g1.jpg" class="b-link-stripe b-animate-go  swipebox  img-responsive" title="Image Title" class="b-link-stripe b-animate-go  swipebox"
                        title="Image Title">
                        <img src="images/g1.jpg" class="img-responsive" alt="">
                    </a>
                    <h4>hendrerit mauris. Phasellus</h4>
                    <p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum
                        sociis natoque penatibus et magnis dis parturient montes.</p>
                    <div class="gallery-button">
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clear"> </div>
            <div class="projects-bottom-paination">
                <ul>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--End-image-gallery-->
        <div class="clearfix"> </div>
    </div>
</div>
@endsection