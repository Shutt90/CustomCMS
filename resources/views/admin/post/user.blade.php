<div class="user-container">
    @foreach($posts as $post)
    <h3 class="user-posts__title">{{$post->title}}</h3>
    <p class="user-posts__content">
    {{$post->content}}
    </p>
    
    @endforeach
</div>