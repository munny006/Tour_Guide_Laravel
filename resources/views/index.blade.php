@extends('layouts.frontend.app')
@section('content')
    <section
      class="banner-area relative"
      id="home"
      data-parallax="scroll"
      data-image-src="{{asset('frontend/img/nilachal-bandarban-01.jpg')}}" style="height: 820px;">
      <div class="overlay-bg overlay"></div>
      <div class="container">

        <div class="row fullscreen">
          <div class="banner-content d-flex align-items-center col-lg-12 col-md-12">
            <h1 style="float: left;margin-left: 144px;">
              TIRED OF A BUSY LIFE ?? <br />
              TAKE A BREAK & A RELAX TOUR..
              {{-- <p>
                <span style="font-size: 0.7em">earn</span> &nbspC<span
                  style="font-size: 0.7em"
                  >reate</span
                >

                &nbspS<span style="font-size: 0.7em">hare</span>
              </p> --}}
            </h1>
          </div>

          {{-- <div
            class="head-bottom-meta d-flex justify-content-between align-items-end col-lg-12"
          >
            <div class="col-lg-6 flex-row d-flex meta-left no-padding">
              <a href="/login" class="genric-btn info circle arrow mr-md-auto"
                >Visit Yotube <span class="lnr lnr-arrow-right"></span
              ></a>
            </div> --}}
          {{--   <div
              class="col-lg-6 flex-row d-flex meta-right no-padding justify-content-end" >
              <div class="user-meta">
                <h4 class="text-white">Mark wiens</h4>
                <p>12 Dec, 2017 11:21 am</p>
              </div>
              <img class="img-fluid user-img" src="{{asset('frontend/img/user.jpg')}}" alt="" />
            </div> --}}
          </div>
        </div>
      </div>
    </section>
    <!-- End banner Area -->

    <!-- Start category Area -->
    <section class="category-area section-gap" id="news">
      <div class="container">



        <div class="row d-flex justify-content-center">
          <div class="menu-content pb-70 col-lg-12">
            <div class="title text-center">
              <h1 class="mb-10">Latest Posts from all categories</h1>
              <p>Find the Latest Post from all category.</p>
            </div>
          </div>


     <div class="row d-flex justify-content-center">

            @foreach($posts as $post)
        <div class="single-posts col-lg-4 col-sm-4 mb-3">
            <div class="item single-cat">
            {{-- <div  style="width:190px"> --}}
            <img src="{{asset('storage/post/'.$post->image)}}" class="img-fluid " alt="{{$post->image}}" style="width:1000px; height: 200px;"/>
           {{-- </div> --}}

            <div>
            <p class="date" style="float: left;margin-left: -1px; width: 140px;">{{$post->created_at->diffForHumans()}}</p>
          </div>
          <div>
            <h4  style="float: left;margin-left: -144px; margin-top: 81px;">
              <br>
              <a href="{{route('post',$post->slug)}}">{{$post->title}}</a>
            </h4>
           </div>

         </div>
         </div>


          @endforeach
        </div>
      </div>
      </div>

    </section>
    <!-- End category Area -->

    <section class="travel-area section-gap" id="travel">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="menu-content pb-70 col-lg-8">
          <div class="title text-center">
            <h1 class="mb-10">Hot topics of this Week</h1>
            <p>The posts which are most views in this week.</p>
          </div>
        </div>
      </div>
        <div class="container">
        <div class="row justify-content-center">
         @foreach($posts as $post)
          <div class="single-posts col-lg-4 col-sm-4 mb-3 py-3"style="width:250px">
            <img class="img-fluid  mx-auto" src="{{asset('storage/post/'.$post->image)}}" alt="{{$post->image}}"style="width:1000px; height: 200px;">
            <div class="date mt-20 mb-20" style=" width: 140px;">{{$post->created_at->diffForHumans()}}</div>
            <div class="detail py-2">
              <a href="{{route('post',$post->slug)}}"><h4 class="pb-20">{{$post->title}}</h4></a>

              <div>
                <p>
                    {{-- {!!Str::limit($post->body,300)!!} --}}
                    {{-- {{ Str::limit($your_string, 50) }} --}}
                    {{-- {!! Str::limit($post->body,20,'...') !!} --}}
                    {!!  substr(strip_tags($post->body), 0, 200) !!}
                    </p>
              </div>
              <p class="py-2" footer="">
                <br>
                </p>

          <div >
            <ul   style="display: flex;
            gap: 23px;margin-top: 95px;">
            <li>
                <a href="javascript:void(0);" onclick=" toastr.info('To add to your favorite list you have to login first.', 'Info', { closeButton: true, progressBar: true, })">
                <i class="fa fa-heart-o" aria-hidden="true"></i>
                <span> {{$post->likedUsers->count()}} </span>
            </a>
        </li>
          <li><i class="fa fa-comment-o" aria-hidden="true"></i><span> {{$post->comments->count()}} </span></li>
          <li><i class="fa fa-eye" aria-hidden="true"></i> <span> {{$post->view_count}} </span></li>
        </ul>
          </div>



            </div>
          </div>

        @endforeach
      </div>
    </div>
  </div>
  </section>

    <!-- Start team Area -->
  <section class="team-area section-gap" id="about">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="menu-content pb-70 col-lg-8">
          <div class="title text-center">
            <h1 class="mb-10">About This Site</h1>
            <p>This is personal blogging site related to Internet of Things &amp; Web Development Tutorials</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center d-flex align-items-center">
        <div class="col-lg-6 team-left">
          <p>
            Find a blogs and tutorials related to Internet of things, Web Designe, Web Development, GIS Web applications and more.
          </p>
          <p>
            This site is made with laravel framework. The theme is <a href="">Blogger Theme</a> and the Admin Panel theme is <a href="https://github.com/puikinsh/sufee-admin-dashboard">Sufee Admin</a>.
          </p>
          <p>Checkout the full tutorial how this site is made on <span class="c1">Youtube</span>.</p>
          <h4>About the Creator</h4>
          <br>
          <p>I am <span class="c1">Full stack Web Developer</span> specialized <span class="c1">LARAVEL</span> - PHP. Currently Studing GEOSPATIAL SCIENCE and learning <span class="c1">GIS Web Applications Development</span>. </p>
          <br>
          <h4>Email: <span style="font-size: medium; font-weight: lighter;">mahmudaaktermunny4@gmail.com</span></h4>
          <br>
          <div class="col-md-12 d-flex justify-content-center py-3 mt-2">
            <a href="https://subhadipghorui.github.io" class="genric-btn info circle arrow mr-md-auto" target="_blank">Know More<span class="lnr lnr-arrow-right"></span></a>
          </div>
        </div>
        <div class="col-lg-6 team-right d-flex justify-content-center">
          <div class="row">
            <div class="single-team">
              <div class="thumb">
                <img class="img-fluid w-75 mx-auto" src="{{asset('frontend/img/mahmuda-akter-munny6425f563bda1c.jpg')}}" alt="admin">
                <div class="align-items-center justify-content-center d-flex">
                  <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                  <a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                </div>
              </div>
              <div class="meta-text mt-30 text-center">
                <h4>Mahmuda Akter Munny</h4>
                <p>Creator</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
