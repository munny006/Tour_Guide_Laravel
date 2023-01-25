    <header class="default-header">
      <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container px-3">
            <a class="navbar-brand" href="index.html">
              <img src="{{asset('frontend/img/sitelogo.jpg')}}" alt="" width="100px">
            </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="lnr lnr-menu"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent" >
                  <ul class="navbar-nav scrollable-menu">
                      <li><a href="/">Home</a></li>
                      <li><a href="/posts">Posts</a></li>
                      <li><a href="/categories">Categories</a></li>
                      <li><a href="#about">About</a></li>
                        <!-- ll
                          <li class="dropdown">
                              <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                  <i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;

                              </a>
                              <div class="dropdown-menu menu1">
                                  <a href="/admin/dashboard/profile" class="dropdown-item" target="_blank">Admin Subhadip</a>
                                <a class="dropdown-item" href="/admin/dashboard"><i class="fa fa-tv" aria-hidden="true"></i>&nbsp; Dashboard</a>
                                <a class="dropdown-item" href="/admin/dashboard"><i class="fa fa-heart" aria-hidden="true"></i>&nbsp; Favorite List</a>

                                <a class="dropdown-item" href="/logout" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                  <i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; Logout
                             </a>

                             <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                 <input type="hidden" name="_token" value="ePJORhim7paUxLLNT4uhKMeJSbwU4kZwpnHVl7Ph">                                       </form>

                              </div>
                          </li> -->
                          @if (Route::has('login'))
              
                    @auth
                    
                       
                 
                      <!-- Dropdown -->
                      <li class="dropdown">
                        <a href="#"  onclick="dropMenu()">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;
                            <!-- <i class="fas fa-user"></i> -->
                        </a>
                        <div id="dropMenu" class="dropdown-menu menu1" style="display: none;">
                          <a href="{{route('admin.profile')}}" class="dropdown-item" target="_blank"> <i class="fa fa-user-circle" aria-hidden="true"></i> &nbsp;{{Auth::user()->name}}</a>
                        @if(Auth::user()->role->id == 1)
                    
                    <a class="dropdown-item" href="{{route('admin.dashboard')}}">
                      <i class="fa fa-heart" aria-hidden="true"></i>&nbsp; Dashboard</a>
                    

                    @elseif(Auth::user()->role->id == 2)
                    <a href="{{route('user.dashboard')}}">Dashboard</a>
                    <a class="dropdown-item" href="{{route('user.dashboard')}}"><i class="fa fa-heart" aria-hidden="true"></i>&nbsp; Favorite List</a>
                    @else
                    null
                    @endif
                          

                          <a class="dropdown-item" href="/logout" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; Logout
                       </a>

                     <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                        </div>
                    </li>
                       @else
                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
              
            @endif
                    <script>
                        function dropMenu(){
                        var dropmenu = document.getElementById('dropMenu');
                            if (dropmenu.style.display === "none") {
                                dropmenu.style.display = "block";
                            } else {
                                dropmenu.style.display = "none";
                            }
                            }
                    </script>
                  </ul>
                </div>
          </div>
      </nav>
  </header>