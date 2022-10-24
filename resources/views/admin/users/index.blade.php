@extends('layouts.backend.app')

@section('content')
<div id="right-panel" class="right-panel">
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
                    <li><a href="#">Dashboard</a></li>
                    <li>
                        <a href="#" class="active">Users Table</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Users Table</strong>
                    </div>
                    <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>User Id</th>
                                <th>Email</th>
                                <th>Created_At</th>
                                <th>Updated_At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>id</td>
                                <td>name</td>
                             <th>Role</th>
                                <td>userid</td>
                                <td>email</td>
                                <td>created_at</td>
                                <td>updated_at</td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary mb-1" data-toggle="modal"
                                    data-target="#viewModal">
                                    <i class="fa fa-eye"></i>
                                </button>

                                <button type="button" class="btn btn-secondary mb-1" data-toggle="modal"
                                data-target="#editModal">
                                <i class="fa fa-pencil"></i>
                            </button>
                            <button type="button" class="btn btn-danger mb-1" data-toggle="modal"
                            data-target="#deleteModal">
                            <i class="fa fa-trash-o"></i>
                        </button>
                    </td>
                </tr>
           
            </tbody>
        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .animated -->
    <div class="animated">
      
    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog"  aria-labelledby=  "mediumModalLabel"
        data-backdrop="static" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">View</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row form-group">
                      <div class="col col-md-3"><label class=" form-control-label"> Name   </label>
                        </div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static"></p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">User Id</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static"></p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Role</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static"></p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Email</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static"></p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Created At</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static"></p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Updated At</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static"></p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">About</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static"></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
        data-backdrop="static" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="editUser" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Name</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p class="form-control-static"></p>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">User Id</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <p class="form-control-static"></p>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Role</label>
                            </div>
                            <div class="col col-md-9">
                                <div class="form-check">
                                   

                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-md" onclick="event.preventDefault();
                        document.getElementById('editUser').submit();">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel"
        data-backdrop="static" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticModalLabel">Delete User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        The user will be deleted !!
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" onclick="event.preventDefault();
                    document.getElementById('deleteUser').submit();">Confirm</button>
            <form action="" style="display: none" id="deleteUser" method="POST">
                @csrf
                @method('DELETE')
            </form>
                </div>
            </div>
        </div>
    </div>
   </div>


        <!-- .content -->
    </div>


@endsection
