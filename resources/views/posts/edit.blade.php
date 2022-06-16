@extends('Layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Post</h2>
        </div>
        {{-- <div class="pull-right">
            <a class="btn btn-primary" href="http://localhost:8000/posts/"> Back</a>
        </div>  --}}
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 
   
<form action="{{ route('posts.update', $posts->id), $posts->id }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tittle:</strong>
                <input type="text" name="tittle" class="form-control" value="{{$posts->tittle}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Post:</strong>
                <textarea id="editor1"class="form-control" style="height:150px" name="body" >{{$posts->body}}</textarea>
            </div>
        </div>
        {{Form::hidden('_method','PUT')}}
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>

@endsection