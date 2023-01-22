@extends('layouts.frontend.app')
@section('content')
<section class="top-section-area section-gap">
                <div class="container">
                    <div class="row justify-content-center align-items-center d-flex">
                        <div class="col-lg-8">
                            <div id="imaginary_container">
                                <form action="{{route('search')}}" method="GET">

                                  <div class="input-group stylish-input-group">
                                    <input type="text" class="form-control"  placeholder="Addictionwhen gambling" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Addictionwhen gambling '" required="" name="search" value="{{$search ?? ""}}">
                                    <span class="input-group-addon">
                                        <button type="submit">
                                            <span class="lnr lnr-magnifier"></span>
                                        </button>
                                    </span>
                                </div>
                                  
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>


 <div class="post-wrapper pt-100">
      <!-- Start post Area -->
      <section class="post-area">
        <div class="container">
          <div class="row justify-content-center d-flex">
            <div class="col-lg-6">
              <div class="top-posts pt-50">
                <div class="container">
                  <div class="row justify-content-center">
                     @if($posts->count()>0)
                      @foreach($posts as $post)
                    <div class="single-posts col-lg-6 col-sm-6">
                        <img class="img-fluid" src="{{asset('storage/post/'.$post->image)}}" alt="$post->image" />
                      <div class="date mt-20 mb-20">
                        {{$post->created_at->diffForHumans()}}
                      </div>
                        <div class="detail">
                            <a href="{{route('post',$post->slug)}}"><h4 class="pb-20">{{$post->title}}</h4></a>
                         
                        <p>{!!Str::limit($post->body,400)!!}</p>

                        <p class="footer pt-20">
                              <i class="fa fa-heart-o" aria-hidden="true"></i>
                              <a href="#">06 Likes</a>
                              <i class="ml-20 fa fa-comment-o"aria-hidden="true"></i>
                              <a href="#">02 Comments</a>
                        </p>
                      </div>
                    </div>
 
                      @endforeach 
                      @else
                      <h3>No Post available</h3>
                      @endif
              </div>
               <div class="justify-content-center d-flex mt-5">
                      {{$posts->appends(Request::all())->links()}}
                    </div>
                
                   
                  </div>
              
              </div>
            </div>

           @include('layouts.frontend.partials.sidebar')
          </div>
        </div>

      </section>
      <!-- End post Area -->
    </div>
 
@endsection