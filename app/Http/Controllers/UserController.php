<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Config\View;
class UserController extends Controller
{


 function index()
 {
    $users = User::simplepaginate(20);
    return view("users.index")->with('users',$users);

 }

 function create()
 {
    return view("users.create");
 }

 function store(Request $request)
 {
   User::create(
      ['name' => $request['name'] , 'email' => $request['email'],'password'=>$request['pass']]
      );
    return "<h1>Name: ".$request['name']."</h1><br>"."<h1>Email: ".$request['email']."</h1><br> <h2>has been Stored</h2>";
 }
 function show($id)
 {
   $user =User::where('id', $id)->get()->first();  
   return view("users.show")->with('user',$user);
 }
 function edit($id)
 {
    $user =User::where('id', $id)->get()->first() ;
    return view("users.edit")->with('user',$user);
 }
 function update(Request $request , $id)
 {
   User::find($id)->update(
      ['name' => $request['name'] , 'email' => $request['email'],'password'=>$request['pass']]
      );
    return "<h1>Name: ".$request['name']."</h1><br>"."<h1>Email: ".$request['email']."</h1><br>";
 }

 function destroy($id)
 {
    $user =User::where('id', $id)->get()->first();
    User::where('id', $id)->get()->first()->delete(); 
    return "<h1>Name: ".$user['name']."</h1><br>"."<h1>Email: ".$user['email']."</h1><br> <h2>has been Deleted</h2>";
 }
}