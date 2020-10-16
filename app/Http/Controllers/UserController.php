<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;


class UserController extends Controller
{
    public function __invoke(){
        $user=User::all();
        return view('user',['users'=>$user]);
    }
    public function delete($id){
        $user=User::find($id);
        $user->delete();
        return redirect('/user')->with('sukses','Data berhasil dihapus');
    }

    public function edit(){
        $user=Auth::user();
        return view('editprofile',['user'=>$user]);
    }

    public function update(Request $request){
        $id = Auth::user()->id;
        $user=User::find($id);
        $user->update($request->all());
        return redirect('/user/editprofile')->with('sukses','Data berhasil diupdate');
    }
}
