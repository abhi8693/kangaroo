@extends('frontend.admin')
@section('content')
<div class="pack-breadcumb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="breadcumb-text">
                    <h3>Templates</h3>
                    <ul class="bread-nav pack-nav">
                        <li>Home</li>
                        <li>Templates</li>
                    </ul>
                </div>


            </div>

        </div>
    </div>
</div>







<div class="temp-section">
    <div class="container-fluid">




        <div class="row">
            <div class="col-md-3">
   
                <div class="template-left-box">
                    <h3>Category</h3>
                    @foreach($categories as $cat)
                    <ul>
                        <li><a href="#">{{$cat->title}}</a> <span>1000</span></li>
                        
                    </ul>
                    @endforeach
                </div>
              
                           
            </div>

            <div class="col-md-9">

                <div class="row">
                    <div class="col-md-12">
                        <div class="category-title">
                            <h3>Wordpress Templates</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($templates as $template)
                    <div class="col-md-4">
                        <div class="service-box">
                            <img src='{{asset("assets/img/$template->image")}}'>
                            <div class="service-content p-0">
                                <h3><a href="#">{{$template->title}}</a></h3>


                                <div class="price-rate">
                                    <div class="rate">
                                        <ul>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="temp-price">
                                    {{$template->price}}
                                    </div>
                                </div>
                                <ul class="actions-btn">
                                    <li> <a href="{{route('front.detail',$template->slug)}}"class="read-btn-link view-blue-btn">View Details</a></li>
                                    <li> <a href="#" class="read-btn-link">Live Demo</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>



                    @endforeach
                </div>

                <div class="empty-space"></div>


                <div class="row mt-4">
                    <div class="page-number">
                        <ul>
                            <li><a href="#"><i class="las la-angle-left"></i> Prev</a></li>
                            <li><a href="#">Next <i class="las la-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>

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