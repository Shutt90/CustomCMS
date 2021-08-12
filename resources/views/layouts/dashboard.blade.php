@extends('layouts.header')
@section('title', 'Dashboard')

@section('content')

<body>
    <script src="{{url('')}}/js/app.js" type="module"></script>

    <h1 class="dashboard-title">Welcome back</h1>

    <div class="dashboard-content">

        <div class="dashboard-screens">
            <div class="dashboard-screen">
                <canvas class="visitors"></canvas>
                <canvas class="current-visitors"></canvas>
                <canvas class="date"></canvas>
                <canvas class="time"></canvas>
            </div>
        </div>

    </div>

</body> 

@include('layouts.footer')

@stop
