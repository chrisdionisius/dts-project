@extends('master')
@section('title','Kategori')
<!-- Custom styles for this template -->
<link href="{{asset('css/blog-post.css')}}" rel="stylesheet">
@section('content')
@include('layouts.navigation')
<!-- Page Content -->
<!-- Page Content -->
<div class="container">
    <h1>Edit Kategori</h1>
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">{{session('sukses')}} </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <form action="/kategori/{{$category->id}}/update" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kategori</label>
                    <input name="nama_kategori" type="text" class="form-control" id="nama_kategori"aria-describedby="nama_kategori" value="{{$category->nama_kategori}}">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection