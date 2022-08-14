@extends('layouts.app')

@section('title', 'Home')



@section('content')
@if (isset($err))
    <div class="alert alert-danger">
        <ul>
            
                <li>{{ $err }}</li>
            
        </ul>
    </div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">Owner</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
  @foreach($posts as $post)
    <tr>
      <th scope="row">{{ $post['id'] }} </th>
      <td><a href="{{route('posts.show',$post['id'])}}">{{ $post['title'] }}</a> </td>
      <td>{{ $post['body'] }} </td>
      <td>    {{ $post->user->name }}</td>
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
<center>
    {{ $posts->links() }}
</center>
@endsection