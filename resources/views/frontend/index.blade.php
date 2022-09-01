@extends('frontend.main.main')
@section('content')
<style>
    .contact_form{
        background: #3c5b7abf;
        border-radius: 30px;
        top: -70px;
        padding: 1rem;
        


    }
    .form-contact{

    }
    .contact_form  .form-contact input{
        border-radius: 30px;
    }
    .contact_form  .form-contact textarea{
        border-radius: 30px;
    }
    .contact_form  .form-contact button{
        border-radius: 30px;
    }
    @media(max-width:768px){
       .contact_form{
        display: none;
       } 
    }
</style>
    <main>
        <!--? slider Area Start-->
        <section class="slider-area hero-overly" style="max-height:90vh;">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-end ">
                    <div class="container-fluid px-5 banner_container" style="position: absolute; ">
                        <div class="row justify-content-center align-items-center px-3">
                            <div class="col-xl-7 col-lg-7 col-md-7 banner_tagline">
                                <h1 data-aos="fade-right" data-aos-duration="500" style="float:left;">We take care about cleenness of your cloth</h1>
                                <!-- <p data-animation="fadeInLeft" data-delay="0.4s"></p> -->
                                <!-- <a href="#" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s"> Services</a> -->
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-9 contact_form" >
                                <h3 class="text-center text-light mb-3">Contact Us</h3>
                                <!-- <div class="col-lg-8"> -->
                                <form class="form-contact" action="contact_process.php" method="post" id="" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control valid" name="name" id="name" type="text"  placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control valid" name="email" id="email" type="email"  placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <input class="form-control" name="subject" id="subject" type="text"  placeholder="Enter Subject">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="5" ></textarea>
                                            </div>
                                        </div>
                                        <div class="col-9 ">
                                            <div class="form-group mt-3">
                                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
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

        <!--? About Area  -->
        <section class="about-area2 pb-bottom mt-30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img " data-aos="zoom-out-right">
                            <img src="https://boltlaundry.com/wp-content/uploads/2019/10/washandfoldnorfolkva.jpg" alt="">
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
                            <p class="mb-30">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, vel voluptatem. Rerum quas reiciendis quibusdam ipsa quod harum minus facilis?</p>

                            <a href="about.html" class="btn">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->

        <!-- Call us section -->
        <section class="container" data-aos="fade-up">
            <section class="wantToWork-area" data-background="{{asset('frontend/assets/img/gallery/section_bg01.png')}}">
                <div class="wants-wrapper w-padding2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-8 col-lg-9 col-md-7">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>Call us for a service</h2>
                                <p>We deliver the goods to the most complicated places on earth</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5">
                            <a href="callTO:{{$setting->contact_no}}" class="btn wantToWork-btn"><img src="{{asset('frontend/assets/img/icon/call2.png')}}" alt=""> Call Us
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
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <!-- <img src="{{asset('frontend/assets/img/icon/services-icon1.svg')}}" alt=""> -->
                                <i class="fa-solid fa-truck"></i>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">We collect your clothes</a></h5>
                                <p>The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <i class="fa-solid fa-hands-bubbles"></i>

                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Wash your clothes</a></h5>
                                <p>The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <i class="fa-solid fa-truck-fast"></i>


                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Get delivery</a></h5>
                                <p>The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End -->

        <!-- services section  -->
        <section class="container-fluid pb-5">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <span class="element">Services</span>
                        <h2>Services we offer</h2>
                    </div>
                </div>
            </div>
            <section class="wantToWork-area" data-background="{{asset('frontend/assets/img/gallery/section_bg01.png')}}">
                <div class="wants-wrapper" style="padding:2px 30px;">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-4 col-lg-4 col-md-5" data-aos="fade-right" data-aos-easing="ease-in-sine">
                            <div class="wantToWork-caption wantToWork-caption2 my-5">
                                <h2><i class="bi bi-arrow-right-circle mr-3"></i>LAUNDRY</h2>
                                <p>We deliver the goods to the most complicated places on earth</p>
                            </div>
                            <div class="wantToWork-caption wantToWork-caption2 my-5">
                                <h2> <i class="bi bi-arrow-right-circle mr-3"></i>PRE WASH CARE</h2>
                                <p>We deliver the goods to the most complicated places on earth</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-5">
                            <div class="wantToWork-caption wantToWork-caption2 ">
                                <img src="https://www.dhobilite.com/image/dryclean-service.webp">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-5" data-aos="fade-right" data-aos-easing="ease-in-sine">
                            <div class="wantToWork-caption wantToWork-caption2 my-5">
                                <h2> <i class="bi bi-arrow-right-circle mr-3"></i>DRY CLEANING </h2>
                                <p>We deliver the goods to the most complicated places on earth</p>
                            </div>
                            <div class="wantToWork-caption wantToWork-caption2 my-5">
                                <h2> <i class="bi bi-arrow-right-circle mr-3"></i>STEAM PRESS</h2>
                                <p>We deliver the goods to the most complicated places on earth</p>
                            </div>
                        </div>
                        <!-- <div class="col-xl-3 col-lg-3 col-md-5">
                            <a href="#" class="btn wantToWork-btn"><img src="{{asset('frontend/assets/img/icon/call2.png')}}" alt=""> Learn More</a>
                        </div> -->
                    </div>
                </div>
            </section>
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
                                <div class="img-box"><img src="{{asset('frontend/assets/img/gallery/testimonila1.png')}}" alt=""></div>
                                <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at,</p>
                                <p class="overview"><b>Name hdfh</b>email@mail.com
                                </p>
                            </div>
                        @foreach ($feedback as $feeds)

                            <div class="carousel-item">
                                <div class="img-box"><img src="{{asset('images/'.$feeds->images)}}"></div>
                                <p class="testimonial">{{$feeds->message}}
                                </p>
                                <p class="overview"><b>{{$feeds->Name}}</b>{{$feeds->email}}
                                </p>
                            </div>

                            @endforeach

                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                            <i class="bi bi-arrow-left-circle"></i>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                            <i class="bi bi-arrow-right-circle"></i>
                        </a>
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
                    <a href="{{asset('galleries/'.$item->images)}}" class="img-pop-up">
                        <div class="single-gallery-image" style="background: url({{asset('galleries/'.$item->images)}});"></div>
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
                    <iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=varanasi&t=k&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
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