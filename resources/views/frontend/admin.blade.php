
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="keywords" content="Website Design, Web Development, Custom Websites, Responsive Design, E-commerce Solutions, Online Presence, SEO Services, Digital Marketing, Website Templates, Mobile-Friendly Design, User Experience (UX), Affordable Web Design, Small Business Websites, Corporate Web Solutions, Creative Web Design">
  <meta name="description" content="Kangaroo Web">


  <title>Kangaroo Web</title>


  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">



  <link rel="stylesheet" href="{{asset('assetsf/css/bootstrap.css')}}">

  <link rel="stylesheet" href="{{asset('assetsf/vendor/animate/animate.css')}}">

  <link rel="stylesheet" href="{{asset('assetsf/style.css')}}">


</head>

<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>
      
  @include('frontend.inc.header')

@yield('content')

@include('frontend.inc.footer')
</body>
</html>