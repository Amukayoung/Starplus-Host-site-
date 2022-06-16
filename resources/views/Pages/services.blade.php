@extends('Layouts.app')

@section('content')
<h1>{{$tittle}}</h1>
@if(count($works) > 0)
    <ul class="list-group">  
        @foreach($works as $work)
            <li class="list-group-item">{{$work}}</li>
        @endforeach
    </ul>  
@endif

@endsection
   