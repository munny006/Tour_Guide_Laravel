@extends('layouts.frontend.app')
@section('content')
 <section class="generic-banner relative">

      <!-- End Header Area -->
      <div class="container" style="font-family: 'Gill Sans', sans-serif; color:black;">
        <div class="row height align-items-center justify-content-center">
          <div class="col-lg-10">
            <div class="generic-banner-content">
              <h2 class="text-dark text-center"style="font-family: 'Gill Sans', sans-serif; color:black;">The Category Page</h2>
              <p class="text-dark" style="font-family: 'Gill Sans', sans-serif; color:black;">
                This page shows all the categories that available by the site
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
<div class="main-wrapper">
      <!-- Start fashion Area -->
      <section class="fashion-area section-gap" id="fashion">
        <div class="container" style="font-family: 'Gill Sans', sans-serif; color:black;">
          <div class="row">
            @foreach($categories as $category)
            	<div class="col-lg-3 col-md-6 single-fashion">
              <img class="img-fluid" src="{{asset('storage/category/'.$category->image)}}" alt="{{$category->image}}" style="width:1000px; height: 200px;">
              <p class="date" style="font-family: 'Gill Sans', sans-serif; color:white;">{{$category->created_at->format('D,d M Y H:i')}}</p>
           <a href="{{route('category.post',$category->slug)}}" style="font-family: 'Gill Sans', sans-serif; color:black;"><h4 style="font-family: 'Gill Sans', sans-serif; color:black;">{{$category->name}}</h4></a>

            </div>
            @endforeach

          </div>
        </div>
      </section>
      <!-- End fashion Area -->

      <!-- start footer Area -->
      <footer class="footer-area section-gap"style="font-family: 'Gill Sans', sans-serif;" >
        <div class="container"style="font-family: 'Gill Sans', sans-serif;">
          <div class="row">
            <div class="col-lg-3 col-md-12">
              <div class="single-footer-widget">
                <h6>Top Products</h6>
                <ul class="footer-nav">
                  <li><a href="#">Managed Website</a></li>

                  <li><a href="#">Marketing Service</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="single-footer-widget newsletter">
                <h6>Newsletter</h6>
                <p>
                  You can trust us. we only send promo offers, not a single
                  spam.
                </p>
                <div id="mc_embed_signup">
                  <form
                    target="_blank"
                    novalidate="true"
                    action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                    method="get"
                    class="form-inline"
                  >
                    <div class="form-group row" style="width: 100%">
                      <div class="col-lg-8 col-md-12">
                        <input
                          name="EMAIL"
                          placeholder="Enter Email"
                          onfocus="this.placeholder = ''"
                          onblur="this.placeholder = 'Enter Email '"
                          required=""
                          type="email"
                        />
                        <div style="position: absolute; left: -5000px">
                          <input
                            name="b_36c4fd991d266f23781ded980_aefe40901a"
                            tabindex="-1"
                            value=""
                            type="text"
                          />
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-12">
                        <button class="nw-btn primary-btn">
                          Subscribe<span class="lnr lnr-arrow-right"></span>
                        </button>
                      </div>
                    </div>
                    <div class="info"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-12">
              <div class="single-footer-widget mail-chimp">
                <h6 class="mb-20">Instragram Feed</h6>
                <ul class="instafeed d-flex flex-wrap">
                  <li><img src="img/i1.jpg" alt="" /></li>
                  <li><img src="img/i2.jpg" alt="" /></li>
                  <li><img src="img/i3.jpg" alt="" /></li>
                  <li><img src="img/i4.jpg" alt="" /></li>
                  <li><img src="img/i5.jpg" alt="" /></li>
                  <li><img src="img/i6.jpg" alt="" /></li>
                  <li><img src="img/i7.jpg" alt="" /></li>
                  <li><img src="img/i8.jpg" alt="" /></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="row footer-bottom d-flex justify-content-between">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p class="col-lg-8 col-sm-12 footer-text">
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              All rights reserved | This template is made by
              <a href="#" target="_blank">Munny & Tanzim</a>
            </p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <div class="col-lg-4 col-sm-12 footer-social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-dribbble"></i></a>
              <a href="#"><i class="fa fa-behance"></i></a>
            </div>
          </div>
        </div>
      </footer>
      <!-- End footer Area -->
    </div>
@endsection
