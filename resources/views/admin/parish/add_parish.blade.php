@extends('admin.layouts.masterlayout')
@section('title','Add Parish – '.e(config('admin_settings.engine_name')))
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
                <h5 class="page-title">{{ __('Add Parish') }}</h5>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Parish</li>
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
                    <form class="form-horizontal" method="post" action="{{url('admin/parish/store')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="card-body">
                        <div class="row">


                          <div class="col-md-10">
                            <div class="form-group row">
                                <label for="diocese_id" class="col-sm-2 control-label col-form-label">Diocese<span class="mandatory">*</span></label>
                                <div class="col-sm-10">
                                <select id="diocese_select" name="diocese_id" class="form-control" style="height:100%;">
                                    <option
                                    @if ($errors->has('diocese_id'))
                                        <div class="warning_msg">{{ $errors->first('diocese_id') }}</div>
                                    @endif value="">Select Diocese</option>
                                </select>
                                </div>
                            </div>
                          </div>

                          <div class="col-md-10">
                            <div class="form-group row">
                                <label for="parish_name" class="col-sm-2 control-label col-form-label">Parish Name<span class="mandatory">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="parish_name" name="parish_name" value="{{old('parish_name')}}" >
                                    @if ($errors->has('parish_name'))
                                        <div class="warning_msg">{{ $errors->first('parish_name') }}</div>
                                    @endif
                                </div>
                            </div>
                          </div>



                    </div>

                      </div>

                        </div>
                        <div class="border-top col-12 px-0">
                            <div class="card-body-buttons" style="text-align: right;">
                              <a href="{{url('admin/parish/index')}}" class="btn btn-primary">Cancel</a>
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

<script>
  function fetch_diocese(){

    $.ajax({
    url:'{{ URL::asset('admin/parish/fetch_diocese')}}',
    type: 'GET',
    success:function(data){
        console.log(data,'data')
        let select = $('#diocese_select');
        select.empty();
        select.append('<option value="">Select Diocese</option>');
        $.each(data, function(index, item) {
        select.append(`<option value="${item.id}">${item.title}</option>`);
        });
    }
    });

 }
 $(document).ready(function(){
    fetch_diocese();
  });
 </script>

@endsection
