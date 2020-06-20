@extends('layouts.mainLayout')
@section('content')
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url(css/image1_mob.jpg)">
                <div class="carousel-caption text-center">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>

            <div class="carousel-item" style="background-image: url(css/image2_mob.jpg);">
                <div class="carousel-caption">
                    <h5 style="color: #636b6f; margin-bottom: 0.1rem">SALES EVERYWHERE</h5>
                    <a class="btn" href="">Read more</a>
                </div>
            </div>

            <div class="carousel-item" style="background-image: url(css/image3_mob.jpg);">
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

    <div class="services">
        <h1>Our services</h1>
    </div>
    <div class="card-deck">
        <div class="card text-center">
            <div class="card-header">
                Fast and safe delivery
            </div>
            <div class="card-body">
                <img src="css/delivery.png" alt="delivery">
                <p class="card-text">We deliver to anywhere in the territory of Uzbekistan within <strong>3 working
                        day</strong></p>
            </div>
        </div>

        <div class="card text-center">
            <div class="card-header">
                Guarantee
            </div>
            <div class="card-body">
                <img src="css/guarantee.png" alt="guarantee">
                <p class="card-text">We guarantee all our products for <strong>1 year</strong></p>
            </div>
        </div>

        <div class="card text-center">
            <div class="card-header">
                Pay any way
            </div>
            <div class="card-body">
                <img src="css/pay.jpg" alt="pay">
                <p class="card-text">You can pay by card online or by cash after receiving product</p>
            </div>
        </div>
    </div>
@endsection
