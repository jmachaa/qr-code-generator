<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    {{-- <meta name="keywords" content="{!! preg_replace('/(<.*?>)|(&.*?;)/', '', get_content_value('meta_data')) !!}" />
    <meta name="description" content="{!! preg_replace('/(<.*?>)|(&.*?;)/', '', get_content_value('meta_data')) !!}" /> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:image" content="{{ asset('user/images/church_logo.png') }}">
    <meta name="twitter:image" content="{{ asset('user/images/church_logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('user/images/favicon1.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('user/images/favicon1.ico') }}" type="image/x-icon">

    {{-- <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/bootstrap-theme.css')}}" rel="stylesheet" type="text/css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/owl.theme.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/color7.css')}}" rel="stylesheet" type="text/css">
    {{-- <script src="{{asset('user/sahodharan/js/modernizr.js')}}"></script> --}}
    <title>@yield('title')</title>
    @yield('style')
</head>

<body>

    {{-- @include('user.header.header-saho')
    @yield('content')
    @include('user.footer.footer-saho') --}}
@yield('content')
    {{-- <script src="{{ asset('user/js/jquery-2.1.1.min.js') }}"></script>
    <script src="{{asset('user/sahodharan/js/jquery.magnific-popup.min.js')}}"></script> <!-- PrettyPhoto Plugin -->
    <script src="{{asset('user/sahodharan/js/ui-plugins.js')}}"></script> <!-- UI Plugins -->
    <script src="{{asset('user/sahodharan/js/helper-plugins.js')}}"></script> <!-- Helper Plugins -->
    <script src="{{asset('user/sahodharan/js/owl.carousel.min.js')}}"></script> <!-- Owl Carousel -->
    <script src="{{asset('user/sahodharan/js/bootstrap.js')}}"></script> <!-- UI -->
    <script src="{{asset('user/sahodharan/js/init.js')}}"></script> <!-- All Scripts -->
    <script src="{{asset('user/sahodharan/js/jquery.flexslider.js')}}"></script> <!-- FlexSlider -->
    <script src="{{asset('user/sahodharan/js/circle-progress.js')}}"></script> <!-- Circle Progress Bars --> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
      // nav dropdown submenu
      $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
          if (!$(this).next().hasClass('show')) {
              $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
          }
          var $subMenu = $(this).next(".dropdown-menu");
          $subMenu.toggleClass('show');
          $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
              $('.dropdown-submenu .show').removeClass("show");
          });
          return false;
      });
      </script>
    @yield('script')

</body>

</html>
