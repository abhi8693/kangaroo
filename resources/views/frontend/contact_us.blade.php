
@extends('frontend.admin')
@section('content')
<div class="pack-breadcumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcumb-text">
                    <h3>Contact Us</h3>
                    <ul class="bread-nav pack-nav">
                        <li>Home</li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="single-adderss-block">
                    <h3 class="mb-4">Contact Information</h3>
                    <ul class="info-list clearfix">
                        <li>
                            <i class="las la-map-marker-alt"></i>
                            <div class="add-info">
                                <b>Visit Us:</b>
                                <p class="grey-txt">Come say hello to our office</p>
                                <p>Address Here </p>
                            </div>
                        </li>
                        <li>
                            <i class="las la-phone"></i>
                            <div class="add-info">
                                <b>Call Us</b>
                                <p class="grey-txt">Suport team</p>
                                <p><a href="tel:+91-1234567890">+91-1234567890</a></p>
                                <p><a href="tel:+91-987654320">+91-987654320</a></p>
                            </div>
                        </li>
                        <li>
                            <i class="las la-envelope"></i>
                            <div class="add-info">
                                <b>Email Us</b>
                                <p class="grey-txt">Our friendly team is here to help</p>
                                <p><a href="mailto:info@ghumme.com">info@kangarooweb.com.au</a></p>

                            </div>

                        </li>
                    </ul>


                </div>
            </div>
            <div class="col-md-7">
                <div class="Contact-box-form">
                    <div class="sec-title text-left" style="margin-bottom:20px;">
                        <h2>Contact Us</h2>
                        <p>Get in touch with one of our expert team member by completing the form below:</p>
                    </div>
                    <div class="form-inner">
                        <form class="form-inline default-form" method="POST" id="contact-form" action="{{route('contacts.store')}}" novalidate="novalidate">
                            @csrf
                        <input type="hidden" name="">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="text" class="form-control " name="name" placeholder="Name" required="" aria-required="true" value="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="text" class="form-control " name="email" placeholder="Email" value="">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="text" class="form-control " name="phone" placeholder="Phone" required="" aria-required="true" value="">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="" aria-required="true" value="">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message"  class="form-control" placeholder="Message"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                    <button type="submit" class="theme-btn-two" name="submit-form">Submit Message</button>
                                </div>
                            </div>
                        </form>
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