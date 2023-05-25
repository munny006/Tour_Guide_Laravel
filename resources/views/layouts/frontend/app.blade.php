<!DOCTYPE html>
<html lang="zxx" class="no-js">
  <head>
    <!-- Mobile Specific Meta -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png" />
    <!-- Author Meta -->
    <meta name="author" content="colorlib" />
    <!-- Meta Description -->
    <meta name="description" content="" />
    <!-- Meta Keyword -->
    <meta name="keywords" content="" />
    <!-- meta character set -->
    <meta charset="UTF-8" />
    <!-- Site Title -->
    <title>Tour Guide</title>

    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700"
      rel="stylesheet"
    />
    <!--
      CSS
      ============================================= -->
    <link rel="stylesheet" href="{{asset('frontend/css/linearicons.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;500&display=swap" rel="stylesheet">


    <style>
      .menu1{
        /* border: 1px solid #333; */
        margin-left: -5rem;

      }


      .c1{
        color: #007bff;
      }
    </style>
  </head>
  <body>
    <!-- Start Header Area -->
@include('layouts.frontend.partials.navbar')
    <!-- End Header Area -->

    <!-- start banner Area -->
@yield('content')
    <!-- End team Area -->

    <!-- start footer Area -->
    <footer class="footer-area section-gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-12">
            <div class="single-footer-widget">
              <h6>Top Products</h6>
              <ul class="footer-nav">
                <li><a href="#">Managed Website</a></li>
                <li><a href="#">Design templates</a></li>
                <li><a href="#">Customer Stories</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Marketing Service</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="single-footer-widget newsletter">
              <h6>Help</h6>
              <p>
                tourguide@gmail.com
              </p>
              <p>
                0183724743
              </p>
              <div class="col-lg-4 col-sm-12 footer-social " style=" border-radius:50% ;  margin-left:-83px;
              float: left;">
                <a href="https://web.facebook.com/profile.php?id=100093094896928"><i class="fa fa-facebook"></i></a>
              <a href="tourguide@gmail.com"><i class="fa fa-envelope-o"></i></a>

              </div>

              <div id="mc_embed_signup">
                <form
                  target="_blank"
                  novalidate="true"
                  action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                  method="get"
                  class="form-inline"
                >



              </div>
            </div>
          </div>
           <div class="col-lg-3 col-md-12">
                   <div id="mc_embed_signup">
                <form
                  target="_blank"
                  novalidate="true"
                  action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                  method="get"
                  class="form-inline"
                >
                  <div class="form-group row" style="width: 100%">
                    <div class="col-lg-8 col-md-12" style="margin-left: -48px;">
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
                      <button class="nw-btn primary-btn" style="    margin-left: 32px;
                      margin-top: -8px;">
                        Subscribe<span class="lnr lnr-arrow-right"></span>
                      </button>
                    </div>
                  </div>
                  <div class="info"></div>
                </form>
              </div>
        </div>


        <div class="row footer-bottom d-flex justify-content-between" style="
        text-align: center;

        margin-left: 314px;
    font-family: 'Gill Sans', sans-serif;">
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          <p class="col-lg-8 col-sm-12 footer-text">
            COPYRIGHT &copy;
            <script>
              document.write(new Date().getFullYear());
            </script>
             WEBSITE BY TOURGUIDE
          </p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

        </div>
      </div>
    </footer>
    <!-- End footer Area -->

    <script src="{{asset('frontend/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
      integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
      crossorigin="anonymous"
    ></script>
    <script src="{{asset('frontend/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('frontend/js/parallax.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>

    @stack('footer')
  </body>
</html>
