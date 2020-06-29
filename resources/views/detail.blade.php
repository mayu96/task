@extends('layout')

@section('content')

<ul class="list-group list-group-flush">
  <li class="list-group-item">{{ $objective->title }}</li>
  <li class="list-group-item">内容: {{ $objective->content }}</li>
  <li class="list-group-item">達成度: {{ $objective->progress }}</li>
</ul>




@endsection