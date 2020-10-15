<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;
use App\Post;
use App\User;
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
        $posts=Post::paginate(5);
        $author=User::all();
        return view('Home',['posts'=>$posts],['author'=>$author]);
    }
}
