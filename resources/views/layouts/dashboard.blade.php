@extends('admin.layouts.adminside')

@section('title', 'Dashboard')

@section('content')
    <script src="{{url('')}}/js/app.js" type="module" defer></script>

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
            <div class="dashboard-graph-sec">
                ICONS SHOULD PROBABLY GO HERE TO DO THINGS OR MAYBE NAV
            </div>
        </div>

        <div class="dashboard-admin">
            <div class="dashboard-admin-sec">
                @foreach($posts as $post)
                <p class="dashboard-admin-sec__text">
                    <span class="title">{{$post->title}}</span>
                    <span class="content">{{substr($post->content, 0, 20) }}</span>
                </p>
                @endforeach
            </div>
        </div>

    </div>

</body> 

@include('layouts.footer')

@endsection
