@extends('layouts.app')

@section('title', 'Home')
@section('home', 'active')
@section('list', 'active')


@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Posts</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
  @foreach($users as $user)
    <tr>
      <th scope="row">{{ $user['id'] }} </th>
      <td><a href="{{route('users.show',$user['id'])}}">{{ $user['name'] }}</a> </td>
      <td>{{ $user['email'] }} </td>

      <td>
        {{ $user->posts_count }}  
      </td>

      <td>
            <a class="btn btn-primary" href="{{route('users.edit',$user['id'])}}" role="button">Edit</a>
            <form action="{{route('users.destroy',['user'=>$user['id']])}}" method="post">
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
    {{ $users->links() }}
</center>
@endsection