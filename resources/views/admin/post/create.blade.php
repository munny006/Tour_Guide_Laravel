         @extends('layouts.backend.app')
         @push('header')
         <link rel="stylesheet" href="{{asset('backend/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
         <link rel="stylesheet" href="{{asset('backend/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">
         <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
         @endpush
         @section('content')
         <div id="right-panel" class="right-panel">
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
                <strong class="card-title">Create Post</strong>
                <button type="button" class="btn btn-primary mb-1" data-toggle="modal"
                data-target="#createModal">
                <i class="fa fa-plus"></i>
              </button>
            </div>
            <div class="card-body">

              <div class="row form-group">
                <div class="col">
                  <label for="title" class=" form-control-label">Title</label>
                </div>
                <div class="col-12 col-md-9">
                  <input type="text" id="title" name="title" placeholder="title" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label">Category</label>
                </div>
                <div class="col-12 col-md-9">
                  <select name="category" id="select" class="form-control">

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
                  <input type="text" id="tags" name="tags" placeholder="Tag(separated by ,)" class="form-control">
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
                  <label for="file-input" class=" form-control-label">File input</label></div>
                  <div class="col-12 col-md-9">
                    <input type="file" id="image" name="image" class="form-control-file"></div>
                  </div>

                  <div class="form-group">

                    <label for="textarea-input" class=" form-control-label">Textarea</label>
                    
                    <textarea name="body" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                  </div>

                  <button type="submit" class="btn btn-primary ">
                    <i class="fa fa-dot-circle-o"></i> Submit
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- .animated -->

        </div>
      </div>
    </div>





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