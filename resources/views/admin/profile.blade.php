@extends('layouts.backend.app')

@section('content')
<div class="container">
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li>Dashboard</li>
                        <li>Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

<div class="content mt-3">
<div class="row">
    
        <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <strong class="card-title mb-3">Profile Card</strong>
            </div>
            <div class="card-body">
                <div class="mx-auto d-block">
                    <img class="rounded-circle mx-auto d-block" src="{{asset('backend/images/admin.jpg')}}" alt="Card image cap">
                    <h5 class="text-sm-center mt-2 mb-1">Steven Lee</h5>
                    <div class="location text-sm-center"><i class="fa fa-map-marker"></i> California, United States</div>
                </div>
                <hr>
                <div class="card-text text-sm-center">
                    <a href="#"><i class="fa fa-facebook pr-1"></i></a>
                    <a href="#"><i class="fa fa-twitter pr-1"></i></a>
                    <a href="#"><i class="fa fa-linkedin pr-1"></i></a>
                    <a href="#"><i class="fa fa-pinterest pr-1"></i></a>
                </div>
            </div>
        </div>
   
    </div>
    <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    <h4>Default Tab</h4>
                </div>
                <div class="card-body">
                    <div class="default-tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active show" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Profile</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Credential</a>
                               
                            </div>
                        </nav>
                        <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Email
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <p class="form-control-static">Email</p>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="userid" class=" form-control-label">User ID</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="userid" name="userid" placeholder="id" class="form-control">
                                        
                                    </div>
                                 </div>

                                 <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="name" class=" form-control-label">Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="name" name="name" placeholder="Text" class="form-control">
                                        
                                    </div>
                                 </div>
                                 <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="image" class=" form-control-label">Profile Image</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="image" name="image" class="form-control-file">
                                    </div>
                                 </div>

                                 <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="about" class=" form-control-label">About</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="about" id="about" rows="4" placeholder="Content..." class="form-control">
                                            
                                        </textarea>
                                    </div>
                                 </div>

                            </form>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                               <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="old_password" class=" form-control-label">Old Password</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="password" id="old_password" name="old_password" placeholder="Password" class="form-control">
                                        
                                    </div>
                                 </div>

                                   <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="password" class=" form-control-label">New Password</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                                       
                                    </div>
                                 </div>
                                   <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="password_confirmation" class=" form-control-label">Confirm Password</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Password" class="form-control">
                                        
                                    </div>
                                 </div>

                             </form>
                            
                        </div>

</div>
</div>
</div>
        
    </div>
</div>
       
            
 </div>
@endsection
