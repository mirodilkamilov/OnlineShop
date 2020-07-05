@extends('layouts.mainLayout')
@section('content')
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" id="firstSlide">
                <div class="carousel-caption text-center">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>

            <div class="carousel-item" id="secondSlide">
                <div class="carousel-caption">
                    <h5 id="saleText">SALES EVERYWHERE</h5>
                    <a class="btn" href="">Read more</a>
                </div>
            </div>

            <div class="carousel-item" id="thirdSlide">
                <div class="carousel-caption">
                    <a class="btn" id="join" href="">Join us</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!--    Script for not pausing slider in bigger screens    -->
    <script>
        if(screen.width >= 961) {
            $('.carousel').carousel({
                pause: false
            })
        }
    </script>

    <h1 id="Hservices">Our services</h1>
    <div class="services">
        <div class="delivery">
            <div class="imgpart">
                <img src="css/images/delivery.png" alt="">
            </div>
            <div class="text">
                <h5>Fast and safe delivery</h5>
                <p class="card-text">We deliver anywhere in the territory of Uzbekistan within three working days</p>
            </div>
        </div>

        <div class="guarantee">
            <div class="imgpart">
                <img src="css/images/guarantee.png" alt="">
            </div>
            <div class="text">
                <h5>Guarantee</h5>
                <p class="card-text">We guarantee all our products for one year</p>
            </div>
        </div>

        <div class="pay">
            <div class="imgpart">
                <img src="css/images/pay.png" alt="">
            </div>
            <div class="text">
                <h5>Pay any way</h5>
                <p class="card-text">You can pay by card online or by cash after receiving a product</p>
            </div>
        </div>

        <div class="support">
            <div class="imgpart">
                <img src="css/images/support.gif" alt="">
            </div>
            <div class="text">
                <h5>Product service</h5>
                <p class="card-text">We can service our products cheap if it is needed</p>
            </div>
        </div>
    </div>
@endsection
