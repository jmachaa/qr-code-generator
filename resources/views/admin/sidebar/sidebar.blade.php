<style type="text/css">
    .sm_screen_logo span img {
        display: none !important;
    }

    @media (max-width:767px) {
        .sm_screen_logo span img {
            /* display: block !important;*/
            margin: 0 auto;
        }

        .left-sidebar {
            z-index: 999;
            margin-top: 0px;
        }

        html[dir=ltr] body .p-t-30 {
            padding-top: 0;
        }
    }
</style>
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<div id="main-wrapper" data-sidebartype="mini-sidebar" class="mini-sidebar">

    <aside class="left-sidebar scroll_hgt" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav ">
                <ul id="sidebarnav" class="p-t-30">

                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{url('admin/dashboard')}}" aria-expanded="false"><i
                                class="fas fa-home m-r-3 m-l-3"></i><span class="hide-menu">Dashboard</span></a></li>
                    @if(Auth::guard('admin'))

                        <li class="sidebar-item"> <a
                                class=" -link waves-effect waves-dark sidebar-link {{ request()->is('admin/payment') ? 'active' : '' }}"
                                href="{{url('admin/payment/index')}}" aria-expanded="false"><i
                                    class="fas fa-wallet"></i><span class="hide-menu">Payment Details</span></a>
                        </li>
                        <li class="sidebar-item"> <a
                                class=" -link waves-effect waves-dark sidebar-link {{ request()->is('admin/diocese') ? 'active' : '' }}"
                                href="{{url('admin/diocese/index')}}" aria-expanded="false"><i
                                    class="fas fa-church m-r-3 m-l-3"></i><span class="hide-menu">Manage Diocese
                                    </span></a>
                        </li>
                        <li class="sidebar-item"> <a
                                class=" -link waves-effect waves-dark sidebar-link {{ request()->is('admin/parish') ? 'active' : '' }}"
                                href="{{url('admin/parish/index')}}" aria-expanded="false"><i
                                    class="fa fa-cross m-r-3 m-l-3"></i><span class="hide-menu">Manage Parish </span></a>
                        </li>

                    @endif

                    <!-- End Sidebar scroll-->
    </aside>

    <div class="page-wrapper">
        <div class="admin-loder"><img src="{{asset('admin/images/admin-loder.gif')}}"></div>
