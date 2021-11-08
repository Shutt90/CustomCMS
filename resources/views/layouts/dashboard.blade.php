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
                <div class="nav-inner">
                    <a class="nav-inner-item" href="{{route('dashboard')}}">
                        <i class="fas fa-house-user"></i>
                    </a>
                    <a class="nav-inner-item" href="{{route('dashboard')}}">
                        <i class="fas fa-user"></i>
                    </a>
                    <a class="nav-inner-item" href="{{route('users.index')}}">
                        <i class="fas fa-users"></i>
                    </a>
                    <a class="nav-inner-item" href="{{route('content.index')}}">
                        <i class="fas fa-pen"></i>
                    </a>
                    <a class="nav-inner-item" href="{{route('gallery.index')}}">
                        <i class="fas fa-images"></i>
                    </a>
                    <a class="nav-inner-item" href="{{route('logout')}}">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="dashboard-admin">
            <div class="dashboard-admin-sec">
                @foreach($posts as $post)
                    <p class="dashboard-admin-sec__text">
                        <span class="title">{{$post->title}}</span>
                        <span class="content">{{substr($post->content, 0, 40) }}...</span>
                        <a href="{{route('user.posts', [$post->user->username])}}">
                            <span class="author">Written by {{$post->user->username}}</span>
                        </a>
                        <a href="{{route('post.show', [$post->id])}}">
                            Read more...
                        </a>
                    </p>
                @endforeach
            </div>
        </div>

    </div>

</body> 

@endsection
