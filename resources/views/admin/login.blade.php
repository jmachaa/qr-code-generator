@extends('admin.layouts.masterLayout')
@section('title', 'Admin Login')
@section('login')
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/select2.min.css')}}">
<style>
    .select2-container--default .select2-selection--single{    border-radius: 0px;}
    .select2-container .select2-selection--single{    height: 32px;}
</style>
  <div class="main-wrapper" style="background-image: url({{asset('admin/images/bg.jpg')}})">

          <div class="preloader">
              <div class="lds-ripple">
                  <div class="lds-pos"></div>
                  <div class="lds-pos"></div>
              </div>
          </div>

          <div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
              <div class="auth-box bg-dark border-secondary">
                  <div id="loginform"  class="login-wrapper">
                      <div class="text-center p-t-20 p-b-20 login-logo">
                          <span class="db">

                          @if(config('admin_settings.admin_logo')!='')
                            <img style="padding: 5px;border-radius: 3px;" src="{{asset('storage/datafolder/logo/file/'.config('admin_settings.admin_logo'))}}" alt="logo"/>
                          @else
                            <img style="padding: 5px;border-radius: 3px;" src="{{asset('admin/images/logo.png')}}" alt="logo" />
                          @endif
                          </span>
                      </div>
                      <!-- Form -->
                      <form class="form-horizontal " id="loginform" method="POST" action="{{ url('admin/login') }}">
                          @csrf
                          <div class="row">
                            <div class="col-12">
                                <h3 class="text-center text-sm-left">Admin Login</h3>
                            </div>
                              <div class="col-12">

                                @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                                @endif


                                  <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                          <span style="background-color:  #a32125 !important;" class="input-group-text text-white" id="basic-addon1"><i class="far fa-envelope"></i></span>
                                      </div>
                                      <input id="email" type="email" class="form-control-lg form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Username" name="email" value="{{ old('email') }}" aria-describedby="basic-addon1" required autofocus>

                                      @if ($errors->has('email'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif

                                  </div>
                                  <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                          <span style="background-color:  #a32125 !important;"  class="input-group-text bg-warning text-white" id="basic-addon2"><i class="fa fa-key" aria-hidden="true"></i></span>
                                      </div>
                                      <input id="password" type="password" class="form-control-lg form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" aria-label="Password" name="password" aria-describedby="basic-addon1" required>
                                      @if ($errors->has('password'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('password') }}</strong>
                                          </span>
                                      @endif
                                  </div>

                              </div>

                              <div class="col-12">
                                              <a class="btn btn-link" href="{{url('admin/forgot_password')}}">
                                                <i class="fa fa-lock m-r-5"></i>  {{ __('Forgot Your Password?') }}
                                              </a>


                                          <button type="submit" class="btn btn-success float-right">
                                              {{ __('Login') }}
                                          </button>
                                      </div>
                          </div>
                      </form>
                  </div>
                  <div id="recoverform">
                      <div class="text-center">
                          <span class="text-white">Enter your e-mail address below and we will send you instructions how to recover a password.</span>
                      </div>
                      <div class="row m-t-20">
                          <!-- Form -->
                          <form class="col-12" action="index.html">
                              <!-- email -->
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                                  </div>
                                  <input type="text" class="form-control form-control-lg" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1">
                              </div>
                              <!-- pwd -->
                              <div class="row m-t-20 p-t-20 border-top border-secondary">
                                  <div class="col-12">
                                      <a class="btn btn-success" href="#" id="to-login" name="action">Back To Login</a>
                                      <button class="btn btn-info float-right" type="button" name="action">Recover</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>

      </div>

      <script>
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
       });
      </script>
      <script src="{{asset('admin/js/select2.min.js')}}"></script>
    <script type="text/javascript">
    $(".select2").select2();
    </script>


@endsection
