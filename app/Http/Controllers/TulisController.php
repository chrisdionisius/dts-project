<?php

namespace App\Http\Controllers;
use \App\Category;
use \App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TulisController extends Controller
{   
    public function __construct()
    {
         $this->middleware('auth');
    }
    public function index(){
        $categories = Category::all();
        $sessionId = Auth::user()->id;
        return view('tulis',['categories'=>$categories,'sessionId'=>$sessionId]);
    }
    public function create(Request $request){
        Post::create($request->all());
        return redirect('/home');
    }
}
