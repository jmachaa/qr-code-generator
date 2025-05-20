
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('admin/images/faviconstob1.ico')}}" type="image/x-icon">
    <title>@yield('title')</title>
    <!-- Custom CSS -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('admin/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('admin/css/style.min.css')}}" rel="stylesheet">


    <link href="{{asset('admin/css/fontawesome-all.css')}}" rel="stylesheet">
    <script src="{{asset('admin/js/jquery-2.1.1.min.js')}}"></script>

</head>

<body>

 @if(Auth::guard('admin')->check())
   {{-- @include('admin.header.header')
   @include('admin.sidebar.sidebar')
   @yield('content')
   @include('admin.footer.footer') --}}

 @else
  @yield('login')
 @endif


<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('admin/js/popper.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/perfect-scrollbar.jquery.min.js')}}"></script>


<!--Wave Effects -->
<script src="{{asset('admin/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('admin/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('admin/js/custom.min.js')}}"></script>
<script type="text/javascript">
$(document).ready(function(){
  var TimeZone=Intl.DateTimeFormat().resolvedOptions().timeZone;
  document.cookie = "TimeFormatCHURCH=" + TimeZone;
});
</script>

{{-- -- -----------toastr------------ -- --}}
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
    'timeOut':3000,
    'extendedTimeOut':3000,
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
    'timeOut':3000,
    'extendedTimeOut':3000,
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
    'timeOut':3000,
    'extendedTimeOut':3000,
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
    'timeOut':3000,
    'extendedTimeOut':3000,
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>

@yield('script')
{{-- -- -----------toastr end------------ -- --}}
