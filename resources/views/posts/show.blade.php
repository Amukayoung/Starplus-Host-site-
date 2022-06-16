@extends('Layouts.app')

@section('content')
<a href="/posts"><button type="button" class="btn btn-success">Go Back</button></a>
        <div class="list-group-item">
            <h3 >{{$posts->tittle}}</h3>
            
        </div>
       <div>
        <p>{!!$posts->body!!}</p>
       </div>
       <small >Posted on: {{$posts->created_at}}</small>
       <a class="btn btn-primary" href="/posts/{{$posts->id}}/edit">Edit</a>
       {!!Form::open(['url'=>['posts',$posts->id],'method'=>'POST', 'class'=>'pull-right'])!!}
            {{Form::hidden("_method","DELETE")}}
            {{Form::submit("Delete",['class'=>'btn btn-danger'])}}

       {!!Form::close()!!}
       {{-- {{ $posts->links() }} --}}
       
    
@endsection