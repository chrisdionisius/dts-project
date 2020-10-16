@extends('master')
@section('title','Edit Profil')
<!-- Custom styles for this template -->
<link href="{{asset('css/blog-post.css')}}" rel="stylesheet">
@section('content')
@include('layouts.navigation')
<!-- Page Content -->
<!-- Page Content -->
<div class="container">
    <h1>Edit Profil</h1>
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">{{session('sukses')}} </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <form action="/user/update" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama User</label>
                    <input name="name" type="text" class="form-control" id="name"aria-describedby="name" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input name="email" type="text" class="form-control" id="email"aria-describedby="email" value="{{$user->email}}">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection