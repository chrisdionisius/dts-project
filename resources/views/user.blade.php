@extends('master')
@section('title','Edit User')
<!-- Custom styles for this template -->
<link href="{{asset('css/blog-post.css')}}" rel="stylesheet">
@section('content')
    @include('layouts.navigation')
  <!-- Page Content -->
  <!-- Page Content -->
  <div class="container">
      @if(session('sukses'))
        <div class="alert alert-success" role="alert">{{session('sukses')}} </div>
      @endif
    <div class="row">
        <div class="col-6">
            <h1>Daftar User</h1>
        </div>
        <div class="col-6">
        </div>
            <div class="table-responsive">
            <table class="table table-dark table-hover table-bordered">
                <tr>
                    <th>ID</th>
                    <th>NAMA USER</th>
                    <th>EMAIL</th>
                    <th>PENDAFTARAN</th>
                    <th>ACTION</th>
                </tr>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{date('l, d F Y h:mA', strtotime($user->created_at))}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="/user/{{$user->id}}/delete">
                                <button type="button" class="btn btn-outline-danger" onclick="return confirm('Hapus user ?')">Hapus</button>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
            </div>
      </div>
    </div>
  </div>
@endsection