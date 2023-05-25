@extends('layouts.frontend.app')
@section('content')
<section class="team-area section-gap" id="about">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="menu-content pb-70 col-lg-8">
          <div class="title text-center">
            <h1 class="mb-10" style="font-family: 'Gill Sans', sans-serif; font-weight:bold;">About Us</h1>

          </div>
        </div>
      </div>
      <div class="row justify-content-center d-flex align-items-center"style="font-family: 'Gill Sans', sans-serif;">
        <div class="col-lg-6 team-left"style="font-family: 'Gill Sans', sans-serif;">
          {{-- <p style="font-family: 'Gill Sans', sans-serif;">
            Find a blogs and tutorials related to Internet of things, Web Designe, Web Development, GIS Web applications and more.
          </p> --}}
          {{-- <p style="font-family: 'Gill Sans', sans-serif;">
            This site is made with laravel framework..
          </p> --}}


          <p style="font-family: 'Gill Sans', sans-serif;text-align:justify; ">
              We will work with you to plan a worry free adventure that meets your travel needs,expectations and budget.When you plan your vacation with us we are there through out the entire process.This means making ourselves available to you before during and after travel.

          </p>



          <br>
          <div class="col-md-12 d-flex justify-content-center py-3 mt-2">
            <a href="https://subhadipghorui.github.io" class="genric-btn btn-warning circle arrow mr-md-auto" target="_blank">Read More<span class="lnr lnr-arrow-right"></span></a>
          </div>
        </div>
        <div class="col-lg-6 team-right d-flex justify-content-center">
          <div class="row">
            <div class="single-team">
              <div class="thumb">
                <img class="img-fluid  mx-auto" src="{{asset('frontend/img/download (1).jpg')}}" alt="admin">
                <div class="align-items-center justify-content-center d-flex">
                  <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                  <a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                </div>
              </div>
              <div class="meta-text mt-30 text-center">
                {{-- <h4>Mahmuda Akter Munny</h4>
                <p>Creator</p> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




