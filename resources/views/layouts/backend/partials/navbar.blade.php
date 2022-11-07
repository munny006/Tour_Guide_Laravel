<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="{{asset('Backend/images/logo.png')}}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="{{asset('Backend/images/logo2.png')}}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{route('admin.dashboard')}}"> <i class="menu-icon fa fa-user"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">CMS</h3><!-- /.menu-title -->
                    <li class="active">
                        <a href="{{route('admin.users.index')}}"> <i class="menu-icon fa fa-dashboard"></i>Users </a>
                    </li>

                    <li class="active">
                        <a href="{{route('admin.category.index')}}"> <i class="menu-icon fa fa-file"></i>Category</a>
                    </li>
                 
                </ul>
            </div>
        </nav>
    </aside>