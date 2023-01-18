 <div class="col-lg-4 sidebar-area">
              <div class="single_widget search_widget">
                <div id="imaginary_container">
                  <div class="input-group stylish-input-group">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Search"
                    />
                    <span class="input-group-addon">
                      <button type="submit">
                        <span class="lnr lnr-magnifier"></span>
                      </button>
                    </span>
                  </div>
                </div>
              </div>
              <div class="single_widget cat_widget">
                <h4 class="text-uppercase pb-20">post categories</h4>
                <ul>
                @foreach($categories as $category)
                 <li>
                    <a href="{{route('category.post',$category->slug)}}">{{$category->name}}<span>{{$category->posts->count()}}</span></a>
                  </li>
                 @endforeach
                  
                  
                </ul>
              </div>

              <div class="single_widget recent_widget">
                <h4 class="text-uppercase pb-20">Recent Posts</h4>
                <div class="active-recent-carusel">
                  @foreach($posts->take(3) as $latestPost)
                  <div class="item">
                    <img src="{{asset('storage/post/'.$latestPost->image)}}" alt="{{$latestPost->image}}" />
                    <a href="{{route('post',$post->slug)}}"></a>
                    <p class="mt-20 title text-uppercase">
                     {{$latestPost->title}}
                    </p>
                    <p>
                      {{$latestPost->created_at->diffForHumans()}}
                      <span>
                        <i class="fa fa-heart-o" aria-hidden="true"></i> 06
                        <i class="fa fa-comment-o" aria-hidden="true"></i
                        >02</span
                      >
                    </p>
                  </div>
                  @endforeach
                
                  

              
              </div>
            </div>