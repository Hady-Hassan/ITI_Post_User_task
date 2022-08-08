
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="/users">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            users
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item @if(Route::is('users.index')) active @endif" href="{{route('users.index')}}">List</a></li>
            <li><a class="dropdown-item @if(Route::is('users.create')) active @endif" href="{{route('users.create')}}">New User</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Posts
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item @if(Route::is('posts.index')) active @endif" href="{{route('posts.index')}}">Posts</a></li>
            <li><a class="dropdown-item @if(Route::is('posts.create')) active @endif" href="{{route('posts.create')}}">New post</a></li>
            <li><a class="dropdown-item @if(Route::is('posts.delete')) active @endif" href="{{route('posts.delete')}}">Deleted posts</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
