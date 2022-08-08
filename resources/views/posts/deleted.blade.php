@extends('layouts.app')

@section('title', 'Home')



@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">Deleted at</th>
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
      {{ $post['deleted_at'] }}
      </td>
      <td>
      <form action="{{route('posts.restore',['post'=>$post['id']])}}" method="post">
            @csrf
                <button type="submit" class="btn btn-warning mb-3">Restore</button>
            </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection