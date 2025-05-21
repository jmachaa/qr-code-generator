
@extends('admin.layouts.masterlayout')
@section('title','Edit Diocese Content')
@section('content')
  <?php
  use Carbon\Carbon;
  if(isset($_COOKIE['TimeFormatIsc']))
  $userTimezone=$_COOKIE['TimeFormatIsc'];
  else
  $userTimezone='UTC';
  ?>
  <link rel="stylesheet" type="text/css" href="{{asset('admin/css/select2.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('admin/css/jquery.datetimepicker.css')}}">
  <script src="{{asset('admin/js/jquery.datetimepicker.js')}}"></script>

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
      <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h5 class="page-title">{{ __('Edit Donate Content') }}</h5>
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

    <div class="container-fluid">
      <!-- ============================================================== -->
        <div class="row">
          <div class="col-md-12 form-content">
                    <form class="form-horizontal" id="frm1" method="post" action="{{url('admin/diocese/update/'.$donate_events_details->id)}}" enctype="multipart/form-data">
                      @csrf
                    <div class="card">
                      <input type="hidden" name="userTimezone" value="{{$userTimezone}}">
                      <div class="card-body">
                        <div class="row">

                         <div class="col-md-10">
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 control-label col-form-label">Title <span class="language_name"></span><span class="mandatory">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" name="title" value="{{old('title',$donate_events_details->{'title'})}}" >
                                    @if ($errors->has('title'))
                                        <div class="warning_msg">{{ $errors->first('title') }}</div>
                                    @endif
                                </div>
                            </div>
                          </div>
                          <div class="col-md-10">
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 control-label col-form-label">Name <span class="language_name"></span><span class="mandatory">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" value="{{old('name',$donate_events_details->{'name'})}}" >
                                    @if ($errors->has('name'))
                                        <div class="warning_msg">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                            </div>
                          </div>

                          

                       {{-- file upload --}}
                       
                    </div>
                       {{-----file upload end-----}}

                      </div>

                        </div>
                        </div>
                        <div class="border-top col-12 px-0">
                            <div class="card-body-buttons" style="text-align: right;">
                              <button onclick="form_submit()" class="btn btn-primary">Submit</button>
                              <a href="{{url('admin/diocese/index')}}" class="btn btn-primary">Cancel</a>

                            </div>
                        </div>
                    </form>
            </div>
        </div>

<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<script src="{{asset('admin/js/select2.min.js')}}"></script>
<script type="text/javascript">
$(".select2").select2();
</script>
<script>
function form_submit()
{
 $('#frm1').submit()
}
</script>
<script>
$.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
 });
</script>

 <script>
  function delete_file(id){
    if(confirm('Are you sure you want to delete item?'))
    {
     $.ajax({
       url:'{{ URL::asset('/admin/delete_donate_file')}}',
                   type: 'POST',
                   data: { id: id},
        success:function(data){
          $('#photo_div').hide();
          news_events_data_load(id);
        }
     });
  }
 }
 </script>

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

{{-- <script src="{{asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace( 'description', {
      filebrowserUploadUrl: '{{route('upload_ckeditor_image').'?_token='.csrf_token()}}'
    });
</script> --}}

@endsection
