@extends('admin.layouts.masterlayout')
@section('title', 'Dashboard')
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

            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-hover dash-bx">
                    <a href ="{{url('admin/payment/index')}}">
                    <div class="box text-left">
                        <h1 class="font-light bx-icon"><i class="fas fa-wallet m-r-3 m-l-3"></i></h1>
                        <h3 class="count"></h3>
                        <h6 class="">Payment Details</h6>
                    </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-hover dash-bx">
                    <a href ="{{url('admin/diocese/index')}}">
                    <div class="box text-left">
                        <h1 class="font-light bx-icon"><i class="fas fa-church m-r-3 m-l-3"></i></h1>
                        <h3 class="count"></h3>
                        <h6 class="">Diocese Master</h6>
                    </div>
                    </a>
                </div>
            </div>


            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-hover dash-bx">
                    <a href ="{{url('admin/parish/index')}}">
                    <div class="box text-left">
                        <h1 class="font-light bx-icon"><i class="fa fa-cross m-r-3 m-l-3"></i></h1>
                        <h3 class="count"></h3>
                        <h6 class="">Parish Master</h6>
                    </div>
                    </a>
                </div>
            </div>
        </div>
        </div>

    </div>
@endsection
