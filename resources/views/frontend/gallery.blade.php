@extends('frontend.main.main')
@section('content')
<style>
     #gallery{
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
            data-background="https://i.pinimg.com/736x/6c/b4/89/6cb489bfda8dd9208c62c8315f8d5661.jpg">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2" style="margin-bottom: 90px">
                                <h2 class="text-center">Gallery</h2>
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
                    @foreach ($gallery as $item)
                        
                    <div class="col-md-4 mb-2">
                        <a href="{{asset('galleries/'.$item->images)}}" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{asset('galleries/'.$item->images)}});"></div>
                        </a>
                       </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- About Area End -->

            <!--? Services Area Start -->
            {{-- <section class="services-area pt-top pb-20 mb-60">
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
            </section> --}}
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

       


    
    </main>
@endsection