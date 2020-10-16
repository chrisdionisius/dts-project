<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;

class ManagePostController extends Controller
{   
    public function __invoke(){
        $posts=Post::orderby('created_at','desc')->paginate(5);
        $users=User::all();
        $categories=Category::all();
        return view('managepost',['posts'=>$posts,'categories'=>$categories,'users'=>$users]);
    }
    public function edit($id){
        $post=Post::find($id);
        return view('editpost',['post'=>$post]);
    }
    public function update(Request $request,$id){
        $post=Post::find($id);
        $post->update($request->all());
        return redirect('/managepost')->with('sukses','Data berhasil diupdate');
    }
    public function delete($id){
        $post=Post::find($id);
        $post->delete();
        return redirect('/managepost')->with('sukses','Data berhasil dihapus');
    }
}
