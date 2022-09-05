@extends('frontend.main.main')
@section('content')
<style>
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
@media(max-width:768px){
    .contact_form{
        display: block;
    }
}
       

        .contact_form .form-contact button {
            border-radius: 30px;
        }

</style>
<main>
    <!--? Hero Start -->
    <div class="slider-area2 section-bg2 hero-overly" data-background="{{asset('frontend/assets/img/hero/hero2.png')}}">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2">
                            <h2>Contact us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--?  Contact Area start  -->
    <section class="contact-section">
        <div class="container">
             <!--?  Map Area start  -->
    <div class="Map-area" style="min-height:80vh;">
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
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                <div class="col-lg-8 contact_form">
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
                </div>
                <div class="col-lg-3 offset-lg-1 mt-5 text-center">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Buttonwood, California.</h3>
                            <p>Rosemead, CA 91770</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+1 253 565 2365</h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>support@colorlib.com</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
</main>
@endsection