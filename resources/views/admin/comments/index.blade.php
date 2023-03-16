         @extends('layouts.backend.app')
         @push('header')
         <link rel="stylesheet" href="{{asset('backend/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
         <link rel="stylesheet" href="{{asset('backend/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">
         <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
         @endpush
         @section('content')
         <div id="right-panel" class="right-panel">
            <div class="breadcrumbs">
               <div class="col-sm-4">
                 <div class="page-header float-left">
                  <div class="page-title">
                   <h1>Comments</h1>
                </div>
             </div>
          </div>
          <div class="col-sm-8">
            <div class="page-header float-right">
               <div class="page-title">
                <ol class="breadcrumb text-right">
                 <li><a href="#">Dashboard</a></li>
                 <li>
                  <a href="#" class="active">Comments</a>
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
            <!--error msg-->
            @if ($errors->any())
            
               @foreach ($errors->all() as $error)
                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
           <span class="badge badge-pill badge-danger">Error !!</span>{{$error}}
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
         </button>
      </div>
               @endforeach
           
         </div>
         @endif 
         <!--End error msg-->
        

   </div>
   <div class="col-md-12">
    <div class="card">
     <div class="card-header">
      <strong class="card-title">Comments Table</strong>
     {{--  <button type="button" class="btn btn-primary mb-1" data-toggle="modal"
      data-target="#createModal">
      <i class="fa fa-plus"></i>
   </button> --}}
</div>
<div class="card-body">
   <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
    <thead>
     <tr>
      <th>ID</th>
      <th>Comment</th>
      <th>User</th>
      <th>Post</th>
      
      <th>created_At</th>
      <th>Action</th>
   </tr>
</thead>
<tbody>


  @foreach($comments as $key => $comment)
  <tr>

   <td>{{$key+1}}</td>
   <td>{{$comment->comment}}</td>
   <td>{{$comment->user->name}}</td>
   <td>
      @if(isset($comment->post))
      <a href="{{route('post',$comment->post->title)}}">{{$comment->post->title}}</a>
      @else <p>...</p>
      @endif
   </td>

   <td>{{$comment->created_at->diffForHumans()}}</td>
   <td>
    <!-- Button trigger modal -->
 {{--    <button type="button" class="btn btn-primary mb-1" data-toggle="modal"
    data-target="#viewModal-{{$category->id}}">
    <i class="fa fa-eye"></i>
 </button>

 <button type="button" class="btn btn-secondary mb-1" data-toggle="modal"
 data-target="#editModal-{{$category->id}}">
 <i class="fa fa-pencil"></i>
</button> --}}
<button type="button" class="btn btn-danger mb-1" data-toggle="modal"
data-target="#deleteModal-{{$comment->id}}">
<i class="fa fa-trash-o"></i>
</button>
</td>
</tr>
@endforeach


</tbody>
</table>

</div>
</div>
</div>
</div>
</div>
<!-- .animated -->
<div class="animated">

<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
   data-backdrop="static" aria-hidden="true" style="display: none;">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title" id="mediumModalLabel">Create Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">×</span>
      </button>
   </div>
   <div class="modal-body">
     <form action="{{route('admin.category.store')}}" method="post" id = "createCategory" enctype="multipart/form-data" class="form-horizontal">
      @csrf

      <div class="row form-group">
        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
        <div class="col-12 col-md-9">
         <input type="text" id="name" name="name" placeholder="Text" class="form-control">
         <small class="form-text text-muted">This is a help text</small>
      </div>
   </div>

   <div class="row form-group">
      <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
      <div class="col-12 col-md-9"><textarea name="description" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
   </div>

   <div class="row form-group">
      <div class="col col-md-3"><label for="file-input" class=" form-control-label">Category Image</label></div>
      <div class="col-12 col-md-9">
         <input type="file" id="image" name="image" class="form-control-file"></div>
      </div>

      <button type="submit" class="btn btn-primary btn-md"  onclick="event.preventDefault(); document.getElementById('createCategory').submit();">
         <i class="fa fa-dot-circle-o"></i> Submit
      </button>
   </form>
</div>
</div>
</div>
</div>


@foreach($comments as $comment)
<div class="modal fade" id="deleteModal-{{$comment->id}}" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel"
   data-backdrop="static" aria-hidden="true" style="display: none;">
   <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title" id="staticModalLabel">Delete Comment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">×</span>
      </button>
   </div>
   <div class="modal-body">
     <p>
      The comment will be deleted !!
   </p>
</div>
<div class="modal-footer">
   <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
   <button type="button" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('deletecomment-{{$comment->id}}').submit();">Confirm</button>
   <form action="{{route('admin.comment.delete',$comment->id)}}" style="display: none" id="deletecomment-{{$comment->id}}" method="POST">
      @csrf


   </form>
</div>
</div>
</div>
</div>
</div>




@endforeach

<!-- .content -->
</div>


@endsection
@push('footer')
<script src="{{asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('backend/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('backend/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('backend/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('backend/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('backend/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('backend/vendors/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('backend/assets/js/init-scripts/data-table/datatables-init.js')}}"></script>


<script>

   $(document).ready(function (){

      (function ($){
        $('#filter').keyup(function () {
         var rex = new RegExp($(this).val(),'i');
         $('.searchable tr').hide();
         $('.searchable tr').filter(function () {
          return rex.test($(this).text());
       }).show();

      })
     }(jQuery));
   })
</script>

<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
@endpush