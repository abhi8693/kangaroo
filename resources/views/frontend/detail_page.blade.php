@extends('frontend.admin')
@section('content')
<div class="pack-breadcumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcumb-text">

                    <div class="breadcumb-text">
                        <h3>Detail Page</h3>

                        <ul class="bread-nav pack-nav">
                            <li>Home</li>
                            <li>Details</li>
                        </ul>
                    </div>


                </div>


            </div>

        </div>
    </div>
</div>

<div class="detail-part">
    <div class="container">
        <div class="row">
           
            <div class="col-md-8">
                <div class="detail-left">
                    <div class="template-overview">
                        <div class="template-box">
                            <img src='{{asset("assets/img/$detail->image")}}' class="img-fluid">
                            <div class="preview-link">
                                <a href="#">Live Preview</a>
                            </div>
                        </div>
                        {!! $detail->description !!}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="booking-form">
                    <form method="post" action="#">
                        <h3>Request A Quote</h3>
                        <div class="form-group">
                            <input type="text" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Phone Number" name="phone">
                        </div>
                        <div class="form-group">
                            <select>
                                <option>Type of Website</option>
                                <option>Business</option>
                                <option>Personal</option>
                                <option>Organization</option>
                                <option>Others</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select>
                                <option>Select Niche</option>
                                <option>Business</option>
                                <option>Hotel</option>
                                <option>Resturaunat</option>
                                <option>Plumber</option>
                                <option>Doctor</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select>
                                <option>Website Type</option>
                                <option>Information</option>
                                <option>Ecommerce</option>
                                <option>App</option>
                                <option>Portal</option>
                                <option>Crypto</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select>
                                <option>Select Budget</option>
                                <option>$500-$5000</option>
                                <option>$5000-$12000</option>
                                <option>$20000+</option>
                            </select>
                        </div>
                        <button>Submit</button>
                    </form>
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