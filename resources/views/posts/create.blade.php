@extends('layouts.app')
@section('title','register')
@section('new', 'active')
@section('content')

<form action="." method="post">
  @csrf
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">title</label>
    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="enter the title">
    </div>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">body</label>
    <input type="text" name="body" class="form-control" id="exampleFormControlInput1" placeholder="enter the post">
    </div>

    <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">post</button>
  </div>
</form>


@endsection