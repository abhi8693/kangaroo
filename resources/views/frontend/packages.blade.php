@extends('frontend.admin')
@section('content')

<div class="pack-breadcumb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="breadcumb-text">
                    <h3>Packages</h3>
                    <ul class="bread-nav pack-nav">
                        <li>Home</li>
                        <li>Packages</li>
                    </ul>
                </div>


            </div>

        </div>
    </div>
</div>







<div class="packages-section">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="title-bar">
                    <div class="part-title">
                        <h5>Best Packages for you</h5>
                        <h3>Select Package</h3>
                    </div>
                    <div class="empty-space"></div>


                </div>
            </div>
        </div>


        <div class="row">
            @foreach ($packages as $package)
            <div class="col-md-3">
                <div class="package-box">
                    <div class="package-header">
                        <h4>   {{$package->title}}</h4>
                        <div class="price">
                        {{$package->price}}
                        </div>
                    </div>

                    <div class="package-content">
                    {!! $package->description !!}
                        <a href="#" class="order-btn">Order Now</a>
                    </div>
                </div>
            </div>

            @endforeach





        </div>
    </div>
</div>





</div>









<div class="cta-action">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <p>24/7 Customer Support</p>
                <h3>
                    Make your Website Today!
                </h3>
            </div>
            <div class="col-md-4 text-right">
                <a href="#" class="join-btn">Get Started</a>
            </div>
        </div>
    </div>
</div>

@endsection