<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
use \App\User;

class PostController extends Controller
{
    public function index($id_post){
        $post= Post::find($id_post);
        $user= User::all();
        return view('post',['post'=>$post],['user'=>$user]);
    }
}