@extends('frontend.main.main')
@section('content')
<style>
     #service{
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
                             <h2 class="text-center">Services</h2>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Hero End -->

    
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

     

   

   
    </main>
    @endsection