
<style type="text/css">
  .sm_screen_logo span img{
    display: none !important;
  }

@media (max-width:767px){
  .sm_screen_logo span img{
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

                       <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('admin/dashboard')}}" aria-expanded="false"><i class="fas fa-home m-r-3 m-l-3"></i><span class="hide-menu">Dashboard</span></a></li>

                        <!--<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark {{ request()->is('admin/church-category') ? 'active' : '' }}{{ request()->is('admin/church-category/create') ? 'active' : '' }} {{ request()->is('admin/church-category/*/edit') ? 'active' : '' }} {{ request()->is('admin/church') ? 'active' : '' }}{{ request()->is('admin/church/create') ? 'active' : '' }} {{ request()->is('admin/church/*/edit') ? 'active' : '' }}" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-university"></i><span class="hide-menu">The Church</span></a>-->
                        <!--  <ul aria-expanded="false" class="collapse  first-level  {{ request()->is('admin/church-category') ? 'in' : '' }}{{ request()->is('admin/church-category/create') ? 'in' : '' }}{{ request()->is('admin/church-category/*/edit') ? 'in' : '' }} {{ request()->is('admin/church') ? 'in' : '' }}{{ request()->is('admin/church/create') ? 'in' : '' }} {{ request()->is('admin/church/*/edit') ? 'in' : '' }}">-->
                        <!--    <li class="sidebar-item {{ request()->is('admin/church-category/create') ? 'active' : '' }}{{ request()->is('admin/church-category/*/edit') ? 'active' : '' }}"><a href="{{url('admin/church-category/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Church Category</span></a></li>-->
                        <!--    <li class="sidebar-item {{ request()->is('admin/church/create') ? 'active' : '' }}{{ request()->is('admin/church/*/edit') ? 'active' : '' }}"><a href="{{url('admin/church/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Church</span></a></li>-->
                        <!--  </ul>-->
                        <!--</li>-->
                         @if(Auth::getUser()->type!=2)

                        <!-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark {{ request()->is('admin/church-category') ? 'active' : '' }}{{ request()->is('admin/church-category/create') ? 'active' : '' }} {{ request()->is('admin/church-category/*/edit') ? 'active' : '' }} {{ request()->is('admin/church') ? 'active' : '' }}{{ request()->is('admin/parish_history') ? 'in' : '' }}{{ request()->is('admin/saint/create') ? 'in' : '' }}{{ request()->is('admin/saint/*/edit') ? 'in' : '' }}" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-university"></i><span class="hide-menu">Church Contents</span></a>
                          <ul aria-expanded="false" class="collapse  first-level  {{ request()->is('admin/saint/create') ? 'in' : '' }}{{ request()->is('admin/saint/create') ? 'in' : '' }}{{ request()->is('admin/saint/*/edit') ? 'in' : '' }} {{ request()->is('admin/parish_history') ? 'in' : '' }}">
                            <li class="sidebar-item"><a href="{{url('admin/parish_history')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Parish History</span></a></li>
                        <li class="sidebar-item"><a href="{{url('admin/mosc_history')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">MOSC History</span></a></li>
                        <li class="sidebar-item"><a href="{{url('admin/diocese_history')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">DIOCESE History</span></a></li>
                        <li class="sidebar-item"> <a  href="{{url('admin/saint/index')}}" class="sidebar-link"><i class="fa fa-paint-brush"></i><span class="hide-menu">Saints</span></a></li>
                         <li class="sidebar-item"><a href="{{url('admin/gratitude')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Gratitude</span></a></li>
                           <li class="sidebar-item"><a href="{{url('admin/order_of_stgeorge')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Order of St.George</span></a></li>
                          </ul>
                        </li> -->
                        {{-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark {{ request()->is('admin/menu_type') ? 'active' : '' }}{{ request()->is('admin/menu_type/create') ? 'active' : '' }} {{ request()->is('admin/menu_type/*/edit') ? 'active' : '' }} {{ request()->is('admin/menu_type') ? 'active' : '' }}{{ request()->is('admin/menus/create') ? 'active' : '' }} {{ request()->is('admin/menus/*/edit') ? 'active' : '' }}" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-newspaper m-r-3 m-l-3"></i><span class="hide-menu">Menus</span></a>
                            <ul aria-expanded="false" class="collapse  first-level  {{ request()->is('admin/menu_type') ? 'in' : '' }}{{ request()->is('admin/menu_type/create') ? 'in' : '' }}{{ request()->is('admin/menu_type/*/edit') ? 'in' : '' }} {{ request()->is('admin/menu_type') ? 'in' : '' }}{{ request()->is('admin/menu_type/create') ? 'in' : '' }} {{ request()->is('admin/menu_type/*/edit') ? 'in' : '' }}">
                              <li class="sidebar-item {{ request()->is('admin/menu_type/create') ? 'active' : '' }}{{ request()->is('admin/menu_type/*/edit') ? 'active' : '' }}"><a href="{{url('admin/menu_type/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Menu Type</span></a></li>
                               <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->is('admin/menus') ? 'active' : '' }}{{ request()->is('admin/menus/create') ? 'active' : '' }}{{ request()->is('admin/menus/*/edit') ? 'active' : '' }}" href="{{url('admin/menus/index')}}" aria-expanded="false"><i class="fas fa-address-card m-r-3 m-l-3"></i><span class="hide-menu">Manage Menu</span></a></li>

                            </ul>
                          </li>

                         <li class="sidebar-item"><a href="{{url('admin/message/index')}}" class="sidebar-link"><i class="fa fa-envelope-open"></i><span class="hide-menu">Messages</span></a></li>--}}
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->is('admin/vicar') ? 'active' : '' }}{{ request()->is('admin/vicar/create') ? 'active' : '' }}{{ request()->is('admin/vicar/*/edit') ? 'active' : '' }}" href="{{url('admin/vicar/index')}}" aria-expanded="false"><i class="fa fa-user-plus"></i><span class="hide-menu">Our Bishops/Vicars/Committee Members</span></a></li>
                            <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->is('admin/altar') ? 'active' : '' }}{{ request()->is('admin/altar/create') ? 'active' : '' }}{{ request()->is('admin/altar/*/edit') ? 'active' : '' }}" href="{{url('admin/altar/index')}}" aria-expanded="false"><i class="fa fa-medkit"></i><span class="hide-menu">Altar Assistants</span></a></li>  -->

                            {{--<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark {{ request()->is('admin/members_cat') ? 'active' : '' }}{{ request()->is('admin/members_cat/create') ? 'active' : '' }} {{ request()->is('admin/members_cat/*/edit') ? 'active' : '' }} {{ request()->is('admin/members_cat') ? 'active' : '' }}{{ request()->is('admin/members_cat/create') ? 'active' : '' }} {{ request()->is('admin/members_cat/*/edit') ? 'active' : '' }}" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Church Committee</span></a>
                          <ul aria-expanded="false" class="collapse  first-level  {{ request()->is('admin/members_cat') ? 'in' : '' }}{{ request()->is('admin/members_cat/create') ? 'in' : '' }}{{ request()->is('admin/members_cat/*/edit') ? 'in' : '' }} {{ request()->is('admin/members_cat') ? 'in' : '' }}{{ request()->is('admin/members_cat/create') ? 'in' : '' }} {{ request()->is('admin/vicar/*/edit') ? 'in' : '' }}{{ request()->is('admin/vicar') ? 'in' : '' }} {{ request()->is('admin/altar/*/edit') ? 'in' : '' }}{{ request()->is('admin/altar') ? 'in' : '' }}">

                            <li class="sidebar-item {{ request()->is('admin/members_cat/create') ? 'active' : '' }}{{ request()->is('admin/members_cat/*/edit') ? 'active' : '' }}"><a href="{{url('admin/members_cat/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Committee Category</span></a></li>
                            <li class="sidebar-item {{ request()->is('admin/member-subcategory/create') ? 'active' : '' }}{{ request()->is('admin/member-subcategory/*/edit') ? 'active' : '' }}"><a href="{{url('admin/member-subcategory/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Committee Sub Category</span></a></li>

                            <li class="sidebar-item {{ request()->is('admin/members_cat/create') ? 'active' : '' }}{{ request()->is('admin/members_cat/*/edit') ? 'active' : '' }}"><a href="{{url('admin/members/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Manage Committee Members</span></a></li>
                          </ul>
                        </li>--}}

                        @endif
                        <!-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark {{ request()->is('admin/members_cat') ? 'active' : '' }}{{ request()->is('admin/members_cat/create') ? 'active' : '' }} {{ request()->is('admin/members_cat/*/edit') ? 'active' : '' }} {{ request()->is('admin/members_cat') ? 'active' : '' }}{{ request()->is('admin/members_cat/create') ? 'active' : '' }} {{ request()->is('admin/members_cat/*/edit') ? 'active' : '' }}" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Church Services</span></a>
                          <ul aria-expanded="false" class="collapse  first-level  {{ request()->is('admin/members_cat') ? 'in' : '' }}{{ request()->is('admin/members_cat/create') ? 'in' : '' }}{{ request()->is('admin/members_cat/*/edit') ? 'in' : '' }} {{ request()->is('admin/members_cat') ? 'in' : '' }}{{ request()->is('admin/members_cat/create') ? 'in' : '' }} {{ request()->is('admin/services/*/edit') ? 'in' : '' }}{{ request()->is('admin/services') ? 'in' : '' }} {{ request()->is('admin/altar/*/edit') ? 'in' : '' }}{{ request()->is('admin/altar') ? 'in' : '' }}"> -->
{{--
                             <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark {{ request()->is('admin/church-category') ? 'active' : '' }}{{ request()->is('admin/church-category/create') ? 'active' : '' }} {{ request()->is('admin/church-category/*/edit') ? 'active' : '' }} {{ request()->is('admin/church') ? 'active' : '' }}{{ request()->is('admin/reg_summary_report') ? 'in' : '' }}{{ request()->is('admin/services/create') ? 'in' : '' }}{{ request()->is('admin/services/*/edit') ? 'in' : '' }}" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-h-square"></i><span class="hide-menu">Holy Qurbana Registration</span></a>
                          <ul aria-expanded="false" class="collapse  first-level  {{ request()->is('admin/services/create') ? 'in' : '' }}{{ request()->is('admin/services/create') ? 'in' : '' }}{{ request()->is('admin/services/*/edit') ? 'in' : '' }} {{ request()->is('admin/reg_summary_report') ? 'in' : '' }}">
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->is('admin/services') ? 'active' : '' }}{{ request()->is('admin/services/create') ? 'active' : '' }}{{ request()->is('admin/services/*/edit') ? 'active' : '' }}" href="{{url('admin/services/index')}}" aria-expanded="false"><i class="fa fa-user-plus"></i><span class="hide-menu">Church Services</span></a></li>
                             {{-- <li class="sidebar-item {{ request()->is('admin/reg_summary_report') ? 'active' : '' }}"><a href="{{url('admin/reg_summary_report/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Registration Summary Report</span></a></li> --}}
                      {{-- <li class="sidebar-item {{ request()->is('admin/online_reg_report') ? 'active' : '' }}"><a href="{{url('admin/online_reg_report/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Online Registration Report</span></a></li>
                       <li class="sidebar-item {{ request()->is('admin/exclude_report') ? 'active' : '' }}"><a href="{{url('admin/exclude_report/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Exclude Registration Report</span></a></li>

                          </ul>
                        </li> --}}

                         @if(Auth::getUser()->type!=2)
                        {{-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark {{ request()->is('admin/banner') ? 'active' : '' }}{{ request()->is('admin/banner/create') ? 'active' : '' }}{{ request()->is('admin/banner/*/edit') ? 'active' : '' }}{{ request()->is('admin/privacy-policy') ? 'active' : '' }}{{ request()->is('admin/terms-conditions') ? 'active' : '' }}{{ request()->is('admin/meta-data') ? 'active' : '' }}" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-cubes"></i><span class="hide-menu">Organization Management</span></a>
                      <ul aria-expanded="false" class="collapse  first-level {{ request()->is('admin/organization') ? 'in' : '' }}{{ request()->is('admin/organization/create') ? 'in' : '' }}{{ request()->is('admin/organization/*/edit') ? 'in' : '' }}{{ request()->is('admin/org_tile') ? 'in' : '' }}{{ request()->is('admin/orgmembers') ? 'in' : '' }}">


                        <!--<li class="sidebar-item"><a href="{{url('admin/org_tile')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Manage Tile</span></a></li>-->

                        <li class="sidebar-item"><a href="{{url('admin/orgmembers/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Organization Members</span></a></li>

                      </ul>
                    </li> --}}

                    {{-- <li class="sidebar-item"><a href="{{url('admin/user/index')}}" class="sidebar-link"><i class="fa fa-user"></i><span class="hide-menu">Users</span></a></li> --}}
                    {{-- <li class="sidebar-item {{ request()->is('admin/organization/index') ? 'active' : '' }}{{ request()->is('admin/organization/create') ? 'active' : '' }}{{ request()->is('admin/organization/*/edit') ? 'active' : '' }}"><a href="{{url('admin/organization/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Organizations</span></a></li> --}}

                    {{-- <li class="sidebar-item"><a href="{{url('admin/service_timing')}}" class="sidebar-link"><i class="fas fa-clock"></i><span class="hide-menu">Worship Schedule</span></a></li> --}}

                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark {{ request()->is('admin/lectionary_category') ? 'active' : '' }}{{ request()->is('admin/lectionary_category/create') ? 'active' : '' }} {{ request()->is('admin/lectionary_category/*/edit') ? 'active' : '' }} {{ request()->is('admin/lectionary_category') ? 'active' : '' }}{{ request()->is('admin/lectionary_category/create') ? 'active' : '' }} {{ request()->is('admin/news/*/edit') ? 'active' : '' }}" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-university"></i><span class="hide-menu">Become A Friend Section</span></a>
                      <ul aria-expanded="false" class="collapse  first-level  {{ request()->is('admin/lectionary_category') ? 'in' : '' }}{{ request()->is('admin/lectionary_category/create') ? 'in' : '' }}{{ request()->is('admin/lectionary_category/*/edit') ? 'in' : '' }} {{ request()->is('admin/lectionary_category') ? 'in' : '' }}{{ request()->is('admin/lectionary_category/create') ? 'in' : '' }} {{ request()->is('admin/lectionary_category/*/edit') ? 'in' : '' }}">
                        {{-- <li class="sidebar-item"><a href="{{url('admin/lectionary_category/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Lectionary Category</span></a></li> --}}
                        <li class="sidebar-item"><a href="{{url('admin/become_friend/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Become A Friend</span></a></li>
                        <li class="sidebar-item"><a href="{{url('admin/become_friend_plans/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Become A Friend Plans</span></a></li>
                        {{-- <li class="sidebar-item"><a href="{{url('admin/lectionary/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Lectionary Details</span></a></li> --}}
                      </ul>
                    </li>


                    {{-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark {{ request()->is('admin/news_cat') ? 'active' : '' }}{{ request()->is('admin/news_cat/create') ? 'active' : '' }} {{ request()->is('admin/news_cat/*/edit') ? 'active' : '' }} {{ request()->is('admin/news') ? 'active' : '' }}{{ request()->is('admin/news/create') ? 'active' : '' }} {{ request()->is('admin/news/*/edit') ? 'active' : '' }}" href="javascript:void(0)" aria-expanded="false"><i class="far fa-calendar-alt"></i><span class="hide-menu">News</span></a>
                          <ul aria-expanded="false" class="collapse  first-level  {{ request()->is('admin/news_cat') ? 'in' : '' }}{{ request()->is('admin/news_cat/create') ? 'in' : '' }}{{ request()->is('admin/news_cat/*/edit') ? 'in' : '' }} {{ request()->is('admin/news') ? 'in' : '' }}{{ request()->is('admin/news/create') ? 'in' : '' }} {{ request()->is('admin/news/*/edit') ? 'in' : '' }}">
                            <li class="sidebar-item {{ request()->is('admin/news_cat/create') ? 'active' : '' }}{{ request()->is('admin/news_cat/*/edit') ? 'active' : '' }}"><a href="{{url('admin/news_cat/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">News Category</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->is('admin/news') ? 'active' : '' }}{{ request()->is('admin/news/create') ? 'active' : '' }}{{ request()->is('admin/news/*/edit') ? 'active' : '' }}" href="{{url('admin/news/index')}}" aria-expanded="false"><i class="fas fa-newspaper m-r-3 m-l-3"></i><span class="hide-menu">News</span></a></li>
                          </ul>
                        </li> --}}

                        <li class="sidebar-item"><a href="{{url('admin/news/index')}}" class="sidebar-link"><i class="fas fa-calendar-alt"></i><span class="hide-menu">News</span></a></li>
                        <li class="sidebar-item"><a href="{{url('admin/donate/index')}}" class="sidebar-link"><i class="fa fa-credit-card"></i><span class="hide-menu">Donation Contents</span></a></li>

                        <li class="sidebar-item"><a href="{{url('admin/payments/index')}}" class="sidebar-link"><i class="fas fa-calendar-alt"></i><span class="hide-menu">Payment Details</span></a></li>

                        <li class="sidebar-item"><a href="{{url('admin/diocese/index')}}" class="sidebar-link"><i class="fas fa-calendar-alt"></i><span class="hide-menu">Diocese</span></a></li>
                        <li class="sidebar-item"><a href="{{url('admin/parish/index')}}" class="sidebar-link"><i class="fas fa-calendar-alt"></i><span class="hide-menu">Parish</span></a></li>



                    <li class="sidebar-item"><a href="{{url('admin/churchcontacts/index')}}" class="sidebar-link"><i class="fa fa-phone"></i><span class="hide-menu">Contact Us</span></a></li>

                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark {{ request()->is('admin/gallery-category') ? 'active' : '' }}{{ request()->is('admin/gallery-category/create') ? 'active' : '' }} {{ request()->is('admin/gallery-category/*/edit') ? 'active' : '' }}
                        {{ request()->is('admin/video/create') ? 'active' : '' }} {{ request()->is('admin/video/*/edit') ? 'active' : '' }} {{ request()->is('admin/audio/create') ? 'active' : '' }} {{ request()->is('admin/audio/*/edit') ? 'active' : '' }} {{ request()->is('admin/gallery') ? 'active' : '' }}{{ request()->is('admin/gallery/create') ? 'active' : '' }} {{ request()->is('admin/gallery/*/edit') ? 'active' : '' }}" href="javascript:void(0)" aria-expanded="false"><i class="far fa-images m-r-3 m-l-3"></i><span class="hide-menu">Gallery</span></a>
                          <ul aria-expanded="false" class="collapse  first-level  {{ request()->is('admin/gallery-category') ? 'in' : '' }}{{ request()->is('admin/gallery-category/create') ? 'in' : '' }}{{ request()->is('admin/gallery-category/*/edit') ? 'in' : '' }}
                          {{ request()->is('admin/gallery-subcategory') ? 'in' : '' }}{{ request()->is('admin/gallery-subcategory/create') ? 'in' : '' }}{{ request()->is('admin/gallery-subcategory/*/edit') ? 'in' : '' }} {{ request()->is('admin/gallery') ? 'in' : '' }}{{ request()->is('admin/gallery/create') ? 'in' : '' }} {{ request()->is('admin/gallery/*/edit') ? 'in' : '' }}">
                            <li class="sidebar-item {{ request()->is('admin/gallery-category/create') ? 'active' : '' }}{{ request()->is('admin/gallery-category/*/edit') ? 'active' : '' }}"><a href="{{url('admin/gallery-category/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Gallery Category</span></a></li>
                             <!-- <li class="sidebar-item {{ request()->is('admin/gallery-subcategory/create') ? 'active' : '' }}{{ request()->is('admin/gallery-subcategory/*/edit') ? 'active' : '' }}"><a href="{{url('admin/gallery-subcategory/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Gallery Sub Category</span></a></li> -->
                            <li class="sidebar-item {{ request()->is('admin/gallery/create') ? 'active' : '' }}{{ request()->is('admin/gallery/*/edit') ? 'active' : '' }}"><a href="{{url('admin/gallery/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Image Gallery</span></a></li>
                            <li class="sidebar-item {{ request()->is('admin/video/create') ? 'active' : '' }}{{ request()->is('admin/video/*/edit') ? 'active' : '' }}"><a href="{{url('admin/video/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Video Gallery</span></a></li>
                            {{--<li class="sidebar-item {{ request()->is('admin/audio/create') ? 'active' : '' }}{{ request()->is('admin/audio/*/edit') ? 'active' : '' }}"><a href="{{url('admin/audio/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Audio Gallery</span></a></li>--}}
                          </ul>
                        </li>

                        {{-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark {{ request()->is('admin/library_category') ? 'active' : '' }}{{ request()->is('admin/library_category/create') ? 'active' : '' }} {{ request()->is('admin/library_category/*/edit') ? 'active' : '' }} {{ request()->is('admin/library_category') ? 'active' : '' }}{{ request()->is('admin/library/create') ? 'active' : '' }} {{ request()->is('admin/library/*/edit') ? 'active' : '' }}" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-newspaper m-r-3 m-l-3"></i><span class="hide-menu">Library Category</span></a>
                          <ul aria-expanded="false" class="collapse  first-level  {{ request()->is('admin/library_category') ? 'in' : '' }}{{ request()->is('admin/library_category/create') ? 'in' : '' }}{{ request()->is('admin/library_category/*/edit') ? 'in' : '' }} {{ request()->is('admin/library_category') ? 'in' : '' }}{{ request()->is('admin/library_category/create') ? 'in' : '' }} {{ request()->is('admin/library_category/*/edit') ? 'in' : '' }}">
                            <li class="sidebar-item {{ request()->is('admin/library_category/create') ? 'active' : '' }}{{ request()->is('admin/library_category/*/edit') ? 'active' : '' }}"><a href="{{url('admin/library_category/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Library Category</span></a></li>
                             <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->is('admin/library') ? 'active' : '' }}{{ request()->is('admin/library/create') ? 'active' : '' }}{{ request()->is('admin/library/*/edit') ? 'active' : '' }}" href="{{url('admin/library/index')}}" aria-expanded="false"><i class="fas fa-address-card m-r-3 m-l-3"></i><span class="hide-menu">Manage Library</span></a></li>

                          </ul>
                        </li> --}}



                        {{-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark {{ request()->is('admin/bulletin_cat') ? 'active' : '' }}{{ request()->is('admin/bulletin_cat/create') ? 'active' : '' }} {{ request()->is('admin/bulletin_cat/*/edit') ? 'active' : '' }} {{ request()->is('admin/bulletin_details') ? 'active' : '' }}{{ request()->is('admin/bulletin_details/create') ? 'active' : '' }} {{ request()->is('admin/bulletin_details/*/edit') ? 'active' : '' }}{{ request()->is('admin/bulletin') ? 'active' : '' }}{{ request()->is('admin/bulletin/create') ? 'active' : '' }} {{ request()->is('admin/bulletin/*/edit') ? 'active' : '' }}" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-list-alt"></i><span class="hide-menu">Bulletin</span></a>
                          <ul aria-expanded="false" class="collapse  first-level  {{ request()->is('admin/bulletin_cat') ? 'active' : '' }}{{ request()->is('admin/bulletin_cat/create') ? 'active' : '' }} {{ request()->is('admin/bulletin_cat/*/edit') ? 'active' : '' }} {{ request()->is('admin/bulletin_details') ? 'active' : '' }}{{ request()->is('admin/bulletin_details/create') ? 'active' : '' }} {{ request()->is('admin/bulletin_details/*/edit') ? 'active' : '' }}{{ request()->is('admin/bulletin') ? 'active' : '' }}{{ request()->is('admin/bulletin/create') ? 'active' : '' }} {{ request()->is('admin/bulletin/*/edit') ? 'active' : '' }}">
                            <li class="sidebar-item"><a href="{{url('admin/bulletin_cat/index')}}" class="sidebar-link"><i class="fa fa-list"></i><span class="hide-menu">Bulletin Title</span></a></li> --}}

                            {{-- <li class="sidebar-item"><a href="{{url('admin/bulletin_details/index')}}{{ request()->is('admin/bulletin_details') ? 'active' : '' }}{{ request()->is('admin/bulletin_details/create') ? 'active' : '' }} {{ request()->is('admin/bulletin_details/*/edit') ? 'active' : '' }}" class="sidebar-link"><i class="fa fa-list-alt"></i><span class="hide-menu">Bulletin Month</span></a></li> --}}
                            {{-- <li class="sidebar-item"><a href="{{url('admin/bulletin/index')}}{{ request()->is('admin/bulletin') ? 'active' : '' }}{{ request()->is('admin/bulletin/create') ? 'active' : '' }} {{ request()->is('admin/bulletin/*/edit') ? 'active' : '' }}" class="sidebar-link"><i class="fa fa-list-alt"></i><span class="hide-menu">Bulletin Details</span></a></li> --}}

                            {{-- <li class="sidebar-item"><a href="{{url('admin/bulletin_holy_qurbana/index')}}" class="sidebar-link"><i class="fa fa-list-alt"></i><span class="hide-menu">Holy Qurbana</span></a></li>
                            <li class="sidebar-item"><a href="{{url('admin/bulletin_new_members/index')}}" class="sidebar-link"><i class="fa fa-list-alt"></i><span class="hide-menu">Farewell/New Members</span></a></li>
                            <li class="sidebar-item"><a href="{{url('admin/bulletin_sandhya_namaskaram/index')}}" class="sidebar-link"><i class="fa fa-list-alt"></i><span class="hide-menu">Sandhya Namaskaram/ Kids&Teens</span></a></li>


                          </ul>
                        </li> --}}


                        {{-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark {{ request()->is('admin/events_category') ? 'active' : '' }}{{ request()->is('admin/events_category/create') ? 'active' : '' }} {{ request()->is('admin/events_category/*/edit') ? 'active' : '' }} {{ request()->is('admin/events') ? 'active' : '' }}{{ request()->is('admin/events/create') ? 'active' : '' }} {{ request()->is('admin/events/*/edit') ? 'active' : '' }}" href="javascript:void(0)" aria-expanded="false"><i class="far fa-calendar-alt"></i><span class="hide-menu">Events</span></a>
                          <ul aria-expanded="false" class="collapse  first-level  {{ request()->is('admin/events_category') ? 'in' : '' }}{{ request()->is('admin/events_category/create') ? 'in' : '' }}{{ request()->is('admin/events_category/*/edit') ? 'in' : '' }} {{ request()->is('admin/events') ? 'in' : '' }}{{ request()->is('admin/events/create') ? 'in' : '' }} {{ request()->is('admin/events/*/edit') ? 'in' : '' }}">
                            <li class="sidebar-item {{ request()->is('admin/events_category/create') ? 'active' : '' }}{{ request()->is('admin/events_category/*/edit') ? 'active' : '' }}"><a href="{{url('admin/events_category/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Events Category</span></a></li>
                            <li class="sidebar-item"><a href="{{url('admin/events/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Events</span></a></li>
                          </ul>
                        </li> --}}

                        <li class="sidebar-item"><a href="{{url('admin/events/index')}}" class="sidebar-link"><i class="fas fa-calendar-alt"></i><span class="hide-menu">Events</span></a></li>

                          {{--<li class="sidebar-item"><a href="{{url('admin/announcement/index')}}" class="sidebar-link"><i class="fa fa-bullhorn"></i><span class="hide-menu">Announcements</span></a></li>--}}


                        {{-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->is('admin/obituary') ? 'active' : '' }}{{ request()->is('admin/obituary/create') ? 'active' : '' }}{{ request()->is('admin/obituary/*/edit') ? 'active' : '' }}" href="{{url('admin/obituary/index')}}" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Obituary</span></a></li> --}}

                        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->is('admin/prayerbook') ? 'active' : '' }}{{ request()->is('admin/prayerbook/create') ? 'active' : '' }}{{ request()->is('admin/prayerbook/*/edit') ? 'active' : '' }}" href="{{url('admin/prayerbook/index')}}" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Prayer Book</span></a></li> -->
                         <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark {{ request()->is('admin/downloads-category') ? 'active' : '' }}{{ request()->is('admin/downloads-category/create') ? 'active' : '' }} {{ request()->is('admin/downloads-category/*/edit') ? 'active' : '' }} {{ request()->is('admin/downloads') ? 'active' : '' }}{{ request()->is('admin/downloads/create') ? 'active' : '' }} {{ request()->is('admin/downloads/*/edit') ? 'active' : '' }}" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-download m-r-3 m-l-3"></i><span class="hide-menu">Downloads</span></a>
                          <ul aria-expanded="false" class="collapse  first-level  {{ request()->is('admin/downloads-category') ? 'in' : '' }}{{ request()->is('admin/downloads-category/create') ? 'in' : '' }}{{ request()->is('admin/downloads-category/*/edit') ? 'in' : '' }} {{ request()->is('admin/downloads') ? 'in' : '' }}{{ request()->is('admin/downloads/create') ? 'in' : '' }} {{ request()->is('admin/downloads/*/edit') ? 'in' : '' }}">
                            {{-- <li class="sidebar-item {{ request()->is('admin/downloads-category/create') ? 'active' : '' }}{{ request()->is('admin/downloads-category/*/edit') ? 'active' : '' }}"><a href="{{url('admin/downloads-category/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Downloads Category</span></a></li> --}}
                            <li class="sidebar-item {{ request()->is('admin/downloads/create') ? 'active' : '' }}{{ request()->is('admin/downloads/*/edit') ? 'active' : '' }}"><a href="{{url('admin/downloads/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Downloads</span></a></li>
                          </ul>
                        </li>

                        {{--  <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark {{ request()->is('admin/quick-links') ? 'active' : '' }}{{ request()->is('admin/quick-links/create') ? 'active' : '' }} {{ request()->is('admin/quick-links/*/edit') ? 'active' : '' }} {{ request()->is('admin/quick-links') ? 'active' : '' }}{{ request()->is('admin/quick-links/create') ? 'active' : '' }} {{ request()->is('admin/news/*/edit') ? 'active' : '' }}" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-list-alt"></i><span class="hide-menu">Quick Links</span></a>
                            <ul aria-expanded="false" class="collapse  first-level  {{ request()->is('admin/quick-links') ? 'in' : '' }}{{ request()->is('admin/quick-links/create') ? 'in' : '' }}{{ request()->is('admin/quick-links/*/edit') ? 'in' : '' }} {{ request()->is('admin/quick-links') ? 'in' : '' }}{{ request()->is('admin/quick-links/create') ? 'in' : '' }} {{ request()->is('admin/quick-links/*/edit') ? 'in' : '' }}">
                              <li class="sidebar-item"><a href="{{url('admin/quick_link_category/index')}}" class="sidebar-link"><i class="fa fa-list"></i><span class="hide-menu">Quick Link Category</span></a></li>

                              <li class="sidebar-item"><a href="{{url('admin/quick-links/index')}}" class="sidebar-link"><i class="fa fa-list-alt"></i><span class="hide-menu">Quick Link Details</span></a></li>

                            </ul>
                          </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark {{ request()->is('admin/facility_cat') ? 'active' : '' }}{{ request()->is('admin/facility_cat/create') ? 'active' : '' }} {{ request()->is('admin/facility_cat/*/edit') ? 'active' : '' }} {{ request()->is('admin/facility_cat') ? 'active' : '' }}{{ request()->is('admin/facility_cat/create') ? 'active' : '' }} {{ request()->is('admin/facility_cat/*/edit') ? 'active' : '' }} {{ request()->is('admin/facility') ? 'active' : '' }}{{ request()->is('admin/facility/create') ? 'active' : '' }} {{ request()->is('admin/facility/*/edit') ? 'active' : '' }} {{ request()->is('admin/facility') ? 'active' : '' }}{{ request()->is('admin/facility/create') ? 'active' : '' }} {{ request()->is('admin/facility/*/edit') ? 'active' : '' }}" href="javascript:void(0)" aria-expanded="false"><i class="fab fa-flipboard m-r-3 m-l-3"></i><span class="hide-menu">Facility</span></a>
                          <ul aria-expanded="false" class="collapse  first-level  {{ request()->is('admin/facility_cat') ? 'in' : '' }}{{ request()->is('admin/facility_cat/create') ? 'in' : '' }}{{ request()->is('admin/facility_cat/*/edit') ? 'in' : '' }} {{ request()->is('admin/facility_cat') ? 'in' : '' }}{{ request()->is('admin/facility_cat/create') ? 'in' : '' }} {{ request()->is('admin/facility_cat/*/edit') ? 'in' : '' }}">
                            <li class="sidebar-item {{ request()->is('admin/facility_cat/create') ? 'active' : '' }}{{ request()->is('admin/facility_cat/*/edit') ? 'active' : '' }}"><a href="{{url('admin/facility_cat/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Facility Category</span></a></li>
                            <li class="sidebar-item {{ request()->is('admin/facility/create') ? 'active' : '' }}{{ request()->is('admin/facility/*/edit') ? 'active' : '' }}"><a href="{{url('admin/facility/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Manage Facilities</span></a></li>
                          </ul>
                        </li> --}}


                        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->is('admin/inbox_circular') ? 'active' : '' }}{{ request()->is('admin/inbox_circular/create') ? 'active' : '' }}{{ request()->is('admin/inbox_circular/*/edit') ? 'active' : '' }}" href="{{url('admin/inbox_circular/index')}}" aria-expanded="false"><i class="fa fa-database"></i><span class="hide-menu">Inbox & Circular</span></a></li> -->


                        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->is('admin/contactus/*') ? 'active' : '' }}" href="{{url('admin/contactus/index')}}" aria-expanded="false"><i class="fas fa-phone m-r-3 m-l-3"></i><span class="hide-menu">Reach US</span></a></li> -->




                        {{--<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark {{ request()->is('admin/prayer_request_types') ? 'active' : '' }}{{ request()->is('admin/prayer_request_types/create') ? 'active' : '' }} {{ request()->is('admin/prayer_request_types/*/edit') ? 'active' : '' }} {{ request()->is('admin/prayer_request') ? 'active' : '' }}{{ request()->is('admin/prayer_request/create') ? 'active' : '' }} {{ request()->is('admin/prayer_request/*/edit') ? 'active' : '' }}" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-object-group"></i><span class="hide-menu">Prayer Request</span></a>
                          <ul aria-expanded="false" class="collapse  first-level  {{ request()->is('admin/prayer_request_types') ? 'in' : '' }}{{ request()->is('admin/prayer_request_types/create') ? 'in' : '' }}{{ request()->is('admin/prayer_request_types/*/edit') ? 'in' : '' }} {{ request()->is('admin/prayer_request') ? 'in' : '' }}{{ request()->is('admin/prayer_request/create') ? 'in' : '' }} {{ request()->is('admin/prayer_request/*/edit') ? 'in' : '' }}">
                            <li class="sidebar-item {{ request()->is('admin/prayer_request_types/create') ? 'active' : '' }}{{ request()->is('admin/prayer_request_types/*/edit') ? 'active' : '' }}"><a href="{{url('admin/prayer_request_types/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Prayer Request Types</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->is('admin/prayer_request/*') ? 'active' : '' }}" href="{{url('admin/prayer_request/index')}}" aria-expanded="false"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Prayer Request</span></a></li>

                          </ul>
                        </li>--}}

                        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->is('admin/chats') ? 'active' : '' }}{{ request()->is('admin/chats/create') ? 'active' : '' }}{{ request()->is('admin/chats/*/edit') ? 'active' : '' }}" href="{{url('admin/chats/index')}}" aria-expanded="false"><i class="fa fa-comment"></i><span class="hide-menu">Chats</span></a></li> -->

                        <!-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark {{ request()->is('admin/classifieds-category') ? 'active' : '' }}{{ request()->is('admin/classifieds-category/create') ? 'active' : '' }} {{ request()->is('admin/classifieds-category/*/edit') ? 'active' : '' }} {{ request()->is('admin/classifieds') ? 'active' : '' }}{{ request()->is('admin/classifieds/create') ? 'active' : '' }} {{ request()->is('admin/classifieds/*/edit') ? 'active' : '' }}" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-recycle"></i><span class="hide-menu">Classifieds</span></a>
                          <ul aria-expanded="false" class="collapse  first-level  {{ request()->is('admin/classifieds-category') ? 'in' : '' }}{{ request()->is('admin/classifieds-category/create') ? 'in' : '' }}{{ request()->is('admin/classifieds-category/*/edit') ? 'in' : '' }} {{ request()->is('admin/classifieds') ? 'in' : '' }}{{ request()->is('admin/classifieds/create') ? 'in' : '' }} {{ request()->is('admin/classifieds/*/edit') ? 'in' : '' }}">
                            <li class="sidebar-item {{ request()->is('admin/classifieds-category/create') ? 'active' : '' }}{{ request()->is('admin/classifieds-category/*/edit') ? 'active' : '' }}"><a href="{{url('admin/classifieds-category/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Classifieds Category</span></a></li>
                            <li class="sidebar-item {{ request()->is('admin/classifieds/create') ? 'active' : '' }}{{ request()->is('admin/classifieds/*/edit') ? 'active' : '' }}"><a href="{{url('admin/classifieds/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Classifieds</span></a></li>
                          </ul>
                        </li> -->



                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark {{ request()->is('admin/banner') ? 'active' : '' }}{{ request()->is('admin/banner/create') ? 'active' : '' }}{{ request()->is('admin/banner/*/edit') ? 'active' : '' }}{{ request()->is('admin/about-us') ? 'active' : '' }}{{ request()->is('admin/contact-us') ? 'active' : '' }}{{ request()->is('admin/privacy-policy') ? 'active' : '' }}{{ request()->is('admin/terms-conditions') ? 'active' : '' }}{{ request()->is('admin/meta-data') ? 'active' : '' }}" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-desktop m-r-3 m-l-3"></i><span class="hide-menu">Website Contents</span></a>
                      <ul aria-expanded="false" class="collapse  first-level {{ request()->is('admin/banner') ? 'in' : '' }}{{ request()->is('admin/banner/create') ? 'in' : '' }}{{ request()->is('admin/banner/*/edit') ? 'in' : '' }}{{ request()->is('admin/about-us') ? 'in' : '' }}{{ request()->is('admin/contact-us') ? 'in' : '' }}{{ request()->is('admin/privacy-policy') ? 'in' : '' }}{{ request()->is('admin/terms-conditions') ? 'in' : '' }}{{ request()->is('admin/meta-data') ? 'in' : '' }}">

                        {{--<li class="sidebar-item"><a href="{{url('admin/org_aboutus/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Manage About Us</span></a></li>
                        <li class="sidebar-item"><a href="{{url('admin/org_contactus/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Manage Contact Us</span></a></li>--}}
                        <li class="sidebar-item"><a href="{{url('admin/parish_history')}}" class="sidebar-link"><i class="fa fa-book"></i><span class="hide-menu">Our Mission</span></a></li>
<!--
                        <li class="sidebar-item"><a href="{{url('admin/heritage')}}" class="sidebar-link"><i class="fa fa-book"></i><span class="hide-menu">Heritage</span></a></li> -->

                        {{--<li class="sidebar-item"><a href="{{url('admin/our_diocese')}}" class="sidebar-link"><i class="fa fa-university"></i><span class="hide-menu">Our Diocese</span></a></li>--}}
                        <!--
                        <li class="sidebar-item"><a href="{{url('admin/messagefromvicar')}}" class="sidebar-link"><i class="fa fa-envelope"></i><span class="hide-menu">Message From Vicar</span></a></li> -->

                        {{-- <li class="sidebar-item"><a href="{{url('admin/year/index')}}" class="sidebar-link"><i class="fa fa-calendar"></i><span class="hide-menu">Year Management</span></a></li> --}}


                         <li class="sidebar-item"><a href="{{url('admin/about_church')}}" class="sidebar-link"><i class="fa fa-info-circle"></i><span class="hide-menu">About Us</span></a></li>


                        <li class="sidebar-item {{ request()->is('admin/banner') ? 'active' : '' }}{{ request()->is('admin/banner/create') ? 'active' : '' }}{{ request()->is('admin/banner/*/edit') ? 'active' : '' }}"><a href="{{url('admin/banner/index')}}" class="sidebar-link"><i class="fa fa-flag"></i><span class="hide-menu">Banner</span></a></li>

                        <li class="sidebar-item {{ request()->is('admin/testimonials') ? 'active' : '' }}{{ request()->is('admin/testimonials/create') ? 'active' : '' }}{{ request()->is('admin/testimonials/*/edit') ? 'active' : '' }}"><a href="{{url('admin/testimonials/index')}}" class="sidebar-link"><i class="fa fa-envelope"></i><span class="hide-menu">Testimonials</span></a></li>

                        <li class="sidebar-item"><a href="{{url('admin/location_history')}}" class="sidebar-link"><i class="fa fa-map"></i><span class="hide-menu">Location Map</span></a></li>
                        <li class="sidebar-item"><a href="{{url('admin/contact-us')}}" class="sidebar-link"><i class="fa fa-phone"></i><span class="hide-menu">Contact Address</span></a></li>
                        <li class="sidebar-item"><a href="{{url('admin/terms-conditions')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Terms & Conditions</span></a></li>
                          <li class="sidebar-item"><a href="{{url('admin/privacy-policy')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Privacy Policy</span></a></li>
                          {{-- <li class="sidebar-item"><a href="{{url('admin/refund-policy')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Refund Policy</span></a></li> --}}
                         {{--<li class="sidebar-item"><a href="{{url('admin/messagemonth_history')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Message of the Month</span></a></li>
                         <li class="sidebar-item"><a href="{{url('admin/beamember/index')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Be A Member</span></a></li>

                        <li class="sidebar-item"><a href="{{url('admin/privacy-policy')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Privacy Policy</span></a></li>--}}
                        {{-- <li class="sidebar-item"><a href="{{url('admin/terms-conditions')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Terms & Conditions</span></a></li> --}}
                       {{-- <li class="sidebar-item"><a href="{{url('admin/club_timing')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Club Timing</span></a></li> --}}
                        <li class="sidebar-item"><a href="{{url('admin/meta-data')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Meta Data</span></a></li>

                      </ul>
                    </li>
   {{--<li class="sidebar-item {{ request()->is('admin/year') ? 'active' : '' }}{{ request()->is('admin/year/create') ? 'active' : '' }}{{ request()->is('admin/year/*/edit') ? 'active' : '' }}"><a href="{{url('admin/year/index')}}" class="sidebar-link"><i class="fa fa-calendar"></i><span class="hide-menu">Year</span></a></li>--}}

                       <li class="sidebar-item {{ request()->is('admin/email-template') ? 'active' : '' }}{{ request()->is('admin/email-template/create') ? 'active' : '' }}{{ request()->is('admin/email-template/*/edit') ? 'active' : '' }}"><a href="{{url('admin/email-template/index')}}" class="sidebar-link"><i class="fas fa-envelope m-r-3 m-l-3"></i><span class="hide-menu">Email Template</span></a></li>

                       <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('admin/settings/index')}}" aria-expanded="false"><i class="ti-settings m-r-3 m-l-3"></i><span class="hide-menu">Settings</span></a></li>

                       <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('admin/change_password')}}" aria-expanded="false"><i class="	fa fa-unlock-alt"></i><span class="hide-menu">Change Password</span></a></li>
                       @endif

                   </ul>
               </nav>
               <!-- End Sidebar navigation -->
           </div>
           <!-- End Sidebar scroll-->
       </aside>

       <div class="page-wrapper">
       <div class="admin-loder"><img src="{{asset('admin/images/admin-loder.gif')}}"></div>
