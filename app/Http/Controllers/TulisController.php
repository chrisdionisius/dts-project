<?php

namespace App\Http\Controllers;
use \App\Category;
use \App\Post;
use Illuminate\Http\Request;

class TulisController extends Controller
{
    public function index(Request $request){
        $categories = Category::all();
        return view('tulis',['categories'=>$categories,],['request'=>$request]);
    }
    public function create(Request $request){
        Post::create($request->all());
        return $request->all();
    }
}
