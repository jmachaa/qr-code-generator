@extends('admin.layouts.masterlayout')
@section('title', 'Payment History')
@section('content')

    <style type="text/css">
        .table_top form {
            float: right;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/select2.min.css')}}">

    <link href="{{asset('admin/css/dataTables.bootstrap4.css')}}" rel="stylesheet">

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h5 class="page-title">Payment History</h5>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item" aria-current="page">Payment Details</li>
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
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">

                        {{-- ........add new item........ --}}
                        {{--<div class="row add_new_item">
                            <div class="col-sm-12">
                                <a href="{{url('admin/category/create')}}" class="btn btn-info add-new"><i
                                        class="fa fa-plus"></i>Add New</a>
                            </div>
                        </div>--}}
                        {{-- ........add new item end........ --}}

                        {{-- ........search........ --}}
                        <div class="row">

                            <div class="col-sm-12 col-md-3">
                                <div class="dataTables_length" id="zero_config_length">
                                    <label>Show<select aria-controls="zero_config" class="form-control form-control-sm"
                                            onchange="pagenation_count(1)" name="pagenation_count" id="pagenation_count">
                                            <?php $page_size = config('admin_settings.page_size'); ?>
                                            <option value="5" @if($page_size == 5) selected @endif>5</option>
                                            <option value="10" @if($page_size == 10) selected @endif>10</option>
                                            <option value="20" @if($page_size == 20) selected @endif>20</option>
                                            <option value="50" @if($page_size == 50) selected @endif>50</option>
                                            <option value="100" @if($page_size == 100) selected @endif>100</option>
                                        </select>entries</label>
                                    </br>
                                    <span style="color:#F44336;">Customise order using drag and drop</span>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-9 ">
                                <div class="filter-group search_box">

                                    <label style="margin-left:5px">Order Id
                                        <input type="text" name="search_keyword" id="search_keyword" class="form-control">
                                        <button onclick="fetch_data(1)" class="btn btn-primary"><i
                                                class="fa fa-search"></i></button>
                                    </label>
                                </div>
                                <div class="filter-group select_box mx-3">
                                    <label>Payment Status
                                        <select name="search_status" id="search_status" class="form-control status_box">
                                            <option value="">Select All</option>
                                            <option value="complete">complete</option>
                                            <option value="pending">Pending</option>
                                        </select></label>
                                </div>
                                    <div class="filter-group search_box mx-3">
                                        <a href="{{ route('user.payment.export') }}" class="btn btn-primary">Export Data</a>
                                    </div>
                                <div class="filter-group select_box">
                                    {{-- <button onclick="export_data()" class="btn btn-primary">Export Data</button> --}}
                                    {{-- <a href="{{ route('payment.export_data') }}" class="btn btn-primary"><i
                                            class="fa fa-download me-1"></i>Export Data</a> --}}
                                </div>

                            </div>



                        </div>
                        {{-- ................ --}}

                        <!-- ============================table_data================================== -->

                        <div class="" id="table_data">
                            @include('admin/payments.listpayments_data_load')
                        </div>
                        <!-- =========================table_data end=================================== -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->




    <script src="{{asset('admin/js/datatables.min.js')}}"></script>
    <script src="{{asset('admin/js/select2.min.js')}}"></script>
    <script>

        $(document).ready(function () {
            $("#mytable #checkall").click(function () {
                if ($("#mytable #checkall").is(':checked')) {
                    $("#mytable input[type=checkbox]").each(function () {
                        $(this).prop("checked", true);
                    });

                } else {
                    $("#mytable input[type=checkbox]").each(function () {
                        $(this).prop("checked", false);
                    });
                }
            });

            $("[data-toggle=tooltip]").tooltip();
        });

    </script>
    <!-- <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script> -->
    <!-- action_status -->
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function export_data() {

            $.ajax({
                url: '{{ URL::asset('admin/payment/export_data') }}',
                type: 'GET',
            });
        }
        //  function action_status(id){
        //     $.ajax({
        //       url:'{{ URL::asset('/admin/action_status_category/')}}',
        //                   type: 'POST',
        //                   data: { id: id},
        //        success:function(data){
        //          var page_no=$('#page_no').val();
        //          fetch_data(page_no);
        //        }
        //     });
        //  }
    </script>
    <!-- end action_status -->
    <!-- delete -->
    <script>
        //  function delete_item(id){
        //    if(confirm('Are you sure you want to delete item?'))
        //    {
        //     $.ajax({
        //       url:'{{ URL::asset('/admin/delete_category') }}',
        //                   type: 'POST',
        //                   data: { id: id },
        //        success:function(data){
        //          var page_no=$('#page_no').val();
        //          fetch_data(page_no);
        //        }
        //     });
        //  }
        // }
    </script>

    <script>
        $(document).ready(function () {

            $(document).on('click', '.pagination a', function (event) {
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetch_data(page);
            });
        });

        function fetch_data(page) {
            var p_count = $('#pagenation_count').val();

            var search_keyword = $('#search_keyword').val();
            var search_status = $('#search_status').val();

            $.ajax({
                url: '{{ URL::asset('admin/payment/fetch_data?page=') }}' + page,
                type: 'GET',
                data: { p_count: p_count, search_keyword: search_keyword, search_status: search_status },
                success: function (data) {
                    $('#table_data').html(data);
                }
            });
        }

        function pagenation_count(page) {
            var p_count = $('#pagenation_count').val();

            var search_keyword = $('#search_keyword').val();
            var search_status = $('#search_status').val();

            $.ajax({
                url: '{{url('admin/category/index')}}',
                type: 'GET',
                data: { p_count: p_count, search_keyword: search_keyword, search_status: search_status },
                success: function (data) {
                    $('#table_data').html(data);
                }
            });
        }
    </script>




    <!-- delete end-->
@endsection
