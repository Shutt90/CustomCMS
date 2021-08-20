@extends('layouts.header')
@section('title', 'Dashboard')

@include('admin.layouts.adminside')

@section('content')

<body>
    <script src="{{url('')}}/js/app.js" type="module"></script>

    <h1 class="dashboard-title">Welcome back, $userName</h1>

    <div class="dashboard-content">

        <div class="dashboard-screens">

            <div class="row-margin row justify-center">
                <div class="col-lg-6 col-sm-12">
                    <canvas class="visitors"></canvas>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <canvas class="current-visitors"></canvas>
                </div>
            </div>

            <div class="row-margin row justify-center">
                <div class="col-lg-6 col-sm-12">
                    <canvas class="date"></canvas>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <canvas class="time"></canvas>
                </div>
            </div>
            
        </div>

    </div>

</body> 

@include('layouts.footer')

@stop
