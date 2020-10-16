<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class KategoriController extends Controller
{
    public function __invoke(){
        $category=Category::all();
        return view('kategori',['categories'=>$category]);
    }

    public function create(Request $request){
        Category::create($request->all());
        return redirect('/kategori')->with('sukses','Data berhasil diinput');
    }
    public function edit($id){
        $category=Category::find($id);
        return view('editkategori',['category'=>$category]);
    }
    public function update(Request $request,$id){
        $category=Category::find($id);
        $category->update($request->all());
        return redirect('/kategori')->with('sukses','Data berhasil diupdate');
    }
    public function delete($id){
        $category=Category::find($id);
        $category->delete();
        return redirect('/kategori')->with('sukses','Data berhasil dihapus');
    }
}
