@extends('frontend.main.main')
@section('content')
    <style>
        .container-fluid {
            /* width: 100%; */
            margin: 0;
            padding: auto;

        }
        #home {
            width: 100%;
            background: ;
            border-bottom: 3px solid #293464;
            margin: 0 auto;
            padding-bottom: 33px;
        }
        .contact_form {
            background: #3c5b7abf;
            border-radius: 30px;
            /* top: -70px; */
            margin: auto;
            padding: 1rem;
        }

       
        .contact_form .form-contact input {
            /* border-radius: 30px; */
            background: transparent;
            border: none;
            border-bottom: 2px solid #f9f9fa;
        }
        .contactForm{
            background: #293464;
            color: #fff;
        }

       

        .contact_form .form-contact button {
            border-radius: 30px;
        }


        .news-app-promo {
            box-sizing: border-box;
            background: radial-gradient(circle, rgba(56, 49, 128, 0.7959558823529411) 0%, rgba(19, 49, 124, 1) 100%);
            padding: 0.5em;
            margin-top: 1em;
        }

        .news-app-promo__section {
            display: inline-block;
            margin: 0 auto;
            position: relative;
            width: 100%;
            text-align: center;
            margin-top: 8px;
        }

        .news-app-promo-text {
            color: #fff;
            font-family: helvetica;
            min-width: 277px;
            border-right: 0.25em solid #fff;
            border-left: 0.25em solid #fff;
            padding: 0 1em;
            width: 35%;
            margin: 1em auto;
            display: block;
        }

        .news-app-promo-text__tagline {
            font-size: 1.09em;
        }

        .news-app-promo-text__download {
            font-size: 2.25em;
            font-weight: 600;
        }

        .news-app-promo-buttons {
            margin: 0 auto;
            max-width: 35%;
            display: block;
        }

        .news-app-promo-buttons__buttons {
            display: block;
        }

        .news-app-promo-buttons__logo {
            display: inline-block;
        }

        .news-app-promo-subsection {
            display: inline-block;
            margin: 0 auto;
            margin-right: 10px;
        }

        .news-app-promo__bbc-logo {
            display: inline-block;
            width: 106px;
            margin-bottom: 8px;
        }

        .news-app-promo__play-store,
        .news-app-promo__app-store {
            display: block;
            width: 161px;
            height: auto;
            margin-bottom: 8px;
        }

        .news-app-promo-subsection--link {
            text-decoration: none;
            border: 0;
        }

        .service_style {
            width: auto;
            background: #73ade4;
            margin: auto;
            border-radius: 50%;
            padding: 20px;
        }

        @media(max-width:768px) {
            .service_main_img {
                display: none;
            }
        }
    </style>
    <main>
        @if(Session::has('success'))
        <script>
          swal("Congrates!!!!","{{Session::get('success')}}","success",{button:"OK"});
      </script>
        @endif
        <!--? slider Area Start-->
        <section class="slider-area hero-overly" style="max-height:90vh;">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-end ">
                    <div class="container-fluid px-5 banner_container" style="position: absolute; ">
                        <div class="row justify-content-center align-items-center px-3">
                            <div class="col-xl-7 col-lg-7 col-md-7 banner_tagline m-auto" data-aos="fade-right" data-aos-duration="500">
                                <h1  style="float:left;">We take care about
                                    cleanness of your clothes...</h1>
                                 <p data-animation="fadeInLeft" data-delay="0.4s">
                                <a href="{{route('service')}}" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s"> Services</a>
                                 </p>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 m-auto contact_form" data-aos="fade-left" data-aos-duration="500">
                                <p class="text-center text-light mb-3">Contact Us</h3>
                                    <!-- <div class="col-lg-8"> -->
                                <form  class="form-contact" action="{{route('contact_store')}}" method="post" id=""
                                    novalidate="novalidate">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input class="form-control valid" name="name" id="name"
                                                    type="text" placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input class="form-control valid" name="email" id="email"
                                                    type="email" placeholder="Enter your email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input class="form-control valid" name="phone" id="phone"
                                                    type="text" placeholder="Phone">
                                            </div>
                                        </div>

                                        {{-- <div class="col-12">
                                            <div class="form-group">
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                  </select>
                                            </div>
                                        </div> --}}
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="address" id="message" placeholder="Address">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mt-3">
                                                <button type="submit"
                                                    class="btn w-100 contactForm  text-light">Send</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                                <!-- </div> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider Area End-->
        <!-- playstore Area start-->
        <section>
            <div class="container-fluid">
                <div id="newsspec-19854-app" class="news-app-promo row">
                    <div class="news-app-promo-text col-md-6">
                        <div class="news-app-promo-text__tagline">A Personal and Professional Cleaning</div><br>
                        <div class="news-app-promo-text__download">Download BloomWash™ Mobile App, Get 30% OFF on garment
                            cleaning*..</div>
                    </div>
                    <div class="news-app-promo__section col-md-6">
                        <div class="news-app-promo-subsection">
                            <img class="news-app-promo__bbc-logo rounded thumbnail"
                                src="{{ asset('setting_img/' . $setting->logo) }}" style="height:150px;width:200px;"
                                class="">
                        </div>
                        <div class="news-app-promo-subsection">
                            <a class="news-app-promo-subsection--link news-app-promo-subsection--playstore"
                                href="https://play.google.com/store/apps/details?id=bbc.mobile.news.ww&amp;hl=en"
                                target="_parent">
                                <img class="news-app-promo__play-store"
                                    src="//news.files.bbci.co.uk/include/newsspec/19854/assets/app-project-assets/google_play_store.svg"
                                    width="161" height="auto" border="0">
                            </a>
                            <a class="news-app-promo-subsection--link news-app-promo-subsection--appstore"
                                href="https://itunes.apple.com/us/app/bbc-news/id364147881?mt=8" target="_parent">
                                <img class="news-app-promo__app-store"
                                    src="//news.files.bbci.co.uk/include/newsspec/19854/assets/app-project-assets/ios_app_store.svg"
                                    width="161" height="auto" border="0">
                            </a>
                        </div>
                    </div>
                    <div class="news-app-promo__section">

                    </div>
                </div>
            </div>
        </section>
        <!-- playstore Area end-->

        <!--? About Area  -->
        <section class="about-area2 pb-bottom mt-30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img " data-aos="zoom-out-right">
                            <img src="{{asset('frontend/assets/img/about.jpg')}}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="about-caption mb-50" data-aos="zoom-out-right">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-25">
                                <h2>About Bloomwash</h2>
                            </div>
                            <p class="mb-20">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, tenetur.
                            </p>
                            <p class="mb-30">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, vel
                                voluptatem. Rerum quas reiciendis quibusdam ipsa quod harum minus facilis?</p>

                            <a href="{{ route('about') }}" class="btn">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->

        <!-- Call us section -->
        <section class="container" data-aos="fade-up">
            <section class="wantToWork-area"
                data-background="{{ asset('frontend/assets/img/gallery/section_bg01.png') }}">
                <div class="wants-wrapper w-padding2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-8 col-lg-9 col-md-7">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>Call us for a service</h2>
                                <p>We deliver the goods to the most complicated places on earth</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5">
                            <a href="callTO:{{ $setting->contact_no }}" class="btn wantToWork-btn"><img
                                    src="{{ asset('frontend/assets/img/icon/call2.png') }}" alt=""> Call Us
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!-- End -->

        <!--how we work -->
        <section class="services-area pt-top pb-20 mb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <span class="element">Our Process</span>
                            <h2>This is how we work</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <i class="fa-solid fa-bag-shopping"></i>
                            </div>
                            <div class="cat-cap">
                                <p class="m-0">Step 1</p>
                                <h5><a href="#">Bag up all your dirty clothes</a></h5>
                                <p>The automated process starts as soon as your clothes go into the machine. The outcome is
                                    gleaming clothes!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <!-- <img src="{{ asset('frontend/assets/img/icon/services-icon1.svg') }}" alt=""> -->
                                <i class="fa-solid fa-truck"></i>
                            </div>
                            <div class="cat-cap">
                                <p class="m-0">Step 2</p>
                                <h5><a href="#">We collect your clothes</a></h5>
                                <p>The automated process starts as soon as your clothes go into the machine. The outcome is
                                    gleaming clothes!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <i class="fa-solid fa-hands-bubbles"></i>

                            </div>
                            <div class="cat-cap">
                                <p class="m-0">Step 3</p>
                                <h5><a href="#">Wash your clothes</a></h5>
                                <p>The automated process starts as soon as your clothes go into the machine. The outcome is
                                    gleaming clothes!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <i class="fa-solid fa-truck-fast"></i>


                            </div>
                            <div class="cat-cap">
                                <p class="m-0">Step 4</p>
                                <h5><a href="#">Get delivery</a></h5>
                                <p>The automated process starts as soon as your clothes go into the machine. The outcome is
                                    gleaming clothes!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End -->

        <!-- services section  -->
        <section class="pb-5">
            <div class="row justify-content-center" style="margin-left: 0px!important;margin-right:0px!important;">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <span class="element">Services</span>
                        <h2>Services we offer</h2>
                    </div>
                </div>
            </div>
            <div class="wantToWork-area" data-background="{{ asset('frontend/assets/img/gallery/section_bg01.png') }}"
                style="padding-top: 10px">
                <div class="container wants-wrapper" style="padding:2px 30px;">
                    <div class="row align-items-center justify-content-between p-0"
                        style="margin-left: 0px!important;margin-right:0px!important;">
                        <div class="col-xl-4 col-lg-4 col-md-5 text-center" data-aos="fade-right"
                            data-aos-easing="ease-in-sine">
                            <div class="wantToWork-caption wantToWork-caption2 my-5">
                                <h2><i class="fa-solid fa-shirt text-light border "
                                        style="border-radius: 50%;padding:20px;margin:auto"></i> LAUNDRY</h2>

                                <p>We use state-of-the-art front loading washing machines and premium detergents for wash
                                    fold and laundry services to give your clothes that special care it needs.
                                </p>
                            </div>
                            <div class="wantToWork-caption wantToWork-caption2 my-5">
                                <h2> <i class="fa-solid fa-shirt text-light border "
                                        style="border-radius: 50%;padding:20px;margin:auto"></i> STEAM PRESS</h2>
                                <p>We use top quality press to give you wrinkle free ironing to give a finish to your valued
                                    garment that cannot be achieved at home
                                </p>
                            </div>
                            <div class="wantToWork-caption wantToWork-caption2 my-5">
                                <h2> <i class="fa-solid fa-shirt text-light border "
                                        style="border-radius: 50%;padding:20px;margin:auto"></i> DRY CLEANING</h2>
                                <p>We use various best available technology and machines to increase the longevity of your
                                    favourite garments
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-5 p-0">
                            <div class="wantToWork-caption wantToWork-caption2" style="margin-bottom: -188px;">
                                <img class="service_main_img" src="{{ asset('frontend/assets/img/woman.webp') }}"
                                    style="height: 560px">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-5 text-center" data-aos="fade-right"
                            data-aos-easing="ease-in-sine">
                            <div class="wantToWork-caption wantToWork-caption2 my-5">
                                <h2> <i class="fa-solid fa-car text-light border "
                                        style="border-radius: 50%;padding:20px;margin:auto"></i> CAR CLEANING </h2>
                                <p>We provide from basic wash to detailing services for all type of vehicles and that too on
                                    your door step.

                                </p>
                            </div>
                            <div class="wantToWork-caption wantToWork-caption2 my-5">
                                <h2> <i class="fa-solid fa-shoe-prints text-light border "
                                        style="border-radius: 50%;padding:20px;margin:auto"></i> SHOES CLEANING </h2>
                                <p>Shoe speaks louder than words, we can revive their look and enhance their life.</p>
                            </div>
                            <div class="wantToWork-caption wantToWork-caption2 my-5">
                                <h2> <i class="fa-solid fa-bag-shopping text-light border "
                                        style="border-radius: 50%;padding:20px;margin:auto"></i> ACCESSORIES</h2>
                                <p>Cleaning a handbag or any other accessories, such as purses or jackets. We use safe
                                    cleaning agents to ensure that your valuable possession is not harmed in any way.</p>
                            </div>
                            <!-- <div class="col-xl-3 col-lg-3 col-md-5">
                                    <a href="#" class="btn wantToWork-btn"><img src="{{ asset('frontend/assets/img/icon/call2.png') }}" alt=""> Learn More</a>
                                </div> -->
                        </div>
                    </div>
                </div>
        </section>

        <section class="container offer-services pb-bottom2 pt-5">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <span class="element">Testimonial</span>
                        <h2>What People Say About Us</h2>
                    </div>
                </div>
            </div>
            <div class="container ">
                <div class="row p-2">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="img-box"><img
                                        src="{{ asset('frontend/assets/img/gallery/testimonila1.png') }}" alt="">
                                </div>
                                <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem
                                    tempor, varius quam at,</p>
                                <p class="overview"><b>Name hdfh</b>email@mail.com
                                </p>
                            </div>
                            @foreach ($feedback as $feeds)
                                <div class="carousel-item">
                                    <div class="img-box"><img src="{{ asset('images/' . $feeds->images) }}"></div>
                                    <p class="testimonial">{{ $feeds->message }}
                                    </p>
                                    <p class="overview"><b>{{ $feeds->Name }}</b>{{ $feeds->email }}
                                    </p>
                                </div>
                            @endforeach

                        </div>
                        <!-- Carousel controls -->
                        {{-- <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                            <i class="bi bi-arrow-left-circle"></i>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                            <i class="bi bi-arrow-right-circle"></i>
                        </a> --}}
                    </div>
                </div>
            </div>

        </section>
        <section class="mt-3 pb-5 boxx">
            <div class="container">
                <div class="box">
                    <div class="item">
                        <p class="counter" data-speed="1000">3</p><br>
                        {{-- <p class="text-center">Places Serve</p> --}}
                    </div>
                    <div class="item">
                        <p class="counter" data-speed="1000">150</p>
                        {{-- <p class="text-center">Happy Customers</p> --}}
                    </div>
                    <div class="item">
                        <p class="counter" data-speed="1000">2500</p>
                        {{-- <p class="text-center">Total Product</p> --}}
                    </div>
                </div>
            </div>
        </section>
        <section class="container offer-services pb-bottom2 pt-5">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <span class="element">Gallery</span>
                        <h2>Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row p-2">
                    @foreach ($gallery as $item)
                        <div class="col-md-3 mb-2">
                            <a href="{{ asset('galleries/' . $item->images) }}" class="img-pop-up">
                                <div class="single-gallery-image"
                                    style="background: url({{ asset('galleries/' . $item->images) }});"></div>
                            </a>
                        </div>
                    @endforeach


                </div>

            </div>

        </section>

        <!--?  Map Area start  -->
        <div class="Map-area">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="100%" height="400" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=varanasi&t=k&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0"
                        scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a href="https://123movies-to.org"></a><br />
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 400px;
                            width: "100%";
                        }
                    </style><a href="https://www.embedgooglemap.net">google maps for my website</a>
                    <style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 400px;
                            width: "100%";
                        }
                    </style>
                </div>
            </div>
        </div>
        <!-- Map Area End -->
    </main>
@endsection
