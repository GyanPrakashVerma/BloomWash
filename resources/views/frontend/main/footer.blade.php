<hr>
<footer>
    <!-- Footer Start-->
    <div class="footer-area footer-padding" style="position: relative;z-index:1;">
        <section class="sticky">
            <div class="bubbles">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
            </div>
        </section>
        <div class="container">
            <div class="row d-flex justify-content-center text-align-center" style="padding-top:40px;padding-bottom:50px;">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                            <!-- logo -->
                            <div class="footer-logo ">
                                <div class="logo ">
                                    <a href="{{route('home')}}" style="color:black; font-weight: bold;">
                                        <img src="{{asset('setting_img/'.$setting->logo) }}" height="95px" alt="">
                                        {{-- <h1>BLOOM WASH</h1> --}}
                                    </a>
                                </div>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p class="text-center">{{$setting->f_about}}</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle text-center">
                            <h4>Links<h4>
                            <ul>
                                <li><a href="{{route('home')}}">- Home</a></li>
                                <li><a href="{{route('about')}}">- About</a></li>
                                <li><a href="{{route('service')}}">- Services</a></li>
                                <li><a href="{{route('pricing')}}">- Pricing</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle text-center">
                            <h4>Get in touch</h4>
                            <ul>
                                <li class="number"><a href="callTo:{{$setting->contact_no}}"><i class="bi bi-phone"></i>: {{$setting->contact_no}}</a></li>
                                <li style="font-size: 20px"><a href="mailTo:{{$setting->email}}"><i  class="bi bi-envelope"></i> : {{$setting->email}}</a></li>
                                <li style="font-size: 20px"><a><i class="bi bi-house-door-fill"></i> : {{$setting->address}}</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle text-center">
                            <h4>Subscribe Us</h4>
                            <p class="text-center">Subscribe su for more attractive offers!!!!!</p>
                           <form action="#">
                            <div class="row">
                                <div class="col-md-12 d-flex">
                                    <input type="text" class="form-control" name="" placeholder="Enter Your Email Here !!" style="height:50px;border-radius:30px 0px 0px 30px">
                                    <button type="submit" class="" style="height:50px;background:#293464;border-radius:0 10px 10px 0px">Go</button>
                                </div>
                            </div>
                           </form>
                           <!-- social -->
                           <div class="footer-social text-center mt-3">
                            @if ($setting->facebook_link != '')
                            <a href="{{$setting->facebook_link}}"><i class="bi bi-facebook"></i></a>
                            @endif
                            @if ($setting->twitter_link != '')
                            <a href="{{$setting->twitter_link}}"><i class="bi bi-twitter"></i></a>
                            @endif
                            @if ($setting->insta_link != '')
                            <a href="{{$setting->insta_link}}"><i class="bi bi-instagram"></i></a>
                            @endif
                            @if ($setting->pinterest_link != '')
                            <a href="{{$setting->pinterest_link}}"><i class="bi bi-pintrest"></i></a>
                            @endif
                            @if ($setting->google_link != '')
                            <a href="{{$setting->google_link}}"><i class="bi bi-google"></i></a>
                           @endif
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- footer-bottom area -->
    <div class="footer-bottom-area section-bg2 footer_mob " data-background="{{asset('frontend/assets/img/footer_bloom.svg')}}">
        <div class="footer-copy-right text-center copyright_footer" style="margin-top:27px">
         
        </div>

        <!-- <div class="container">
            <div class="footer-border">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-12 ">
                      
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#"> <i class="bi bi-arrow-90deg-up"></i></a>
</div>


<!-- Appointment modal  -->

<div class="modal fade" id="appointmentModalLabel" tabindex="-1" aria-labelledby="appointmentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="padding:30px;">
            <div class="modal-header" style="border:none;">
                <h3 class="modal-title" id="appointmentModalLabel">Book Your Appointment</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="font-size:35px;">&times;</span>
                </button>
            </div>
            <div class="modal-body mt-5 mb-5">
                <form class="container">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input name="name" style="height: 40px;font-size: large;" type="text" class="form-control mb-3">
                        <label for="exampleInputEmail1">Contact Number</label>
                        <input name="phone" style="height: 40px;font-size: large;" type="text" class="form-control ">
                        <!-- <label for="exampleInputEmail1">Location</label> <br>
                  <select  class="form-select">
                    <option >Varanasi</option>
                    <option >Prayagraj</option>
                    <option >Delhi</option>
                  </select> -->
                    </div>
                    <div class="form-group mt-1">
                        <label>Address</label>
                        <textarea name="address" cols="10" rows="3" style="font-size: large;" type="text" class="form-control"></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div> -->
        </div>
    </div>
</div>
<!-- JS here -->

<!-- AOS animation  -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();
</script>

<script src="{{asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('frontend/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('frontend/assets/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/slick.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/animated.headline.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.magnific-popup.js')}}"></script>

<!-- Date Picker -->
<script src="{{asset('frontend/assets/js/gijgo.min.js')}}"></script>
<!-- Nice-select, sticky -->
<script src="{{asset('frontend/assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.sticky.js')}}"></script>
<!-- Progress -->
<script src="{{asset('frontend/assets/js/jquery.barfiller.js')}}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/hover-direction-snake.min.js')}}"></script>

<!-- contact js -->
<script src="{{asset('frontend/assets/js/contact.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.form.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/mail-script.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
<script src="{{asset('frontend/assets/js/main.js')}}"></script>

</body>

</html>