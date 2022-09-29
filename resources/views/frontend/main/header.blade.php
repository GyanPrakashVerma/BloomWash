<!doctype html>
<html  lang="zxx">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bloom Wash</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/img/favicon.png')}}">
    <!-- CSS here -->
     {{-- <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('frontend/assets/css/slicknav.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('frontend/assets/css/flaticon.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('frontend/assets/css/progressbar_barfiller.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('frontend/assets/css/gijgo.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('frontend/assets/css/animated-headline.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('frontend/assets/css/fontawesome-all.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('frontend/assets/css/themify-icons.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('frontend/assets/css/slick.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('frontend/assets/css/nice-select.css')}}"> --}}

    <link rel="stylesheet" href="{{asset('frontend/assets/css/slicknav.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ba24b37900.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- bootstrap icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- AOS Animation css  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

   

</head>
<style>
    .home {
        color: #212529;
        /* border-bottom: 3px solid #212529; */
    }
    input{
        border-radius:30px;
    }
    .container-fluid{
        margin: 0!important;
        Padding: auto!important;
        padding-left: 0!important;
        padding-right: 0!important;
    }
    .row{
        margin-left: 0!important;
        margin-right: 0!important;
    }
    @media(max-width:768px) {
            .service_main_img {
                display: none;
            }
            .boxx{
                display: none;
            }
        }
        .boxx{
            height: 50vh;
            margin: auto;
        
            background: url('https://images.unsplash.com/photo-1563310196-3f10e40dd789?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover
        }
        .box{
            display: flex;
            padding-top: 13vh;
            justify-content: space-between;
        }
        .box .item {
            width: 23%;
            height: 25vh;
            background-color: rgba(212, 201, 201, 0.3);
            display: flex;
            justify-content: center;
            align-self: center;
            box-shadow: 2px 5px 15px rgb(67, 65, 65);
            border-radius: 10px;
            backdrop-filter: blur(2px);
        }
        .box .item .counter {
            align-self: center;
            font-size: 50px;
            color:#293464;
            font-family: 'Josefin Sans', sans-serif;
        }
        .box .item p {
            align-self: center;
            font-size: 30px;
            color:#293464;
            font-family: 'Josefin Sans', sans-serif;
        }
        
@media only screen and (min-width: 992px) and (max-width: 1400px) {
    #contact{
        display: none!important;
    }
}
</style>


<body style="padding: 0!important;">

    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header">
                <!-- Logo -->
                <div class="header-left">
                    <div class="logo">
                        <a href="{{route('home')}}" style="color:black; font-weight: bold;">
                            <img src="{{asset('setting_img/'.$setting->logo) }}" height="92px" alt="">
                            {{-- <h1>BLOOM WASH</h1> --}}
                        </a>
                    </div>
                    <div class="menu-wrapper  d-flex align-items-center">
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a class="home" id="home" href="{{route('home')}}">Home</a></li>
                                    <li class="about"><a id="about" href="{{route('about')}}">About</a></li>
                                    <!-- <li><a href="services.html">Services</a></li> -->
                                    <!-- <li><a href="blog.html">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog_details.html">Blog Details</a></li>
                                            <li><a href="elements.html">Element</a></li>
                                        </ul>
                                    </li> -->
                                    <li class="service"><a id="service" href="{{route('service')}}">Services</a></li>
                                    <li class="pricing"><a id="pricing" href="{{route('pricing')}}">Pricing</a></li>
                                    <li class="pricing"><a id="gallery" href="{{route('gallery')}}">Gallery</a></li>

                                    <li class="contact_menu"><a id="contact" href="{{route('contact')}}">Contact</a></li>

                                    <!-- <li><a href="contact.html">Contact</a></li> -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="header-right d-none d-lg-block">
                    <a href="tel:{{$setting->contact_no}}" class="header-btn1"><img src="{{asset('frontend/assets/img/icon/call.png')}}" alt=""> +91-{{$setting->contact_no}}</a>
                    <a href="#" data-toggle="modal" data-target="#appointmentModalLabel" class="header-btn2">Make an
                        Appointment</a>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
                
                
                
                 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
            </div>
        </div>
        <!-- Header End -->
        
        
        
        <style>
        
        .float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:100px;
	right:28px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}




.my-float{
	margin-top:16px;
}
        
        </style>
        
    
        
                <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>




<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/632301be54f06e12d894e236/1gd0btkc6';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

   
                
    </header>