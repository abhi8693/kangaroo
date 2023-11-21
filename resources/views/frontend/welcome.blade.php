@extends('frontend.admin')
@section('content')
<div class="slider-section">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 p-0">
                <div class="banner-txt">
                    <h4>Web Development Company </h4>
                    <h1>We’ll Build You An <span>Amazing Website!</span></h1>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dolores soluta impedit voluptatum sed molestiae rem</p>
                    <a href="#" class="get-btn">Get Started</a>
                </div>
            </div>
            <div class="col-md-2"></div>

            <div class="col-md-4 right-area">


                <div class="arrow-img">
                    <img src="{{asset('assetsf/img/side-arrow.png')}}" class="floating">
                </div>


                <div class="aside-form">
                    @if(session()->has('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                    @if(session()->has('error'))
                    <div class="alert alert-danger">{{session('error')}}</div>
                    @endif
                    <form action="{{route('store')}}" method="post">
                        @csrf
                        <h3>Request A Quote</h3>

                        <div class="form-group">
                            <input type="text" placeholder="Name" name="name" id="name">
                            <span style="color:red"> @error('name')
                                {{$message}}
                                @enderror
                            </span>
                        </div>


                        <div class="form-group">
                            <input type="text" placeholder="Email" name="email" id="email">
                            <span style="color:red"> @error('email')
                                {{$message}}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group">
                            <input type="text" id="phone" placeholder="Phone Number" name="phone">
                            <span style="color:red"> @error('phone')
                                {{$message}}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group">
                            <select name="category">
                                <option>Type of Website</option>
                                @foreach($categories as $cat)
                                <option>{{$cat->title}}</option>
                                @endforeach
                            </select>
                            <span style="color:red"> @error('category')
                                {{$message}}
                                @enderror
                            </span>

                        </div>

                        <div class="form-group">
                            <select name="niche">

                                <option>Select Niche</option>
                                @foreach($niches as $niche)
                                <option>{{$niche->title}}</option>
                                @endforeach
                            </select>
                            <span style="color:red"> @error('niche')
                                {{$message}}
                                @enderror
                            </span>

                        </div>


                        <div class="form-group">
                            <select name="type">
                                <option>Website Type</option>
                                @foreach($types as $type)
                                <option>{{$type->title}}</option>
                                @endforeach
                            </select>
                            <span style="color:red"> @error('type')
                                {{$message}}
                                @enderror
                            </span>

                        </div>

                        <div class="form-group">
                            <select name="budget">
                                <option>Select Budget</option>
                                @foreach($budgets as $budget)
                                <option>{{$budget->price}}</option>
                                @endforeach
                            </select>
                            <span style="color:red"> @error('budget')
                                {{$message}}
                                @enderror
                            </span>


                        </div>



                        <button>Submit</button>

                    </form>
                </div>

            </div>
        </div>
    </div>

</div>



<div class="how">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="title-bar">
                    <div class="part-title">
                        <h5>Follow these Steps</h5>
                        <h3>How it Works?</h3>
                    </div>
                    <div class="empty-space"></div>


                </div>
            </div>
        </div>


        <div class="row steps-type">
            <div class="col-md-4 p-0">
                <div class="step-box">
                    <div class="step-icon">
                        <i class="las la-box-open"></i>
                    </div>

                    <div class="step-content">
                        <h2>Step 1</h2>
                        <h4>Select Package</h4>
                        <!-- <p>We offer a range of packages to cater to your specific needs.</p> -->

                    </div>
                </div>
            </div>

            <div class="col-md-4 p-0">
                <div class="step-box  step2">
                    <i class="las la-laptop-code"></i>
                    <h2>Step 2</h2>
                    <h4>Select Template </h4>
                    <!-- <p>Our website templates are designed to make your online presence stand out.</p> -->

                </div>
            </div>


            <div class="col-md-4 p-0">
                <div class="step-box step3">
                    <i class="las la-check"></i>
                    <h2>Step 3</h2>
                    <h4>Confirm Order</h4>
                    <!-- <p>You're just a step away from launching your online presence.          </p> -->

                </div>
            </div>
        </div>

        <div class="empty-space"></div>


        <div class="row justify-content-center">
            <div class="col-md-4 text-center">

                <a href="#" class="get-btn">Get Started</a>

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
            <div class="col-md-3">
                <div class="package-box">
                    <div class="package-header">
                        <h4>Basic Website</h4>
                        <div class="price">
                            $250
                        </div>
                    </div>

                    <div class="package-content">
                        <ul>
                            <li>3 Page Website </li>
                            <li>Perfect for Startups </li>
                            <li>Theme Based Design </li>
                            <li>Original Content </li>
                            <li>Complete in 5 Business Days </li>
                            <li>Content Management System </li>
                            <li>Sliders </li>
                            <li>Responsive Design </li>
                            <li>Social Media Integration </li>
                            <li>SEO Features</li>
                            <li>Blog Setup</li>
                        </ul>
                        <a href="#" class="order-btn">Order Now</a>
                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <div class="package-box">
                    <div class="package-header">
                        <h4>Intermediate Website</h4>
                        <div class="price">
                            $500
                        </div>
                    </div>

                    <div class="package-content">
                        <ul>
                            <li>3 Page Website </li>
                            <li>Perfect for Startups </li>
                            <li>Theme Based Design </li>
                            <li>Original Content </li>
                            <li>Complete in 5 Business Days </li>
                            <li>Content Management System </li>
                            <li>Sliders </li>
                            <li>Responsive Design </li>
                            <li>Social Media Integration </li>
                            <li>SEO Features</li>
                            <li>Blog Setup</li>
                        </ul>
                        <a href="#" class="order-btn">Order Now</a>
                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <div class="package-box">
                    <div class="package-header">
                        <h4>Professional Website</h4>
                        <div class="price">
                            $900
                        </div>
                    </div>

                    <div class="package-content">
                        <ul>
                            <li>3 Page Website </li>
                            <li>Perfect for Startups </li>
                            <li>Theme Based Design </li>
                            <li>Original Content </li>
                            <li>Complete in 5 Business Days </li>
                            <li>Content Management System </li>
                            <li>Sliders </li>
                            <li>Responsive Design </li>
                            <li>Social Media Integration </li>
                            <li>SEO Features</li>
                            <li>Blog Setup</li>
                        </ul>
                        <a href="#" class="order-btn">Order Now</a>
                    </div>
                </div>
            </div>




            <div class="col-md-3">
                <div class="package-box">
                    <div class="package-header">
                        <h4>Custom Package</h4>
                        <div class="price">
                            $1200
                        </div>
                    </div>

                    <div class="package-content">
                        <ul>
                            <li>3 Page Website </li>
                            <li>Perfect for Startups </li>
                            <li>Theme Based Design </li>
                            <li>Original Content </li>
                            <li>Complete in 5 Business Days </li>
                            <li>Content Management System </li>
                            <li>Sliders </li>
                            <li>Responsive Design </li>
                            <li>Social Media Integration </li>
                            <li>SEO Features</li>
                            <li>Blog Setup</li>
                        </ul>
                        <a href="#" class="order-btn">Order Now</a>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>




<div class="call-block-act">
    <div class="container">
        <div class="row align-items-center justify-content-center">

            <div class="col-md-8">
                <div class="cta-bar-text">
                    <h3>24/7 Customer Support</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum expedita reprehenderit ut ratione enim beatae dolorem libero quam voluptatibus</p>
                    <div class="act-call-btn">
                        <div class="act-btn">
                            <a href="#" class="cta-btn">Contact Us</a>
                        </div>


                        <div class="act-call">
                            <a href="#"><i class="las la-phone"></i> +61 123 456 7890</a>
                        </div>
                    </div>

                </div>
            </div>


        </div>

    </div>
</div>
</div>










<div class="why-us wow fadeInUp animated">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="title-bar">
                    <div class="part-title">
                        <h5>Templates</h5>
                        <h3>Choose Template </h3>
                    </div>


                </div>
            </div>
        </div>



        <div class="empty-space"></div>
        <div class="row">
            
            @foreach($templates as $template)
            <div class="col-md-4 p-3">
                <div class="service-box">
                    <img src="assets/img/{{$template->image}}">
                    <div class="service-content">
                        <h3><a href="{{route('front.detail',$template->slug)}}">{{$template->title}}</a></h3>
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
                            <li> <a href="{{route('front.detail',$template->slug)}}" class="read-btn-link view-blue-btn">View Details</a></li>
                            <li> <a href="#" class="read-btn-link">Live Demo</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach






        </div>

        <br>

        <div class="row justify-content-center mt-4">
            <div class="col-md-4 text-center">

                <a href="#" class="view-more-btn">View More</a>

            </div>
        </div>
    </div>
</div>










<div class="section testimonials wow fadeInUp animated ">
    <div class="container">




        <div class="row align-items-center justify-content-center">

            <div class="col-md-12">


                <div class="test-title">
                    <h5>Testimonials</h5>
                    <h3>What Our Customers Says?</h3>

                </div>


            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div id="carouselExampleCaptions" class="carousel slide testimonial-box" data-ride="carousel">
                    <ol class="carousel-indicators d-none">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">



                        <div class="carousel-item active">

                            <div class="testimoni-box text-center">

                                <img src="{{asset('assetsf/img/user.jpeg')}}">


                                <h5 class="text-dark">John Doe</h5>
                                <ul class="star-ratings">
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                </ul>




                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus consequuntur quaerat itaque,
                                    non
                                    dolor quam nisi a recusandae delectus nulla illo sapiente amet ab ipsam ut. Temporibus consequuntur
                                    quaerat itaque, non dolor quam nisi a recusandae delectus nulla illo sapiente.</p>

                            </div>
                        </div>




                        <div class="carousel-item">

                            <div class="testimoni-box text-center">

                                <img src="{{asset('assetsf/img/user.jpeg')}}">


                                <h5 class="text-dark">John Doe</h5>
                                <ul class="star-ratings">
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                </ul>




                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus consequuntur quaerat itaque,
                                    non
                                    dolor quam nisi a recusandae delectus nulla illo sapiente amet ab ipsam ut. Temporibus consequuntur
                                    quaerat itaque, non dolor quam nisi a recusandae delectus nulla illo sapiente.</p>

                            </div>
                        </div>


                        <div class="carousel-item">

                            <div class="testimoni-box text-center">

                                <img src="{{asset('assetsf/img/user.jpeg')}}">


                                <h5 class="text-dark">John Doe</h5>
                                <ul class="star-ratings">
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                </ul>




                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus consequuntur quaerat itaque,
                                    non
                                    dolor quam nisi a recusandae delectus nulla illo sapiente amet ab ipsam ut. Temporibus consequuntur
                                    quaerat itaque, non dolor quam nisi a recusandae delectus nulla illo sapiente.</p>

                            </div>
                        </div>


                    </div>

                    <div class="testi-nav">
                        <button class="carousel-control-prev testimonail-btn" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next testimonail-btn" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>

                    <div class="empty-space"></div>

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