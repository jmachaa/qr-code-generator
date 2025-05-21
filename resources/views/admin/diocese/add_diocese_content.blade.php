@extends('admin.layouts.masterlayout')
@section('title','Add Donate Content – '.e(config('admin_settings.engine_name')))
@section('content')

  <?php
  if(isset($_COOKIE['TimeFormatIsc']))
  $userTimezone=$_COOKIE['TimeFormatIsc'];
  else
  $userTimezone='UTC';
  ?>
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/jquery.datetimepicker.css')}}">

<script src="{{asset('admin/js/jquery.datetimepicker.js')}}"></script>

<link rel="stylesheet" type="text/css" href="{{asset('admin/css/select2.min.css')}}">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
      <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h5 class="page-title">{{ __('Add Donate Content') }}</h5>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Diocese</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
      </div>

    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->

        <div class="row">
          <div class="col-md-12 form-content">
                <div class="card">
                    <form class="form-horizontal" method="post" action="{{url('admin/diocese/store')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="card-body">
                        <div class="row">

                         <div class="col-md-10">
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 control-label col-form-label">Title<span class="mandatory">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" >
                                    @if ($errors->has('title'))
                                        <div class="warning_msg">{{ $errors->first('title') }}</div>
                                    @endif
                                </div>
                            </div>
                          </div>
                          
                         
                          <div class="col-md-10">
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 control-label col-form-label">Name<span class="mandatory">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" >
                                    @if ($errors->has('name'))
                                        <div class="warning_msg">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                            </div>
                          </div>

                       {{-- file upload --}}
                       {{-- <div class="col-md-10" style="margin-top:25px">
                         <div class="form-group row">
                            <label class="col-md-2">Upload File <span style="color:#d42020"> [Supported Formats:- jpeg,jpg,png,gif Dimension:- Width: 1900px Height: 600px]<span></label>
                            <div class="col-md-10">
                               <div class="row">
                                <div class="custom-file" style="height: 0;">
                                  <div class="col-md-12">
                                  <input id="file" type="file" class="pad-5 upload_image" name="file">
                                  @if ($errors->has('file'))
                                     <div class="warning_msg">{{ $errors->first('file') }}</div>
                                  @endif
                                  </div>

                                    <div class="invalid-feedback"></div>
                                </div>

                              </div>
                              <div class="clearfix"></div>
                            </div>
                        </div> --}}
                    </div>
                       {{-----file upload end-----}}


                    </div>

                      </div>

                        </div>
                        <div class="border-top col-12 px-0">
                            <div class="card-body-buttons" style="text-align: right;">
                              <a href="{{url('admin/donate/index')}}" class="btn btn-primary">Cancel</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>



        </div>


<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<script src="{{asset('admin/js/select2.min.js')}}"></script>
<script type="text/javascript">
$(".select2").select2();
</script>

{{-- <script src="{{asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
 <script>
 CKEDITOR.replace( 'description', {
   filebrowserUploadUrl: `{{route('upload_ckeditor_image').'?_token='.csrf_token()}}`
 });
 </script> --}}


 <script type="text/javascript">
$(function() {
var sr={
    timepicker:true,
     closeOnTimeSelect:true,
     step:5,
     format:'Y-m-d H:i:s',
    };
var sr1={
    timepicker:true,
     closeOnTimeSelect:true,
     step:5,
     format:'Y-m-d H:i:s',
    };
$('#date_from').datetimepicker(sr);
$('#date_to').datetimepicker(sr1);

});
</script>

@endsection
