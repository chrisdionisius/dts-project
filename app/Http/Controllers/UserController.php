<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
