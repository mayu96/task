@extends('layout')

@section('content')

<form action="{{ '/store' }}" method="post">
@csrf
    <div class="col-md-6">
        <textarea name="name" type="text" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
    </div> 
    <div class="col-auto my-1">   
        <button type="submit" class="btn btn-primary">追加</button>
    </div>
</form>

@foreach($objectives as $objective)
<div class="card-deck">
  <div class="card">    
    <div class="card-body">
      <h5 class="card-title">{{ $objective->title }}</h5>
      <a href="{{ url('/detail/'. $objective->id) }}" class="card-link">詳細</a>      
    </div>
  </div>
</div>
@endforeach
 

@foreach($tasks as $task)
<div class="col-md-6 p-3">
    <input value="{{ $task->name }}" type="text" id="disabledTextInput" class="form-control">
    <a href="{{ url('/delete/'. $task->id) }}" class="btn btn-sm btn-info">削除</a>
</div>
@endforeach







@endsection