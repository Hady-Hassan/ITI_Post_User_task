@extends('layouts.app')

@section('content')
@if(isset($post['image']))
<img src="{{ Storage::disk('images')->url($post['image']) }}" alt="">
@endif
<h1>Title: {{$post['title']}}</h1>

<h3>body:- <br> {{$post['body']}}</h3>
@endsection