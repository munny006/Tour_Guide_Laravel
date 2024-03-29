    <header class="default-header">
        <nav class="navbar navbar-expand-lg"
            style="background-color: #f9f9ff4f;font-family: 'Gill Sans', sans-serif; color:black;">
            <div class="container px-3">
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('frontend/img/tourguidelogo.jpg') }}" alt="" width="59px">
                </a>


                <!--error msg-->
                @if ($errors->any())

                    @foreach ($errors->all() as $error)
                        <div class="alert  alert-danger alert-dismissible fade show"
                            role="alert"style="font-family: 'Gill Sans', sans-serif; color:black;">
                            <span class="badge badge-pill badge-danger">Error !!</span>{{ $error }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    @endforeach

            </div>
            @endif
            <!--End error msg-->
















            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="lnr lnr-menu"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                <ul class="navbar-nav scrollable-menu"style="font-family: 'Gill Sans', sans-serif; color:black;">
                    <li><a href="/">Home</a></li>
                    <li><a href="/posts">Posts</a></li>
                    <li><a href="/categories">Categories</a></li>
                    <li><a href="/about">About</a></li>








                    @if (Route::has('login'))

                        @auth



                            <!-- Dropdown -->
                            <li class="dropdown" style="font-family: 'Gill Sans', sans-serif; color:black;">
                                <a href="#" onclick="dropMenu()">
                                    <i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;
                                    <span
                                        class="mr-2 d-none d-lg-inline text-black-700 medium">{{ Auth::user()->name }}</span>
                                    <!-- <i class="fas fa-user"></i> -->
                                </a>
                                <div id="dropMenu" class="dropdown-menu menu1" style="display: none;">

                                    {{-- <a href="{{ route('admin.profile') }}" class="dropdown-item" target="_blank">

                                        </a> --}}

                                    @if (Auth::user()->role->id == 1)
                                        <a href="{{ route('admin.profile') }}" class="dropdown-item" target="_blank">

                                        </a>
                                        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                            <i class="fa fa-tv" aria-hidden="true"></i>&nbsp; Dashboard</a>
                                        {{-- <a class="dropdown-item" href=""><i
                                                    class="fa fa-heart" aria-hidden="true"></i>&nbsp; Favorite List</a> --}}
                                    @elseif(Auth::user()->role->id == 2)
                                        <a href="{{ route('user.profile') }}" class="dropdown-item" target="_blank">

                                        </a>
                                        <a href="{{ route('user.dashboard') }}"><i class="fa fa-tv"
                                                aria-hidden="true"></i>&nbsp;Dashboard</a>
                                        {{-- <a class="dropdown-item" href="{{ route('user.like.posts') }}"><i
                                                    class="fa fa-heart" aria-hidden="true"></i>&nbsp; Favorite List</a> --}}
                                    @else
                                        null
                                    @endif




                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none"style="font-family: 'Gill Sans', sans-serif; color:black;">
                                        @csrf
                                    </form>

                                </div>
                            </li>
                        @else
                            <li><a href="{{ route('login') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline"style="font-family: 'Gill Sans', sans-serif; color:black;">Log
                                    in</a></li>

                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}"
                                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                </li>
                            @endif
                        @endauth

                    @endif
                    <script>
                        function dropMenu() {
                            var dropmenu = document.getElementById('dropMenu');
                            if (dropmenu.style.display === "none") {
                                dropmenu.style.display = "block";
                            } else {
                                dropmenu.style.display = "none";
                            }
                        }
                    </script>






<li class="dropdownmenu" style="font-family: 'Gill Sans', sans-serif; color:black;">
    <a href="#" onclick="dropNenu()">
        <i class="fa fa-bell position-relative medium" aria-hidden="true"
            style="margin-right: -44px;
            font-size: 22px;
            margin-top: -1px;"></i>&nbsp;
        <span class=" translate-middle badge rounded-pill bg-danger"
            style="float: right;
                margin-top: -10px;
                margin-right: -37px;">
                                        99+

        </span>
        <!-- <i class="fas fa-user"></i> -->
    </a>
    <div id="dropNenu" class="dropdown-menu menu2 "
        style="display:none;
        float: left;
        margin-left: 1220px;
        margin-top: -17px;">


        {{-- <div class="scrollable-menu"
            style=" height: auto;
                max-height: 200px;
                overflow-x: hidden;width: 299px;"> --}}
            <ul style="height: 241px;
            width: 292px;
            list-style: none;
            overflow: auto; ">
                <a href="{{ route('admin.profile') }}" class="dropdown-item" target="_blank">

                </a>
                <a class="dropdown-item" href="{{ route('admin.dashboard') }}" style="padding: 12px 16px;">
                 DashboardDashboardDashboardDashboardDashboardDashboardDashboardDashboardDashboardDashboardDashboardDashboardDashboardDashboardDashboardDashboardDashboardDashboardDashboardDashboardDashboardDashboardDashboardDashboardDashboardDashboardDashboard</a>

                <a href="{{ route('user.profile') }}" class="dropdown-item" target="_blank">

                </a>
                <a href="{{ route('user.dashboard') }}"style="padding: 12px 16px;">Dashboard</a>

                <a href="{{ route('admin.profile') }}" class="dropdown-item" target="_blank">

                </a>
                <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                    Dashboard</a>

                <a href="{{ route('user.profile') }}" class="dropdown-item" target="_blank">

                </a>
                <a href="{{ route('user.dashboard') }}"style="padding: 12px 16px;">Dashboard</a>
                <a href="{{ route('admin.profile') }}" class="dropdown-item" target="_blank">

                </a>
                <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                     Dashboard</a>

                <a href="{{ route('user.profile') }}" class="dropdown-item" target="_blank">

                </a>
                <a href="{{ route('user.dashboard') }}"style="padding: 12px 16px;">Dashboard</a>

                <a href="{{ route('user.profile') }}" class="dropdown-item" target="_blank">

                </a>
                <a href="{{ route('user.dashboard') }}"style="padding: 12px 16px;">Dashboard</a>

                <a href="{{ route('user.profile') }}" class="dropdown-item" target="_blank">

                </a>
                <a href="{{ route('user.dashboard') }}"style="padding: 12px 16px;">Dashboard</a>

                <a href="{{ route('user.profile') }}" class="dropdown-item" target="_blank">

                </a>
                <a href="{{ route('user.dashboard') }}"style="padding: 12px 16px;">Dashboard</a>

                <a href="{{ route('user.profile') }}" class="dropdown-item" target="_blank">

                </a>
                <a href="{{ route('user.dashboard') }}"style="padding: 12px 16px;">Dashboard</a>

                <a href="{{ route('user.profile') }}" class="dropdown-item" target="_blank">

                </a>
                <a href="{{ route('user.dashboard') }}"style="padding: 12px 16px;">Dashboard</a>

                <a href="{{ route('user.profile') }}" class="dropdown-item" target="_blank">

                </a>
                <a href="{{ route('user.dashboard') }}"style="padding: 12px 16px;">Dashboard</a>
            </ul>







    </div>
</li>

                    <script>
                        function dropNenu() {
                            var dropdownmenu = document.getElementById('dropNenu');
                            if (dropdownmenu.style.display === "none") {
                                dropdownmenu.style.display = "block";
                            } else {
                                dropdownmenu.style.display = "none";
                            }
                        }
                    </script>





                </ul>
            </div>
            </div>
        </nav>
    </header>
