<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ config('app.name', 'office work' )  }} </title> 
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href=" {{asset('asset/fonts/icomoon/style.css')}} ">
  
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/magnific-popup.css')}}">
    <link rel="stylesheet" href=" {{asset('asset/css/jquery-ui.css')}} ">
    <link rel="stylesheet" href=" {{asset('asset/css/owl.carousel.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('asset/css/owl.theme.default.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('asset/css/bootstrap-datepicker.css')}} ">
    <link rel="stylesheet" href=" {{asset('asset/css/animate.css')}} ">
    <link rel="stylesheet" href=" {{asset('asset/css/bootstrap-rtl.css')}} ">
    <link rel="stylesheet" href=" {{asset('asset/css/fontawesome.min.css')}} ">  
    <link rel="stylesheet" href=" {{asset('asset/fonts/flaticon/font/flaticon.css')}} ">
  
    <link rel="stylesheet" href=" {{asset('asset/css/aos.css')}} ">
    <link rel="stylesheet" href=" {{asset('asset/css/style.css')}} ">
    <link rel="stylesheet" href=" {{asset('asset/css/style1.css')}} ">
    <link rel="stylesheet" href=" {{asset('asset/css/filepond.css')}} ">
</head>
<body>
    <div class="site-wrap">
        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
@include('include.navbar')

    @yield('content')
 

@include('include.footer') 

   
@include('include.jsfile') 
</div> 
</body>
</html>