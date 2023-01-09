
@extends('layouts.backend.app')
@push('header')
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
@endpush
@section('content')
<div id="right-panel" class="right-panel">
<div class="content mt-3">

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
         <strong class="card-title">Create Post</strong>
        <!-- <button type="button" class="btn btn-primary mb-1" data-toggle="modal"
         data-target="#createModal">
         <i class="fa fa-plus"></i>
      </button> -->
   </div>
   <div class="card-body">
      <form action="{{route('admin.post.store')}}" method="POST" enctype="multipart/form-data"c class="form-horizontal">
         @csrf
             <div class="row form-group">
         <div class="col col-md-3">
            <label for="title" class=" form-control-label">Title</label>
         </div>
         <div class="col-12 col-md-9">
            <input type="text" id="title" name="title" placeholder="Title" class="form-control">
         </div>
      </div>

      <div class="row form-group">
       <div class="col col-md-3"><label for="category" class=" form-control-label">Select</label></div>
       <div class="col-12 col-md-9">
         <select name="category" id="category" class="form-control">
           @foreach($categories as $category)
           <option value="{{$category->id}}">{{$category->name}}</option>

           @endforeach

        </select>
     </div>
  </div>
  <div class="row form-group">
   <div class="col col-md-3">
      <label for="tags" class=" form-control-label">Tags</label>
   </div>
   <div class="col-12 col-md-9">
      <input type="text" id="tags" name="tags" placeholder="Tags (spearated By ,)" class="form-control">
   </div>
</div>
<div class="row form-group">
   <div class="col col-md-3"><label class=" form-control-label">Status</label></div>
   <div class="col col-md-9">
      <div class="form-check">
       <div class="checkbox">
        <label for="checkbox1" class="form-check-label ">
         <input type="checkbox" id="status" name="status" value="1" class="form-check-input">Published
      </label>
   </div>

</div>
</div>
</div>

<div class="row form-group">
<div class="col col-md-3">
<label for="file-input" class=" form-control-label">File input</label>
</div>
<div class="col-12 col-md-9">
<input type="file" id="image" name="image" class="form-control-file" style="width:270px;">
</div>
</div>
<div class="row form-group">
       <div class="col col-md-12">
         <label for="textarea-input" class=" form-control-label">Body[for embedde google drive image use :https://drive.google.com/uc?export=view&id=file_id ]</label>
       </div>
      <div class="form-group">
          <div class="col col-md-12">
         <textarea name="body" id="summernote" rows="7" cols="60" placeholder="Content..." class="form-control">
         </textarea>
      </div>
      </div>
     
   </div>

     <button type="submit" class="btn btn-primary btn-sm">
         <i class="fa fa-dot-circle-o"></i> Submit
     </button>
     


         
      </form>

</div>
</div>

<!-- .animated -->

<!-- .content -->
@endsection
@push('footer')
<script>
      $('#summernote').summernote({
         tabsize: 2,
         height: 300,
         });      
   </script>



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