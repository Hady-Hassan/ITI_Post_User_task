@extends('layouts.app')
@section('title','Edit')

@section('content')

<form action="." method="post">
    @method('PUT')
    @csrf
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Username</label>
    <input type="text" class="form-control" name="name" id="exampleFormControlInput1" value = "{{$user['name']}}">
    </div>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" value = "{{$user['email']}}">
    </div>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Password</label>
    <input type="text" class="form-control" name="pass" id="exampleFormControlInput1" value = "{{$user['password']}}">
    </div>
    <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">edit</button>
  </div>
</form>


@endsection