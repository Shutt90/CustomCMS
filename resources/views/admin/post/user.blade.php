<div class="user-container">
    @foreach($user->posts()->title as $post)
    {{$post->title}}
    @endforeach
</div>