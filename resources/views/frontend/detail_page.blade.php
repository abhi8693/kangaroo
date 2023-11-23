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
                @if(session()->has('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                    @if(session()->has('error'))
                    <div class="alert alert-danger">{{session('error')}}</div>
                    @endif
                    <form method="post" action="{{route('enquiries.store')}}">
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
                            <input type="text" placeholder="Phone Number" name="phone" id="phone">
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
                            </select>
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