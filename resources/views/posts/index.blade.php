@extends('Layouts.app')

@section('content')

<h2>Most recent posts</h2> <a href="/posts/create"><button type="button" class="btn btn-success">Create a Post</button></a>
@if(count($posts) > 0)
    <div >  
        @foreach($posts as $post)
        <div class="list-group-item">
            <h3 ><a href="/posts/{{$post->id}}"> {{$post->tittle}}</a></h3>
            <small >Posted on: {{$post->created_at}}</small>
        </div>
        @endforeach
    </div>  
@else
<h2>No post found</h2>
@endif
  {{ $posts->links() }} 
@endsection