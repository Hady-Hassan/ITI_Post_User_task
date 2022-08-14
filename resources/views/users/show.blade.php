@extends('layouts.app')
@section('content')

<h1>
Name:  {{$user['name']}}
 
</h1>

<h1>
Email:  {{$user['email']}}
 
</h1>

<h1>
Posts
</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
  @foreach($posts as $post)
    <tr>
      <th scope="row">{{ $post['id'] }} </th>
      <td><a href="{{route('posts.show',$post['id'])}}">{{ $post['title'] }}</a> </td>
      <td>{{ $post['body'] }} </td>
      <td>
            <a class="btn btn-primary" href="{{route('posts.edit',$post['id'])}}" role="button">Edit</a>
            <form action="{{route('posts.destroy',['post'=>$post['id']])}}" method="post">
            @method('DELETE')
            @csrf
                <button type="submit" class="btn btn-danger mb-3">Delete</button>
            </form>
           
            

      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection
