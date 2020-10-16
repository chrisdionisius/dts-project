<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;
use App\Post;
use App\User;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __invoke()
    {   
        $posts=Post::orderby('id','desc')->paginate(5);
        $author=User::all();
        $categories=Category::all();
        return view('Home',['posts'=>$posts,'author'=>$author,'categories'=>$categories]);
    }

    public function kategori($id){
        $posts=Post::where('id_kategori',$id)->orderby('id','desc')->paginate(5);
        $author=User::all();
        $categories=Category::all();
        return view('Home',['posts'=>$posts,'author'=>$author,'categories'=>$categories]);
    }
}
