@extends('frontend.main.main')
@section('content')
<style>
     #about{
    width: 100%;
    background: ;
    border-bottom:3px solid #293464;
    margin: 0 auto;
    padding-bottom: 33px;
   
}
</style>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2 section-bg2 hero-overly" style="height: 300px"
            data-background="{{asset('frontend/assets/img/hero/hero2.png')}}">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2" style="margin-bottom: 90px">
                                <h2>About us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? About Area  -->
        <section class="about-area2 section-padding40">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img">
                            <img src="https://media.istockphoto.com/photos/laundry-service-picture-id459292777?k=20&m=459292777&s=612x612&w=0&h=RT1gIeH6LM7zLsHh-rK5Bvx94QbrzPlrrQSCzK2l1J4="
                                alt="" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-25">
                                <h2>About Us</h2>
                            </div>
                            <p class="mb-20">
                                The automated process starts as soon as your clothes go into
                                the machine. The outcome is gleaming clothes!
                            </p>
                            <p class="mb-30">
                                The automated process starts as soon as your clothes go into
                                the machine. The outcome is gleaming clothes!
                            </p>

                            <!-- <a href="about.html" class="btn">About Us</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->

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
            <!-- Services End -->

        <!--? Want To work -->
        <section class="container">
            <section class="wantToWork-area" data-background="{{asset('frontend/assets/img/gallery/section_bg01.png')}}">
                <div class="wants-wrapper w-padding2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-8 col-lg-9 col-md-7">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>Call us for a service</h2>
                                <p>
                                    We deliver the goods to the most complicated places on earth
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5">
                            <a href="callTo:{{$setting->contact_no}}" class="btn wantToWork-btn"><img src="{{asset('frontend/assets/img/icon/call2.png')}}" alt="" /> Call
                                Us</a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!-- Want To work End -->
        <!--? Testimonials_start -->

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

        <!--?  Map Area start  -->
        <div class="Map-area" >
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="100%" height="400" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=varanasi&t=k&z=15&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                        href="https://123movies-to.org"></a><br />
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