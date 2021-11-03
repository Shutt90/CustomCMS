@extends('admin.layouts.adminside')

@section('title', 'Dashboard')

@section('content')

<body>
    <script src="{{url('')}}/js/app.js" type="module" defer></script>

    <h1 class="dashboard-title">Welcome Back {{Auth::user()->fname}}</h1>

    <div class="dashboard">
        <div class="dashboard-info">
            <div class="dashboard-info-sec">
                Welcome Back<br/>
                {{Auth::user()->fname}} {{Auth::user()->surname}}
            </div>
            <div class="dashboard-info-sec">
                <p class="dashboard-info-sec__text">
                    <span>Since you last visit there has been</span>
                    <span>Number</span>
                    <span>New Visitors</span>
                </p>
            </div>
            <div class="dashboard-info-sec">
                <p class="dashboard-info-sec__text">
                    <span>Since you last visit there has been</span>
                    <span>Number</span>
                    <span>New Purchases??</span>
                </p>
            </div>
        </div>

        <div class="dashboard-graph">
            <div class="dashboard-graph-sec">
                <canvas class="visitors"></canvas>
            </div>
            <div class="dashboard-graph-sec">
                <canvas class="current-visitors"></canvas>
            </div>
        </div>

    </div>

</body> 

@include('layouts.footer')

@stop
