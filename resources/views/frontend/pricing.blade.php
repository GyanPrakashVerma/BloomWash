@extends('frontend.main.main')
@section('content')
  <main>
    <!--? Hero Start -->
    <div class="slider-area2 section-bg2 hero-overly" style="height: 300px"
      data-background="https://www.rentinc.co.uk/blog/wp-content/uploads/template98.jpg">
      <div class="slider-height2 d-flex align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="hero-cap hero-cap2" style="margin-bottom: 90px">
                <h2 class="text-center">Pricing</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




    <div class="container mt-5 mb-5">

      <div class="row mt-3">
        <div class="col-sm-12 table-responsive">
            <table class="table table-hover border">
                <thead class="bg-success">
                    <tr class="text-center text-light">
                        <th>Sr no.</th>
                        <th>Product Name</th>
                        <th>Standard price</th>
                        <th>Custom Price</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($product as $products)
                        <tr class="text-center">
                            <td>{{ $i++ }}</td>
                            <td>{{ $products->product }}</td>
                            <td>{{ $products->standard_price }}</td>
                            <td>{{ $products->custom_price }}</td>
                            <td><img src="{{ asset('Product/' . $products->product_image) }}" height="100px" width="100px"
                                    alt=""></td>
                           
                           
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
      {{-- <div class="row">
        <div class="col-sm-3">
          <div class="border" style="height: 455px;">
            <div style="background-color: #293464;padding: 10px;height: 160px;">
              <h3 class="text-white p-3">Recharge Amount</h3>
              <h4 class="text-white pl-3" style="font-size: xx-large;font-weight: bold;">$1311</h4>

            </div>
            <div class="container mt-4 d-flex " style="gap: 10px;line-height: normal;">
              <div>
                <i style="color: #293464;" class="bi bi-check-square-fill"></i>

              </div>
              <div>
                <h6 class="mt-1">Premium Laundry</h6>

              </div>
            </div>
            <div class="container mt-4 d-flex " style="gap: 10px;line-height: normal;">
              <div>
                <i style="color: #293464;" class="bi bi-check-square-fill"></i>

              </div>
              <div>
                <h6 class="mt-1">Premium Laundry</h6>

              </div>
            </div>
            <div class="container mt-4 d-flex " style="gap: 10px;line-height: normal;">
              <div>
                <i style="color: #293464;" class="bi bi-check-square-fill"></i>

              </div>
              <div>
                <h6 class="mt-1">Premium Laundry</h6>

              </div>
            </div>
            <div class="container mt-4 d-flex " style="gap: 10px;line-height: normal;">
              <div>
                <i style="color: #293464;" class="bi bi-check-square-fill"></i>

              </div>
              <div>
                <h6 class="mt-1">Premium Laundry</h6>

              </div>
            </div>
            <div class="container mt-4 d-flex " style="gap: 10px;line-height: normal;">
              <div>
                <i style="color: #293464;" class="bi bi-check-square-fill"></i>

              </div>
              <div>
                <h6 class="mt-1">Premium Laundry</h6>

              </div>
            </div>

          </div>
        </div>
        <div class="col-sm-3">
          <div class="border" style="height: 455px;">
            <div style="background-color: #293464;padding: 10px;height: 160px;">
              <h3 class="text-white p-3">Recharge Amount</h3>
              <h4 class="text-white pl-3" style="font-size: xx-large;font-weight: bold;">$1311</h4>

            </div>
            <div class="container mt-4 d-flex " style="gap: 10px;line-height: normal;">
              <div>
                <i style="color: #293464;" class="bi bi-check-square-fill"></i>

              </div>
              <div>
                <h6 class="mt-1">Premium Laundry</h6>

              </div>
            </div>
            <div class="container mt-4 d-flex " style="gap: 10px;line-height: normal;">
              <div>
                <i style="color: #293464;" class="bi bi-check-square-fill"></i>

              </div>
              <div>
                <h6 class="mt-1">Premium Laundry</h6>

              </div>
            </div>
            <div class="container mt-4 d-flex " style="gap: 10px;line-height: normal;">
              <div>
                <i style="color: #293464;" class="bi bi-check-square-fill"></i>

              </div>
              <div>
                <h6 class="mt-1">Premium Laundry</h6>

              </div>
            </div>
            <div class="container mt-4 d-flex " style="gap: 10px;line-height: normal;">
              <div>
                <i style="color: #293464;" class="bi bi-check-square-fill"></i>

              </div>
              <div>
                <h6 class="mt-1">Premium Laundry</h6>

              </div>
            </div>
            <div class="container mt-4 d-flex " style="gap: 10px;line-height: normal;">
              <div>
                <i style="color: #293464;" class="bi bi-check-square-fill"></i>

              </div>
              <div>
                <h6 class="mt-1">Premium Laundry</h6>

              </div>
            </div>

          </div>
        </div>
        <div class="col-sm-3">
          <div class="border" style="height: 455px;">
            <div style="background-color: #293464;padding: 10px;height: 160px;">
              <h3 class="text-white p-3">Recharge Amount</h3>
              <h4 class="text-white pl-3" style="font-size: xx-large;font-weight: bold;">$1311</h4>

            </div>
            <div class="container mt-4 d-flex " style="gap: 10px;line-height: normal;">
              <div>
                <i style="color: #293464;" class="bi bi-check-square-fill"></i>

              </div>
              <div>
                <h6 class="mt-1">Premium Laundry</h6>

              </div>
            </div>
            <div class="container mt-4 d-flex " style="gap: 10px;line-height: normal;">
              <div>
                <i style="color: #293464;" class="bi bi-check-square-fill"></i>

              </div>
              <div>
                <h6 class="mt-1">Premium Laundry</h6>

              </div>
            </div>
            <div class="container mt-4 d-flex " style="gap: 10px;line-height: normal;">
              <div>
                <i style="color: #293464;" class="bi bi-check-square-fill"></i>

              </div>
              <div>
                <h6 class="mt-1">Premium Laundry</h6>

              </div>
            </div>
            <div class="container mt-4 d-flex " style="gap: 10px;line-height: normal;">
              <div>
                <i style="color: #293464;" class="bi bi-check-square-fill"></i>

              </div>
              <div>
                <h6 class="mt-1">Premium Laundry</h6>

              </div>
            </div>
            <div class="container mt-4 d-flex " style="gap: 10px;line-height: normal;">
              <div>
                <i style="color: #293464;" class="bi bi-check-square-fill"></i>

              </div>
              <div>
                <h6 class="mt-1">Premium Laundry</h6>

              </div>
            </div>

          </div>
        </div>
        <div class="col-sm-3">
          <div class="border" style="height: 455px;">
            <div style="background-color: #293464;padding: 10px;height: 160px;">
              <h3 class="text-white p-3">Recharge Amount</h3>
              <h4 class="text-white pl-3" style="font-size: xx-large;font-weight: bold;">$1311</h4>

            </div>
            <div class="container mt-4 d-flex " style="gap: 10px;line-height: normal;">
              <div>
                <i style="color: #293464;" class="bi bi-check-square-fill"></i>

              </div>
              <div>
                <h6 class="mt-1">Premium Laundry</h6>

              </div>
            </div>
            <div class="container mt-4 d-flex " style="gap: 10px;line-height: normal;">
              <div>
                <i style="color: #293464;" class="bi bi-check-square-fill"></i>

              </div>
              <div>
                <h6 class="mt-1">Premium Laundry</h6>

              </div>
            </div>
            <div class="container mt-4 d-flex " style="gap: 10px;line-height: normal;">
              <div>
                <i style="color: #293464;" class="bi bi-check-square-fill"></i>

              </div>
              <div>
                <h6 class="mt-1">Premium Laundry</h6>

              </div>
            </div>
            <div class="container mt-4 d-flex " style="gap: 10px;line-height: normal;">
              <div>
                <i style="color: #293464;" class="bi bi-check-square-fill"></i>

              </div>
              <div>
                <h6 class="mt-1">Premium Laundry</h6>

              </div>
            </div>
            <div class="container mt-4 d-flex " style="gap: 10px;line-height: normal;">
              <div>
                <i style="color: #293464;" class="bi bi-check-square-fill"></i>

              </div>
              <div>
                <h6 class="mt-1">Premium Laundry</h6>

              </div>
            </div>

          </div>
        </div>
      </div> --}}
    </div>


    <section class="container">
      <section class="wantToWork-area" data-background="frontend/assets/img/gallery/section_bg01.png">
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
              <a href="callTO:{{$setting->contact_no}}" class="btn wantToWork-btn"><img src="{{asset('frontend/assets/img/icon/call2.png')}}" alt=""> Call Us
              </a>
          </div>
          </div>
        </div>
      </section>
    </section>
    <!-- Want To work End -->

  </main>
@endsection