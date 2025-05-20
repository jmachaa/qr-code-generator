@extends('admin.layouts.masterlayout')
@section('title','Dashboard – '.e(config('admin_settings.engine_name')))
@section('content')
<style>
.card{
    border-bottom: 8px solid #a52125;
    border-radius: 5px;
}
.card-hover .box{
    background-color: #fff;
}
.card-hover h1{
    color: #a52125;
}
.card-hover h6{
    color: #a52125;
}
</style>
    <div class="container-fluid">
        <div class="row">

            {{-- <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-hover dash-bx">
                    <a href ="{{url('admin/classifieds/index')}}">
                    <div class="box text-left">
                        <h1 class="font-light bx-icon"><i class="fa fa-recycle m-r-3 m-l-3"></i></h1>
                        <h3 class="count">{{$classifieds_count}}</h3>
                        <h6 class="">Classifieds</h6>
                    </div>
                    </a>
                </div>
            </div> --}}

            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-hover dash-bx">
                    <a href ="{{url('admin/news/index')}}">
                    <div class="box text-left">
                        <h1 class="font-light bx-icon"><i class="far fa-newspaper m-r-3 m-l-3"></i></h1>
                        <h3 class="count"></h3>
                        <h6 class="">News</h6>
                    </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-hover dash-bx">
                    <a href ="{{url('admin/events/index')}}">
                    <div class="box text-left">
                        <h1 class="font-light bx-icon"><i class="far fa-calendar-alt m-r-3 m-l-3"></i></h1>
                        <h3 class="count"></h3>
                        <h6 class="">Events</h6>
                    </div>
                    </a>
                </div>
            </div>

            {{-- <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-hover dash-bx">
                    <a href ="{{url('admin/gallery/index')}}">
                    <div class="box text-left">
                        <h1 class="font-light bx-icon"><i class="far fa-images m-r-3 m-l-3"></i></h1>
                        <h3 class="count">{{$gallery_count}}</h3>
                        <h6 class="">Gallery</h6>
                    </div>
                    </a>
                </div>
            </div> --}}

            {{-- <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-hover dash-bx">
                    <a href ="{{url('admin/user/index')}}">
                    <div class="box text-left">
                        <h1 class="font-light bx-icon"><i class="far fa-address-card m-r-3 m-l-3"></i></h1>
                        <h3 class="count">{{$user_count}}</h3>
                        <h6 class="">Users</h6>
                    </div>
                    </a>
                </div>
            </div> --}}

            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-hover dash-bx">
                    <a href ="{{url('admin/members/index')}}">
                    <div class="box text-left">
                        <h1 class="font-light bx-icon"><i class="fa fa-users m-r-3 m-l-3"></i></h1>
                        <h3 class="count"></h3>
                        <h6 class="">Committee Members</h6>
                    </div>
                    </a>
                </div>
            </div>

             <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-hover dash-bx">
                    <a href ="{{url('admin/prayer_request/index')}}">
                    <div class="box text-left">
                        <h1 class="font-light bx-icon"><i class="fa fa-object-group m-r-3 m-l-3"></i></h1>
                        <h3 class="count"></h3>
                        <h6 class="">Prayer Requests</h6>
                    </div>
                    </a>
                </div>
            </div>

            {{-- <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-hover dash-bx">
                    <a href ="{{url('admin/chats/index')}}">
                    <div class="box text-left">
                        <h1 class="font-light bx-icon"><i class="far fa-comment m-r-3 m-l-3"></i></h1>
                        <h3 class="count">{{$chats_count}}</h3>
                        <h6 class="">Chats</h6>
                    </div>
                    </a>
                </div>
            </div> --}}


        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body" style="min-width:100%">
                        <canvas id="line-chart" width="800" height="450"></canvas>
                    </div>
                </div>
            </div>

            <!-- <div class="col-sm-6">
                <div class="card">
                    <div class="card-body" style="min-width:100%">
                        <canvas id="bar-chart" width="800" height="450"></canvas>
                    </div>
                </div>
            </div> -->
        </div>

    </div>



{{-- <script src="{{asset('admin/js/Chart.min.js')}}"></script> --}}
<script type="text/javascript">
// @$prayer_request_arr=array();
// @$online_reg_arr=array();
//     var prayer_request_arr = <?php echo json_encode($prayer_request_arr); ?>;
//     var online_reg_arr = <?php echo json_encode($online_reg_arr); ?>;

    new Chart(document.getElementById("line-chart"), {
    type: 'line',
    data: {
        labels: ["JAN", "FEB", "MAR", "APR", "MAY","JUN","JULY","AUG","SEPT","OCT","NOW","DEC"],
        datasets: [
            {
                fill: false,
                label: "Registrations",
                backgroundColor: "#fff",
                borderColor: "#c45850",
                data: prayer_request_arr,
            }
        ]
    },
    options: {
        legend: { display: false },
        title: {
            display: true,
            text: 'Prayer Request'
        }
    }
    });
</script>


<script>
    new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
        labels: ["JAN", "FEB", "MAR", "APR", "MAY","JUN","JULY","AUG","SEPT","OCT","NOW","DEC"],
        datasets: [
            {
                label: "Classifieds",
                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#3e95cd", "#8e5ea2"],
                data: online_reg_arr
            }
        ]
    },
    options: {
        legend: { display: false },
        title: {
            display: true,
            text: 'Classifieds Report'
        }
    }
    });
</script>
@endsection
