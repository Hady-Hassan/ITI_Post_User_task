<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DateTime;

class PostController extends Controller
{
    function index()
 {
   $posts = Post::simplepaginate(20);
    return view("posts.index")->with('posts',$posts);

 }

 function create()
 {
    return view("posts.create");
 }

 function store(Request $request)
 {
   Post::create(
      ['title' => $request['title'] , 'body' => $request['body'] , 'enabled'=> true , 'user_id'=> 123 , 'published_at'=>date("Y-m-d H:i:s", strtotime('now'))]
      );
      $posts = Post::simplepaginate(20);
      return view("posts.index")->with('posts',$posts);
 }
 function show($id)
 {
   $post =Post::where('id', $id)->get()->first();  
   return view("posts.show")->with('post',$post);
 }
 function edit($id)
 {
    $post =Post::where('id', $id)->get()->first() ;
    return view("posts.edit")->with('post',$post);
 }
 function update(Request $request , $id)
 {
   Post::find($id)->update(
      ['title' => $request['title'] , 'body' => $request['body']]
      );
      $posts = Post::simplepaginate(20);
      return view("posts.index")->with('posts',$posts);
 }

 function destroy($id)
 {
    $post =Post::where('id', $id)->get()->first();
    Post::where('id', $id)->get()->first()->delete(); 
    $posts = Post::simplepaginate(20);
    return view("posts.index")->with('posts',$posts);
 }
 function deletepost()
 {
   $posts=Post::withTrashed()->where('deleted_at','!=',null)->get();

   return view("posts.deleted")->with('posts',$posts);
 }
 function restorepost($id)
 {
   $post =Post::withTrashed()->where('id', $id)->get()->first()->restore();
   $posts=Post::withTrashed()->where('deleted_at','!=',null)->get();
   return view("posts.deleted")->with('posts',$posts);
 }
}
