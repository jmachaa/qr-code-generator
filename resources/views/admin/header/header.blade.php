<style type="text/css">

span.logo-text img{
    width: 110px;
    margin: 0 auto;
    display: block;
}
.topbar .top-navbar .navbar-header .navbar-brand{
    display: block;
    margin: 0 auto;
    float: none;
}
.nav-toggler{
    position: absolute !important;
    z-index: 99999;
}

@media (max-width:767px) {
span.logo-text img{
    display: none;
}
}
</style>

<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>

        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block menu_bar_icon">
                        <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                         data-sidebartype="mini-sidebar">
                        <i class="mdi mdi-menu font-24"></i></a></li>



                        <li class="clock">
                        <span id="clock"></span><span id="clock1"></span>
                        </li>
                        <!-- ============================================================== -->


                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">

                        <li class="logo-image" style="background-color: #af2a31;">
                         <a href="{{url('admin/dashboard')}}" style="display: block;margin: auto;">
                         <!-- Logo text -->
                             <!-- dark Logo text -->
                                <img style="width: 12%;" src="{{asset('admin/images/church.png')}}" alt="homepage" class="light-logo" />
                        </a>
                        </li>

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('admin/images/users/1.jpg')}}" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <div class="dropdown-divider"></div>
                                 {{-- @if(Auth::getUser()->type!=2)
                                <a class="dropdown-item" href="{{url('admin/settings/index')}}"><i class="fas fa-cogs m-r-5 m-l-5"></i>Setting</a>
                                @endif --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{url('admin/adminlogout')}}"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>

        <script type="text/javascript">

$(document).ready(function(){
updateClock ()
});
	function updateClock ()
 	{
 	var currentTime = new Date ();
  	var currentHours = currentTime.getHours ();
  	var currentMinutes = currentTime.getMinutes ();
  	var currentSeconds = currentTime.getSeconds ();
  	 var year = currentTime.getFullYear();
  	 month = currentTime.getMonth();
        months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December');
        days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
        d = currentTime.getDate();
        day = currentTime.getDay();

  	currentMinutes = ( currentMinutes < 10 ? "0" : "") + currentMinutes;
  	currentSeconds = ( currentSeconds < 10 ? "0" : "") + currentSeconds;
  	var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";
  	currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;
  	currentHours = ( currentHours == 0 ) ? 12 : currentHours;
  	currentHours = ( currentHours < 10 ) ? "0"+currentHours : currentHours;
  	var currentTimeString = days[day]+" "+d+" "+months[month]+", "+year;
  	var currentTimeString1=currentHours + " : " + currentMinutes + " : " + currentSeconds + " " + timeOfDay;
   	$("#clock").html(currentTimeString);
   	$("#clock1").html(currentTimeString1);
   	setTimeout('updateClock()', 1000);
 }
</script>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
